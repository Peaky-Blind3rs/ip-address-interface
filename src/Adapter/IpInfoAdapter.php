<?php

/**
 * File for IpInfoAdapter (Adapter to fetch IP data).
 *
 * This file contains the IpInfoAdapter class which implements IpLookupInterface
 * and contains methods for fetching and processing IP address data.
 *
 * PHP version 8.2
 *
 * @category    Adapter
 * @package     PeakyBlind3rs\IpAddressInterface\Adapter
 * @author      Tommy Shelby <developers@remitso.com>
 * @copyright   2023 RemitSo Private Limited
 * @license     http://opensource.org/licenses/MIT MIT License
 * @link        https://github.com/Peaky-Blind3rs/ip-address-interface
 */

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Adapter;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\Response;
use PeakyBlind3rs\IpAddressInterface\Interface\IpLookupInterface;
use PeakyBlind3rs\IpAddressInterface\Model\Asn;
use PeakyBlind3rs\IpAddressInterface\Model\Company;
use PeakyBlind3rs\IpAddressInterface\Model\Geolocation;
use PeakyBlind3rs\IpAddressInterface\Model\IpAddress;
use PeakyBlind3rs\IpAddressInterface\Model\MobileCarrier;
use PeakyBlind3rs\IpAddressInterface\Model\ThreatIntelligence;
use PeakyBlind3rs\IpAddressInterface\Model\Timezone;
use Psr\Http\Message\ResponseInterface;

/**
 * IpInfoAdapter class
 *
 * An adapter to implement the IpLookupInterface, and it fetches IP data
 * from the 'https://ipinfo.io' endpoint. This class can handle connection timeouts
 * and uses the GuzzleHttp client for making the connection and handling responses.
 *
 * @category    Adapter
 * @package     PeakyBlind3rs\IpAddressInterface\Adapter
 * @author      Tommy Shelby <developers@remitso.com>
 * @copyright   2023 RemitSo Private Limited
 * @license     http://opensource.org/licenses/MIT MIT License
 * @link        https://github.com/Peaky-Blind3rs/ip-address-interface
 */
class IpInfoAdapter implements IpLookupInterface
{
    /**
     * API endpoint URL
     *
     * @var string
     */
    public const ENDPOINT = 'https://ipinfo.io';

    /**
     * API token for IPInfo
     *
     * @var string|null
     */
    private ?string $apiToken = null;

    /**
     * Timeout configuration for the HTTP client
     *
     * @var int|null
     */
    private ?int $timeout = null;

    /**
     * @var \GuzzleHttp\Client
     */
    private Client $client;

    /**
     * IpInfoAdapter constructor.
     *
     * Extracts API key and timeout parameters from the provided configuration array.
     *
     * @param array{
     *      scheme?: string,
     *      host?: string,
     *      port?: int,
     *      user?: string,
     *      pass?: string,
     *      path?: string,
     *      query?: array{timeout?: string},
     *      fragment?: string,
     *  } $config Configuration array may include host, user, pass, etc.
     * @param \GuzzleHttp\Client|null $client HTTP Client
     */
    public function __construct(readonly array $config, ?Client $client = null)
    {
        $this->apiToken = $config['pass'] ?? null;
        $this->timeout = isset($config['query']['timeout']) ? (int)$config['query']['timeout'] : 30;
        $this->client = $client ?: new Client([
            'base_uri' => self::ENDPOINT,
            'timeout' => $this->timeout,
            'query' => [
                'token' => $this->apiToken,
            ],
        ]);
    }

