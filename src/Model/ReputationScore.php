<?php

/**
 * Class file for ReputationScore details.
 * Set and get data for ReputationScore.
 *
 * PHP version 8.2
 *
 * @category   Class
 * @package    PeakyBlind3rs\IpAddressInterface\Model
 * @author     Tommy Shelby <developers@remitso.com>
 * @copyright  2023 RemitSo Private Limited
 * @license    http://opensource.org/licenses/MIT MIT License
 * @link       https://github.com/Peaky-Blind3rs/ip-address-interface
 */

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Model;

use PeakyBlind3rs\IpAddressInterface\Interface\Model\ReputationScoreInterface;

/**
 * Class ReputationScore
 *
 * @category   Class
 * @package    PeakyBlind3rs\IpAddressInterface\Model
 * @author     Tommy Shelby <developers@remitso.com>
 * @copyright  2023 RemitSo Private Limited
 * @license    http://opensource.org/licenses/MIT MIT License
 * @link       https://github.com/Peaky-Blind3rs/ip-address-interface
 *
 * This class provides getters and setters implementation
 * for the properties as defined in ReputationScoreInterface.
 * Each setter returns self for method chaining.
 * All properties can be null, indicating that data might not be available.
 */
class ReputationScore implements ReputationScoreInterface
{
    /**
     * The score related to VPN usage.
     *
     * @var integer|null
     */
    private ?int $vpnScore = null;

    /**
     * The score related to Proxy server usage.
     *
     * @var integer|null
     */
    private ?int $proxyScore = null;

    /**
     * The score indicating overall threat level.
     *
     * @var integer|null
     */
    private ?int $threatScore = null;

    /**
     * The score indicating overall trustworthiness.
     *
     * @var integer|null
     */
    private ?int $trustScore = null;

    /**
     * @inheritDoc
     */
    public function getVpnScore(): ?int
    {
        return $this->vpnScore;
    }

    /**
     * @inheritDoc
     */
    public function setVpnScore(?int $vpnScore): self
    {
        $this->vpnScore = $vpnScore;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getProxyScore(): ?int
    {
        return $this->proxyScore;
    }

    /**
     * @inheritDoc
     */
    public function setProxyScore(?int $proxyScore): self
    {
        $this->proxyScore = $proxyScore;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getThreatScore(): ?int
    {
        return $this->threatScore;
    }

    /**
     * @inheritDoc
     */
    public function setThreatScore(?int $threatScore): self
    {
        $this->threatScore = $threatScore;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getTrustScore(): ?int
    {
        return $this->trustScore;
    }

    /**
     * @inheritDoc
     */
    public function setTrustScore(?int $trustScore): self
    {
        $this->trustScore = $trustScore;

        return $this;
    }
}
