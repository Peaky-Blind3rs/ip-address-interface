<?php

/**
 * Interface file for Threat Intelligence details.
 *
 * This file contains the ThreatIntelligenceInterface which includes methods for
 * getting and setting threat intelligence information.
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
 * Interface ThreatIntelligenceInterface
 *
 * @category Interface
 * @package  PeakyBlind3rs\IpAddressInterface\Interface\Model
 * @author   Tommy Shelby <developers@remitso.com>
 * @license  http://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/Peaky-Blind3rs/ip-address-interface
 *
 * Represents various threat intelligence factors for an IP address.
 * Setters return self for method chaining.
 */
interface ThreatIntelligenceInterface
{
    /**
     * Checks whether the IP is from Tor network or not.
     *
     * @return boolean
     */
    public function isTor(): bool;


    /**
     * Sets the Tor network status.
     *
     * @param bool $isTor If the IP is from Tor network.
     *
     * @return self
     */
    public function setTor(bool $isTor): self;


    /**
     * Checks whether the IP is a relay for iCloud or not.
     *
     * @return boolean
     */
    public function isIcloudRelay(): bool;


    /**
     * Sets the iCloud relay status.
     *
     * @param bool $isIcloudRelay If the IP is a relay for iCloud.
     *
     * @return self
     */
    public function setIcloudRelay(bool $isIcloudRelay): self;


    /**
     * Returns true if the IP is a proxy.
     *
     * @return boolean
     */
    public function isProxy(): bool;


    /**
     * Sets the Proxy status.
     *
     * @param bool $isProxy If the IP is a proxy.
     *
     * @return self
     */
    public function setProxy(bool $isProxy): self;


    /**
     * Returns true if the IP is from a datacenter.
     *
     * @return boolean
     */
    public function isDatacenter(): bool;


    /**
     * Sets the Datacenter status.
     *
     * @param bool $isDatacenter If the IP is from a datacenter.
     *
     * @return self
     */
    public function setDatacenter(bool $isDatacenter): self;


    /**
     * Returns true if the IP is anonymous.
     *
     * @return boolean
     */
    public function isAnonymous(): bool;


    /**
     * Sets the Anonymous status.
     *
     * @param bool $isAnonymous If the IP is anonymous.
     *
     * @return self
     */
    public function setAnonymous(bool $isAnonymous): self;


    /**
     * Returns true if the IP is known as an attacker.
     *
     * @return boolean
     */
    public function isKnownAttacker(): bool;


    /**
     * Sets the Known Attacker status.
     *
     * @param bool $isKnownAttacker If the IP is known as an attacker.
     *
     * @return self
     */
    public function setKnownAttacker(bool $isKnownAttacker): self;


    /**
     * Returns true if the IP is known as an abuser.
     *
     * @return boolean
     */
    public function isKnownAbuser(): bool;


    /**
     * Sets the Known Abuser status.
     *
     * @param bool $isKnownAbuser If the IP is known as an abuser.
     *
     * @return self
     */
    public function setKnownAbuser(bool $isKnownAbuser): self;


    /**
     * Returns true if the IP is considered a threat.
     *
     * @return boolean
     */
    public function isThreat(): bool;


    /**
     * Sets the Threat status.
     *
     * @param bool $isThreat If the IP is considered a threat.
     *
     * @return self
     */
    public function setThreat(bool $isThreat): self;


    /**
     * Returns true if the IP is a bogon (unallocated) IP.
     *
     * @return boolean
     */
    public function isBogon(): bool;


    /**
     * Sets the Bogon status.
     *
     * @param bool $isBogon If the IP is a bogon (unallocated) IP.
     *
     * @return self
     */
    public function setBogon(bool $isBogon): self;


    /**
     * Returns an array of Blocklist Objects.
     *
     * @return \PeakyBlind3rs\IpAddressInterface\Interface\Model\BlocklistInterface[]
     */
    public function getBlocklists(): array;


    /**
     * Sets an array of Blocklist Objects.
     *
     * @param \PeakyBlind3rs\IpAddressInterface\Interface\Model\BlocklistInterface[] $blocklists Array of
     * blocklist objects.
     *
     * @return self
     */
    public function setBlocklists(array $blocklists): self;


    /**
     * Adds a Blocklist Object to the list of blocklists.
     *
     * @param \PeakyBlind3rs\IpAddressInterface\Interface\Model\BlocklistInterface $blocklist Blocklist object.
     *
     * @return self
     */
    public function addBlocklist(BlocklistInterface $blocklist): self;


    /**
     * Returns the ReputationScore Object.
     *
     * @return \PeakyBlind3rs\IpAddressInterface\Interface\Model\ReputationScoreInterface|null
     */
    public function getScores(): ?ReputationScoreInterface;


    /**
     * Sets the ReputationScore Object.
     *
     * @param \PeakyBlind3rs\IpAddressInterface\Interface\Model\ReputationScoreInterface|null $scores Reputation
     * score object.
     *
     * @return self
     */
    public function setScores(?ReputationScoreInterface $scores): self;
}
