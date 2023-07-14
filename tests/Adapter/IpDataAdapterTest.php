<?php

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Tests\Adapter;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use PeakyBlind3rs\IpAddressInterface\Adapter\IpDataAdapter;

class IpDataAdapterTest extends TestCase
{
    /**
     * Test the case where the HTTP request succeeds and returns valid json.
     *
     * @return void
     */
    public function testLookupValidResponse(): void
    {
        $config = ['query' => ['timeout' => '10']];
        $ipAddress = "24.24.24.24";

        $responseBody = json_encode([
            'ip' => $ipAddress,
            'is_eu' => false,
            'city' => 'Syracuse',
            'region' => 'New York',
            'region_code' => 'NY',
            'region_type' => 'state',
            'country_name' => 'United States',
            'country_code' => 'US',
            'continent_name' => 'North America',
            'continent_code' => 'NA',
            'latitude' => 43.0483,
            'longitude' => -76.1468,
            'postal' => '13261',
            'calling_code' => '1',
            'flag' => 'https://ipdata.co/flags/us.png',
            'emoji_flag' => '🇺🇸',
            'emoji_unicode' => 'U+1F1FA U+1F1F8',
            'carrier' => [
                'name' => 'T-Mobile',
                'mcc' => '310',
                'mnc' => '160'
            ],
            'asn' => [
                'asn' => 'AS15169',
                'name' => 'Google LLC',
                'domain' => 'google.com',
                'route' => '35.192.0.0/14',
                'type' => 'hosting'
            ],
            'time_zone' => [
                'name' => 'America/Los_Angeles',
                'abbr' => 'PDT',
                'offset' => '-0700',
                'is_dst' => true,
                'current_time' => '2019-03-27T01:13:48.930025-07:00'
            ],
            'currency' => [
                'name' => 'Australian Dollar',
                'code' => 'AUD',
                'symbol' => 'AU$',
                'native' => '$',
                'plural' => 'Australian dollars'
            ],
            'company' => [
                'name' => 'Apple Inc.',
                'domain' => 'apple.com',
                'network' => '144.178.56.0/21',
                'type' => 'business'
            ],
            'threat' => [
                'is_tor' => false,
                'is_icloud_relay' => false,
                'is_proxy' => false,
                'is_datacenter' => false,
                'is_anonymous' => false,
                'is_known_attacker' => true,
                'is_known_abuser' => true,
                'is_threat' => true,
                'is_bogon' => false,
                'blocklists' => [
                    [
                        'name' => 'Spamhaus',
                        'site' => 'https://www.spamhaus.org',
                        'type' => 'general'
                    ],
                    [
                        'name' => 'USTC.edu.cn',
                        'site' => 'https://ustc.edu.cn',
                        'type' => 'general'
                    ]
                ],
                'scores' => [
                    'vpn_score' => 0,
                    'proxy_score' => 0,
                    'threat_score' => 1,
                    'trust_score' => 100
                ]
            ],
        ]);
        $response = new Response(200, [], $responseBody);

        $mock = new MockHandler([
            $response,
        ]);

        $handlerStack = HandlerStack::create($mock);
        $client = new Client(['handler' => $handlerStack]);

        $adapter = new IpDataAdapter($config, $client);
        /** @var \PeakyBlind3rs\IpAddressInterface\Interface\Model\IpAddressInterface $result */
        $result = $adapter->lookup($ipAddress);

        $this->assertEquals($ipAddress, $result->getIp());
    }

    /**
     * Test the case where the HTTP request throws an exception.
     *
     * @return void
     */
    public function testLookupRequestException(): void
    {
        $config = ['query' => ['timeout' => '10']];
        $ipAddress = "8.8.8.8";

        $mock = new MockHandler([
            new RequestException("error", new Request("GET", $ipAddress)),
        ]);

        $handlerStack = HandlerStack::create($mock);
        $client = new Client(['handler' => $handlerStack]);

        $adapter = new IpDataAdapter($config, $client);
        /** @var \Psr\Http\Message\ResponseInterface $result */
        $result = $adapter->lookup($ipAddress);

        /** @var array{message: string} $response */
        $response = json_decode($result->getBody()->getContents(), true);

        $this->assertSame('error', $response['message']);
        $this->assertEquals(400, $result->getStatusCode());
    }

    /**
     * Test the case where the HTTP request succeeds but returns invalid json.
     *
     * @return void
     * @throws Exception
     */
    public function testLookupInvalidResponse(): void
    {
        $config = ['query' => ['timeout' => '10']];
        $ipAddress = "8.8.8.8";

        $response = new Response(200, [], "{");

        $mock = new MockHandler([
            $response,
        ]);

        $handlerStack = HandlerStack::create($mock);
        $client = new Client(['handler' => $handlerStack]);

        $adapter = new IpDataAdapter($config, $client);
        /** @var \Psr\Http\Message\ResponseInterface $result */
        $result = $adapter->lookup($ipAddress);
        /** @var array{message: string} $response */
        $response = json_decode($result->getBody()->getContents(), true);

        $this->assertSame('Downloaded response is not a valid JSON', $response['message']);
        $this->assertEquals(406, $result->getStatusCode());
    }
}
