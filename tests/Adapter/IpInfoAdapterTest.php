<?php

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Tests\Adapter;

use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use PeakyBlind3rs\IpAddressInterface\Adapter\IpInfoAdapter;
use PHPUnit\Framework\TestCase;

class IpInfoAdapterTest extends TestCase
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
            'city' => 'Syracuse',
            'region' => 'New York',
            'country' => 'US',
            'loc' => '43.0483, -76.1468',
            'postal' => '13261',
            'timezone' => 'America/Los_Angeles',
            'bogon' => false,
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
            'company' => [
                'name' => 'Apple Inc.',
                'domain' => 'apple.com',
                'type' => 'business'
            ],
            'privacy' => [
                'vpn' => false,
                'proxy' => false,
                'tor' => false,
                'relay' => false,
                'hosting' => false,
            ],
        ]);
        $response = new Response(200, [], $responseBody);

        $mock = new MockHandler([
            $response,
        ]);

        $handlerStack = HandlerStack::create($mock);
        $client = new Client(['handler' => $handlerStack]);

        $adapter = new IpInfoAdapter($config, $client);
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

        $adapter = new IpInfoAdapter($config, $client);
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

        $adapter = new IpInfoAdapter($config, $client);
        /** @var \Psr\Http\Message\ResponseInterface $result */
        $result = $adapter->lookup($ipAddress);
        /** @var array{message: string} $response */
        $response = json_decode($result->getBody()->getContents(), true);

        $this->assertSame('Downloaded response is not a valid JSON', $response['message']);
        $this->assertEquals(406, $result->getStatusCode());
    }
}
