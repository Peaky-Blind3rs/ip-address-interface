<?php

/**
 * Interface file for the IP Lookup service.
 *
 * This file contains the IpLookupInterface which includes method for
 * looking up IP Address detail.
 *
 * PHP version 8.2
 *
 * @category    Interface
 * @package     PeakyBlind3rs\IpAddressInterface
 * @author      Tommy Shelby <developers@remitso.com>
 * @copyright   2023 RemitSo Private Limited
 * @license     http://opensource.org/licenses/MIT MIT License
 * @link        https://github.com/Peaky-Blind3rs/ip-address-interface
 */

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Interface;

use PeakyBlind3rs\IpAddressInterface\Model\IpAddress;
use Psr\Http\Message\ResponseInterface;

/**
 * Interface IpLookupInterface
 *
 * @category   Interfaces
 * @package    PeakyBlind3rs\IpAddressInterface
 * @author     Tommy Shelby <developers@remitso.com>
 * @license    http://opensource.org/licenses/MIT MIT License
 * @link       https://github.com/Peaky-Blind3rs/ip-address-interface
 *
 * This interface provides a method for IP Address lookup performing
 * an action and returning a result.
 */
interface IpLookupInterface
{
    /**
     * @param string $ipAddress
     * @return \PeakyBlind3rs\IpAddressInterface\Model\IpAddress|\Psr\Http\Message\ResponseInterface
     */
    public static function lookup(string $ipAddress): IpAddress|ResponseInterface;
}
