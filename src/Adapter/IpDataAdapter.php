<?php

/**
 * File for IpDataAdapter (Adapter to fetch IP data).
 *
 * This file contains the IpDataAdapter class which implements IpLookupInterface
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
use PeakyBlind3rs\IpAddressInterface\Model\Blocklist;
use PeakyBlind3rs\IpAddressInterface\Model\Company;
use PeakyBlind3rs\IpAddressInterface\Model\Currency;
use PeakyBlind3rs\IpAddressInterface\Model\Geolocation;
use PeakyBlind3rs\IpAddressInterface\Model\IpAddress;
use PeakyBlind3rs\IpAddressInterface\Model\MobileCarrier;
use PeakyBlind3rs\IpAddressInterface\Model\ReputationScore;
use PeakyBlind3rs\IpAddressInterface\Model\ThreatIntelligence;
use PeakyBlind3rs\IpAddressInterface\Model\Timezone;
use Psr\Http\Message\ResponseInterface;

/**
 * IpDataAdapter class
 *
 * An adapter to implement the IpLookupInterface, and it fetches IP data
 * from the 'https://api.ipdata.co' endpoint. This class can handle connection timeouts
 * and uses the GuzzleHttp client for making the connection and handling responses.
 *
 * @category    Adapter
 * @package     PeakyBlind3rs\IpAddressInterface\Adapter
 * @author      Tommy Shelby <developers@remitso.com>
 * @copyright   2023 RemitSo Private Limited
 * @license     http://opensource.org/licenses/MIT MIT License
 * @link        https://github.com/Peaky-Blind3rs/ip-address-interface
 */
class IpDataAdapter implements IpLookupInterface
{
    /**
     * API endpoint URL
     *
     * @var string
     */
    public const ENDPOINT = 'https://api.ipdata.co';