    /**
     * Lookup IP Address
     *
     * Retrieves IP address information from IP Info API.
     *
     * @param string $ipAddress to retrieve information for
     * @return \PeakyBlind3rs\IpAddressInterface\Model\IpAddress|\Psr\Http\Message\ResponseInterface The IP address
     * data or HTTP response on failure
     */
    public function lookup(string $ipAddress): IpAddress|ResponseInterface
    {
        try {
            /** @var \Psr\Http\Message\ResponseInterface $response */
            $response = $this->client->get($ipAddress);
            /**
             * @var array{
             *      ip?: string,
             *      city?: string,
             *      region?: string,
             *      country?: string,
             *      loc?: string,
             *      postal?: string,
             *      timezone?: string,
             *      anycast?: bool,
             *      bogon?: bool,
             *      carrier?: array{
             *          name?: string,
             *          mcc?: string,
             *          mnc?: string
             *      },
             *      privacy?: array{
             *          vpn?: bool,
             *          proxy?: bool,
             *          tor?: bool,
             *          relay?: bool,
             *          hosting?: bool
             *      },
             *      asn?: array{
             *          asn?: string,
             *          name?: string,
             *          domain?: string,
             *          route?: string,
             *          type?: string
             *      },
             *      company?: array{
             *          name?: string,
             *          domain?: string,
             *          type?: string
             *     }
             * } $ipInfo IP Info Response
             */
            $ipInfo = json_decode($response->getBody()->getContents(), true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $ipAddress = new IpAddress();
                $ipAddress->setIp($ipInfo['ip'] ?? null);
                /** @var array<string> $latLng */
                $latLng = array_filter(explode(',', $ipInfo['loc'] ?? ''), null, FILTER_VALIDATE_FLOAT);
                foreach ($latLng as &$item) {
                    $item = (float)$item;
                }
                /** @var float|null $lat */
                $lat = $latLng[0] ?? null;
                /** @var float|null $lng */
                $lng = $latLng[1] ?? null;
                $geolocation = new Geolocation();
                $geolocation
                    ->setCity($ipInfo['city'] ?? null)
                    ->setCountryCode($ipInfo['country'] ?? null)
                    ->setLatitude($lat)
                    ->setLongitude($lng)
                    ->setPostal($ipInfo['postal'] ?? null)
                    ->setRegion($ipInfo['region'] ?? null);
                $ipAddress->setGeolocation($geolocation);
                if (!empty($ipInfo['asn'])) {
                    $asn = new Asn();
                    $asn->setAsn($ipInfo['asn']['asn'] ?? null)
                        ->setName($ipInfo['asn']['name'] ?? null)
                        ->setDomain($ipInfo['asn']['domain'] ?? null)
                        ->setRoute($ipInfo['asn']['route'] ?? null)
                        ->setType($ipInfo['asn']['type'] ?? null);
                    $ipAddress->setAsn($asn);
                }
                if (!empty($ipInfo['company'])) {
                    $company = new Company();
                    $company->setName($ipInfo['company']['name'] ?? null)
                        ->setDomain($ipInfo['company']['domain'] ?? null)
                        ->setType($ipInfo['company']['type'] ?? null);
                    $ipAddress->setCompany($company);
                }
                if (!empty($ipInfo['carrier'])) {
                    $carrier = new MobileCarrier();
                    $carrier
                        ->setName($ipInfo['carrier']['name'] ?? null)
                        ->setMnc($ipInfo['carrier']['mnc'] ?? null)
                        ->setMcc($ipInfo['carrier']['mcc'] ?? null);
                    $ipAddress->setMobileCarrier($carrier);
                }
                if (!empty($ipInfo['timezone'])) {
                    $timezone = new Timezone();
                    $timezone
                        ->setName($ipInfo['timezone']);
                    $ipAddress->setTimezone($timezone);
                }
                if (!empty($ipInfo['privacy']) || !empty($ipInfo['bogon'])) {
                    $threat = new ThreatIntelligence();
                    $threat
                        ->setTor($ipInfo['privacy']['tor'] ?? false)
                        ->setBogon($ipInfo['bogon'] ?? false)
                        ->setAnonymous($ipInfo['privacy']['vpn'] ?? false)
                        ->setDatacenter($ipInfo['privacy']['hosting'] ?? false)
                        ->setIcloudRelay($ipInfo['privacy']['relay'] ?? false)
                        ->setProxy($ipInfo['privacy']['proxy'] ?? false);
                    $ipAddress->setThreatIntelligence($threat);
                }

                return $ipAddress;
            }
            $responseBody = json_encode([
                'message' => 'Downloaded response is not a valid JSON',
            ]);
            $response = new Response(406, [], $responseBody);
        } catch (RequestException $e) {
            /** @var \Psr\Http\Message\ResponseInterface $response */
            $response = $e->hasResponse() ? $e->getResponse() : new Response(400, [], json_encode([
                'message' => $e->getMessage(),
            ]));
        }

        return $response;
    }
}
