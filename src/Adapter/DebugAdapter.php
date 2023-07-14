<?php

/**
 * PHP version 8.2
 *
 * @category IPAddressInterface
 * @package PeakyBlind3rs\IpAddressInterface\Adapter
 * @author Tommy Shelby <developers@remitso.com>
 * @copyright 2023 RemitSo Private Limited
 * @license http://opensource.org/licenses/MIT MIT License
 * @link https://github.com/Peaky-Blind3rs/ip-address-interface
 */

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Adapter;

use PeakyBlind3rs\IpAddressInterface\Interface\IpLookupInterface;
use PeakyBlind3rs\IpAddressInterface\Model\IpAddress;
use Psr\Http\Message\ResponseInterface;

/**
 * Class DebugAdapter
 *
 * The DebugAdapter class implements IpLookupInterface and provides
 * a debugging adapter for IP lookup.
 *
 * @category IPAddressInterface
 * @package PeakyBlind3rs\IpAddressInterface\Adapter
 */
class DebugAdapter implements IpLookupInterface
{
    /**
     * Perform a dummy IP address lookup.
     *
     * @param string $ipAddress The IP address to be looked up.
     *
     * @return IpAddress|ResponseInterface An instance of IpAddress with the provided IP address,
     * or a ResponseInterface instance when an error occurs.
     */
    public function lookup(string $ipAddress): IpAddress|ResponseInterface
    {
        return (new IpAddress())->setIp($ipAddress);
    }
}
