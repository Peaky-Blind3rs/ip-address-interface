<?php

/**
 * This file is part of the PeakyBlind3rs package.
 *
 * PHP version 8.2
 *
 * @category IPAddressInterface
 * @package PeakyBlind3rs\IpAddressInterface
 * @author Tommy Shelby <developers@remitso.com>
 * @copyright 2023 RemitSo Private Limited
 * @license http://opensource.org/licenses/MIT MIT License
 * @link https://github.com/Peaky-Blind3rs/ip-address-interface
 */

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface;

/**
 * Class StaticConfig
 *
 * The StaticConfig class is responsible for parsing a string DSN
 * (Data Source Name) into its components.
 *
 * @category IPAddressInterface
 * @package PeakyBlind3rs\IpAddressInterface
 */
class StaticConfig
{
    /**
     * Parse a DSN string into its components.
     *
     * @param string $dsn The DSN string to be parsed.
     *
     * @return array{
     *     scheme?: string,
     *     host?: string,
     *     port?: int,
     *     user?: string,
     *     pass?: string,
     *     path?: string,
     *     query?: array,
     *     fragment?: string
     * }|false The associative array of components if parsing is successful, false otherwise.
     */
    public static function parseDsn(string $dsn): array|false
    {
        $components = parse_url($dsn);

        if ($components === false) {
            return false;
        }

        if (!empty($components['query'])) {
            $query = [];
            parse_str($components['query'], $query);
            $components['query'] = $query;
        }

        return $components;
    }
}
