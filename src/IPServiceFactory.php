<?php

/**
 * This is the IPServiceFactory class file of the PeakyBlind3rs namespace.
 * This factory is responsible for instantiating the correct IP Lookup service
 * based on the scheme provided in the DSN string.
 *
 * PHP version 8.2
 *
 * @category Factory
 * @package PeakyBlind3rs\IpAddressInterface
 * @author Tommy Shelby <developers@remitso.com>
 * @copyright 2023 RemitSo Private Limited
 * @license http://opensource.org/licenses/MIT MIT License
 * @link https://github.com/Peaky-Blind3rs/ip-address-interface
 * @filesource
 */

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface;

use InvalidArgumentException;
use PeakyBlind3rs\IpAddressInterface\Adapter\IpDataAdapter;
use PeakyBlind3rs\IpAddressInterface\Adapter\IpInfoAdapter;
use PeakyBlind3rs\IpAddressInterface\Interface\IpLookupInterface;
use ReflectionClass;

/**
 * Class IPServiceFactory
 *
 * A factory class responsible for creating an instance of a IP lookup service.
 *
 * @category Factory
 * @package PeakyBlind3rs\IpAddressInterface
 * @author Tommy Shelby <developers@remitso.com>
 * @copyright 2023 RemitSo Private Limited
 * @license http://opensource.org/licenses/MIT MIT License
 * @link https://github.com/Peaky-Blind3rs/ip-address-interface
 */
class IPServiceFactory
{
    /**
     * @var array<string, class-string>
     */
    private static array $systemClassMaps = [
        'ipdata' => IpDataAdapter::class,
        'ipinfo' => IpInfoAdapter::class,
    ];

    /**
     * @var array<string, class-string>
     */
    private static array $customClassMaps = [];

    /**
     * Populate the classMaps property.
     *
     * @param array<string, class-string> $classMaps
     *
     * @return void
     */
    public static function classMaps(array $classMaps): void
    {
        self::$customClassMaps = $classMaps;
    }

    /**
     * Returns an instance of an IP lookup service based on the scheme
     * provided in the DSN string.
     *
     * @param string $dsn The DSN string to be parsed.
     *
     * @throws InvalidArgumentException When provided DSN is not valid
     * or Adapter could not be found or instance could not be created.
     *
     * @return IpLookupInterface An instance of the IP lookup service.
     */
    public static function getInstance(string $dsn): IpLookupInterface
    {
        $dsnComponents = StaticConfig::parseDsn($dsn);
        if ($dsnComponents === false) {
            throw new InvalidArgumentException('Provided DSN is not valid');
        }
        $classMaps = self::$systemClassMaps + self::$customClassMaps;
        /** @var class-string|null $adapter */
        $adapter = isset($dsnComponents['scheme']) ? ($classMaps[$dsnComponents['scheme']] ?? null) : null;
        if (!$adapter) {
            throw new InvalidArgumentException('Adapter could not be found');
        }

        try {
            $reflectionClass = new ReflectionClass($adapter);
            if ($reflectionClass->getConstructor() && $reflectionClass->getConstructor()->getParameters()) {
                /** @var \PeakyBlind3rs\IpAddressInterface\Interface\IpLookupInterface $instance */
                $instance = $reflectionClass->newInstanceArgs([$dsnComponents]);
            } else {
                /** @var \PeakyBlind3rs\IpAddressInterface\Interface\IpLookupInterface $instance */
                $instance = $reflectionClass->newInstanceWithoutConstructor();
            }

            return $instance;
        } catch (\ReflectionException $e) {
            throw new InvalidArgumentException('Adapter instance could not be created');
        }
    }
}
