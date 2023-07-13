<?php

/**
 * Class file for Threat Intelligence details.
 *
 * This file contains the ThreatIntelligence class which includes methods for
 * getting and setting threat intelligence information.
 *
 * PHP version 8.2
 *
 * @category  Model
 * @package   PeakyBlind3rs\IpAddressInterface\Model
 * @author    Tommy Shelby <developers@remitso.com>
 * @copyright 2023 RemitSo Private Limited
 * @license   http://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/Peaky-Blind3rs/ip-address-interface
 */

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Model;

use PeakyBlind3rs\IpAddressInterface\Interface\Model\BlocklistInterface;
use PeakyBlind3rs\IpAddressInterface\Interface\Model\ThreatIntelligenceInterface;
use PeakyBlind3rs\IpAddressInterface\Interface\Model\ReputationScoreInterface;

/**
 * Class ThreatIntelligence
 *
 * @category Class
 * @package  PeakyBlind3rs\IpAddressInterface\Model
 * @author   Tommy Shelby <developers@remitso.com>
 * @copyright 2023 RemitSo Private Limited
 * @license   http://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/Peaky-Blind3rs/ip-address-interface
 *
 * Represents various threat intelligence factors for an IP address.
 */
class ThreatIntelligence implements ThreatIntelligenceInterface
{
    /**
     * The IP is from Tor network or not.
     *
     * @var bool
     */
    private bool $isTor = false;

    /**
     * The IP is a relay for iCloud or not.
     *
     * @var bool
     */
    private bool $isIcloudRelay = false;

    /**
     * The IP is a proxy or not.
     *
     * @var bool
     */
    private bool $isProxy = false;

    /**
     * The IP is from a datacenter or not.
     *
     * @var bool
     */
    private bool $isDatacenter = false;

    /**
     * The IP is anonymous or not.
     *
     * @var bool
     */
    private bool $isAnonymous = false;

    /**
     * The IP is known as an attacker or not.
     *
     * @var bool
     */
    private bool $isKnownAttacker = false;

    /**
     * The IP is known as an abuser or not.
     *
     * @var bool
     */
    private bool $isKnownAbuser = false;

    /**
     * The IP is considered a threat or not.
     *
     * @var bool
     */
    private bool $isThreat = false;

    /**
     * The IP is a bogon (unallocated) IP or not.
     *
     * @var bool
     */
    private bool $isBogon = false;

    /**
     * Array of Blocklist Objects.
     *
     * @var \PeakyBlind3rs\IpAddressInterface\Interface\Model\BlocklistInterface[]
     */
    private array $blocklists = [];

    /**
     * The ReputationScore Object.
     *
     * @var \PeakyBlind3rs\IpAddressInterface\Interface\Model\ReputationScoreInterface|null
     */
    private ?ReputationScoreInterface $scores = null;

    /**
     * @inheritDoc
     */
    public function isTor(): bool
    {
        return $this->isTor;
    }

    /**
     * @inheritDoc
     */
    public function setTor(bool $isTor): self
    {
        $this->isTor = $isTor;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function isIcloudRelay(): bool
    {
        return $this->isIcloudRelay;
    }

    /**
     * @inheritDoc
     */
    public function setIcloudRelay(bool $isIcloudRelay): self
    {
        $this->isIcloudRelay = $isIcloudRelay;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function isProxy(): bool
    {
        return $this->isProxy;
    }

    /**
     * @inheritDoc
     */
    public function setProxy(bool $isProxy): self
    {
        $this->isProxy = $isProxy;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function isDatacenter(): bool
    {
        return $this->isDatacenter;
    }

    /**
     * @inheritDoc
     */
    public function setDatacenter(bool $isDatacenter): self
    {
        $this->isDatacenter = $isDatacenter;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function isAnonymous(): bool
    {
        return $this->isAnonymous;
    }

    /**
     * @inheritDoc
     */
    public function setAnonymous(bool $isAnonymous): self
    {
        $this->isAnonymous = $isAnonymous;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function isKnownAttacker(): bool
    {
        return $this->isKnownAttacker;
    }

    /**
     * @inheritDoc
     */
    public function setKnownAttacker(bool $isKnownAttacker): self
    {
        $this->isKnownAttacker = $isKnownAttacker;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function isKnownAbuser(): bool
    {
        return $this->isKnownAbuser;
    }

    /**
     * @inheritDoc
     */
    public function setKnownAbuser(bool $isKnownAbuser): self
    {
        $this->isKnownAbuser = $isKnownAbuser;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function isThreat(): bool
    {
        return $this->isThreat;
    }

    /**
     * @inheritDoc
     */
    public function setThreat(bool $isThreat): self
    {
        $this->isThreat = $isThreat;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function isBogon(): bool
    {
        return $this->isBogon;
    }

    /**
     * @inheritDoc
     */
    public function setBogon(bool $isBogon): self
    {
        $this->isBogon = $isBogon;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getBlocklists(): array
    {
        return $this->blocklists;
    }

    /**
     * @inheritDoc
     */
    public function setBlocklists(array $blocklists): self
    {
        $this->blocklists = $blocklists;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function addBlocklist(BlocklistInterface $blocklist): self
    {
        $this->blocklists[] = $blocklist;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getScores(): ?ReputationScoreInterface
    {
        return $this->scores;
    }

    /**
     * @inheritDoc
     */
    public function setScores(?ReputationScoreInterface $scores): self
    {
        $this->scores = $scores;

        return $this;
    }
}
