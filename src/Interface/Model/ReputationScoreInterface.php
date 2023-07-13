<?php

/**
 * Interface file for Reputation Score details.
 *
 * This file contains the ReputationScoreInterface which includes methods for
 * getting and setting reputation score information.
 *
 * PHP version 8.2
 *
 * @category  Interface
 * @package   PeakyBlind3rs\IpAddressInterface\Interface\Model
 * @author    Tommy Shelby <developers@remitso.com>
 * @copyright 2023 RemitSo Private Limited
 * @license   http://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/Peaky-Blind3rs/ip-address-interface
 */

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Interface\Model;

/**
 * Interface ReputationScoreInterface
 *
 * @category Interface
 * @package  PeakyBlind3rs\IpAddressInterface\Interface\Model
 * @author   Tommy Shelby <developers@remitso.com>
 * @license  http://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/Peaky-Blind3rs/ip-address-interface
 *
 * Interface for reputation score data,
 * providing getters and setters for the properties.
 * Setters return self for method chaining. All properties can be null,
 * indicating data is not available.
 */
interface ReputationScoreInterface
{
    /**
     * Returns the VPN score.
     *
     * @return integer|null
     */
    public function getVpnScore(): ?int;


    /**
     * Sets the VPN score.
     *
     * @param integer|null $vpnScore The VPN score to set.
     *
     * @return self
     */
    public function setVpnScore(?int $vpnScore): self;


    /**
     * Returns the Proxy score.
     *
     * @return integer|null
     */
    public function getProxyScore(): ?int;


    /**
     * Sets the Proxy score.
     *
     * @param integer|null $proxyScore The Proxy score to set.
     *
     * @return self
     */
    public function setProxyScore(?int $proxyScore): self;


    /**
     * Returns the Threat score.
     *
     * @return integer|null
     */
    public function getThreatScore(): ?int;


    /**
     * Sets the Threat score.
     *
     * @param integer|null $threatScore The Threat score to set.
     *
     * @return self
     */
    public function setThreatScore(?int $threatScore): self;


    /**
     * Returns the Trust score.
     *
     * @return integer|null
     */
    public function getTrustScore(): ?int;


    /**
     * Sets the Trust score.
     *
     * @param integer|null $trustScore The Trust score to set.
     *
     * @return self
     */
    public function setTrustScore(?int $trustScore): self;
}