    /**
     * API Key for IP Data
     *
     * @var string|null
     */
    private ?string $apiKey = null;

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
     * IpDataAdapter constructor.
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
        $this->apiKey = $config['pass'] ?? null;
        $this->timeout = isset($config['query']['timeout']) ? (int)$config['query']['timeout'] : 30;
        $this->client = $client ?: new Client([
            'base_uri' => self::ENDPOINT,
            'timeout' => $this->timeout,
            'query' => [
                'api-key' => $this->apiKey,
            ],
        ]);
    }

    /**
     * Lookup IP Address
     *
     * Retrieves IP address information from IP Data API.
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
             *      is_eu?: bool,
             *      city?: string,
             *      region?: string,
             *      region_type?: string,
             *      region_code?: string,
             *      country_name?: string,
             *      country_code?: string,
             *      continent_name?: string,
             *      continent_code?: string,
             *      latitude?: float,
             *      longitude?: float,
             *      postal?: string,
             *      calling_code?: string,
             *      carrier?: array{
             *          name?: string,
             *          mcc?: string,
             *          mnc?: string
             *      },
             *      time_zone?: array{
             *          name?: string,
             *          abbr?: string,
             *          offset?: string,
             *          is_dst?: bool,
             *          current_time?: string
             *       },
             *      currency?: array{
             *          name?: string,
             *          code?: string,
             *          symbol?: string,
             *          native?: string,
             *          plural?: string
             *      },
             *      threat?: array{
             *          is_tor?: bool,
             *          is_icloud_relay?: bool,
             *          is_proxy?: bool,
             *          is_datacenter?: bool,
             *          is_anonymous?: bool,
             *          is_known_attacker?: bool,
             *          is_known_abuser?: bool,
             *          is_threat?: bool,
             *          is_bogon?: bool,
             *          blocklists?: array<array{
             *              name?: string,
             *              site?: string,
             *              type?: string
             *          }>,
             *          scores?: array{
             *              vpn_score?: int,
             *              proxy_score?: int,
             *              threat_score?: int,
             *              trust_score?: int
             *          }
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
             *          network?: string,
             *          type?: string
             *     }
             * } $ipData IP Data Response
             */
            $ipData = json_decode($response->getBody()->getContents(), true);
            if (json_last_error() === JSON_ERROR_NONE) {
                $ipAddress = new IpAddress();
                $ipAddress->setIp($ipData['ip'] ?? null);
                $geolocation = new Geolocation();
                $geolocation
                    ->setCity($ipData['city'] ?? null)
                    ->setCallingCode($ipData['calling_code'] ?? null)
                    ->setContinentCode($ipData['continent_code'] ?? null)
                    ->setContinentName($ipData['continent_name'] ?? null)
                    ->setCountryName($ipData['country_name'] ?? null)
                    ->setCountryCode($ipData['country_code'] ?? null)
                    ->setEu($ipData['is_eu'] ?? null)
                    ->setLatitude($ipData['latitude'] ?? null)
                    ->setLongitude($ipData['longitude'] ?? null)
                    ->setPostal($ipData['postal'] ?? null)
                    ->setRegion($ipData['region'] ?? null)
                    ->setRegionCode($ipData['region_code'] ?? null)
                    ->setRegionType($ipData['region_type'] ?? null);
                $ipAddress->setGeolocation($geolocation);
                if (!empty($ipData['asn'])) {
                    $asn = new Asn();
                    $asn->setAsn($ipData['asn']['asn'] ?? null)
                        ->setName($ipData['asn']['name'] ?? null)
                        ->setDomain($ipData['asn']['domain'] ?? null)
                        ->setRoute($ipData['asn']['route'] ?? null)
                        ->setType($ipData['asn']['type'] ?? null);
                    $ipAddress->setAsn($asn);
                }
                if (!empty($ipData['company'])) {
                    $company = new Company();
                    $company->setName($ipData['company']['name'] ?? null)
                        ->setDomain($ipData['company']['domain'] ?? null)
                        ->setNetwork($ipData['company']['network'] ?? null)
                        ->setType($ipData['company']['type'] ?? null);
                    $ipAddress->setCompany($company);
                }
                if (!empty($ipData['carrier'])) {
                    $carrier = new MobileCarrier();
                    $carrier
                        ->setName($ipData['carrier']['name'] ?? null)
                        ->setMnc($ipData['carrier']['mnc'] ?? null)
                        ->setMcc($ipData['carrier']['mcc'] ?? null);
                    $ipAddress->setMobileCarrier($carrier);
                }
                if (!empty($ipData['time_zone'])) {
                    $timezone = new Timezone();
                    $timezone
                        ->setName($ipData['time_zone']['name'] ?? null)
                        ->setAbbr($ipData['time_zone']['abbr'] ?? null)
                        ->setOffset($ipData['time_zone']['offset'] ?? null);
                    $ipAddress->setTimezone($timezone);
                }
                if (!empty($ipData['currency'])) {
                    $currency = new Currency();
                    $currency
                        ->setName($ipData['currency']['name'] ?? null)
                        ->setCode($ipData['currency']['code'] ?? null)
                        ->setNative($ipData['currency']['native'] ?? null)
                        ->setSymbol($ipData['currency']['symbol'] ?? null)
                        ->setPlural($ipData['currency']['plural'] ?? null);
                    $ipAddress->setCurrency($currency);
                }
                if (!empty($ipData['threat'])) {
                    $threat = new ThreatIntelligence();
                    $threat
                        ->setThreat($ipData['threat']['is_threat'] ?? false)
                        ->setTor($ipData['threat']['is_tor'] ?? false)
                        ->setBogon($ipData['threat']['is_bogon'] ?? false)
                        ->setAnonymous($ipData['threat']['is_anonymous'] ?? false)
                        ->setDatacenter($ipData['threat']['is_datacenter'] ?? false)
                        ->setIcloudRelay($ipData['threat']['is_icloud_relay'] ?? false)
                        ->setKnownAbuser($ipData['threat']['is_known_abuser'] ?? false)
                        ->setKnownAttacker($ipData['threat']['is_known_attacker'] ?? false)
                        ->setProxy($ipData['threat']['is_proxy'] ?? false);
                    if (!empty($ipData['threat']['scores'])) {
                        $reputationScores = new ReputationScore();
                        $reputationScores
                            ->setProxyScore($ipData['threat']['scores']['proxy_score'] ?? null)
                            ->setThreatScore($ipData['threat']['scores']['threat_score'] ?? null)
                            ->setTrustScore($ipData['threat']['scores']['trust_score'] ?? null)
                            ->setVpnScore($ipData['threat']['scores']['vpn_score'] ?? null);
                        $threat->setScores($reputationScores);
                    }
                    if (!empty($ipData['threat']['blocklists'])) {
                        foreach ($ipData['threat']['blocklists'] as $threatBlocklist) {
                            $blocklist = new Blocklist();
                            $blocklist
                                ->setName($threatBlocklist['name'] ?? null)
                                ->setType($threatBlocklist['type'] ?? null)
                                ->setSite($threatBlocklist['site'] ?? null);
                            $threat->addBlocklist($blocklist);
                        }
                    }
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
