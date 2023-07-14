<?php

/**
 * Class file for IP Address information.
 *
 * This file contains the IpAddress class which includes methods for
 * getting and setting IP Address information.
 *
 * PHP version 8.2
 *
 * @category  Class
 * @package   PeakyBlind3rs\IpAddressInterface\Model
 * @author    Tommy Shelby <developers@remitso.com>
 * @copyright 2023 RemitSo Private Limited
 * @license   http://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/Peaky-Blind3rs/ip-address-interface
 */

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Model;

use PeakyBlind3rs\IpAddressInterface\Interface\Model\IpAddressInterface;
use PeakyBlind3rs\IpAddressInterface\Interface\Model\GeolocationInterface;
use PeakyBlind3rs\IpAddressInterface\Interface\Model\MobileCarrierInterface;
use PeakyBlind3rs\IpAddressInterface\Interface\Model\TimezoneInterface;
use PeakyBlind3rs\IpAddressInterface\Interface\Model\CurrencyInterface;
use PeakyBlind3rs\IpAddressInterface\Interface\Model\ThreatIntelligenceInterface;
use PeakyBlind3rs\IpAddressInterface\Interface\Model\AsnInterface;
use PeakyBlind3rs\IpAddressInterface\Interface\Model\CompanyInterface;

/**
 * Class IpAddress
 *
 * @category Model
 * @package  PeakyBlind3rs\IpAddressInterface\Model
 * @author   Tommy Shelby <developers@remitso.com>
 * @license  http://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/Peaky-Blind3rs/ip-address-interface
 */
class IpAddress implements IpAddressInterface
{
    /**
     * Property to store the ip address
     *
     * @var string|null
     */
    private ?string $ip = null;

    /**
     * Property to store the Geolocation.
     *
     * @var \PeakyBlind3rs\IpAddressInterface\Interface\Model\GeolocationInterface | null
     */
    private ?GeolocationInterface $geolocation = null;

    /**
     * Property to store the MobileCarrier.
     *
     * @var \PeakyBlind3rs\IpAddressInterface\Interface\Model\MobileCarrierInterface | null
     */
    private ?MobileCarrierInterface $mobileCarrier = null;

    /**
     * Property to store the Timezone.
     *
     * @var \PeakyBlind3rs\IpAddressInterface\Interface\Model\TimezoneInterface | null
     */
    private ?TimezoneInterface $timezone = null;

    /**
     * Property to store the Currency.
     *
     * @var \PeakyBlind3rs\IpAddressInterface\Interface\Model\CurrencyInterface | null
     */
    private ?CurrencyInterface $currency = null;

    /**
     * Property to store ThreatIntelligence.
     *
     * @var \PeakyBlind3rs\IpAddressInterface\Interface\Model\ThreatIntelligenceInterface | null
     */
    private ?ThreatIntelligenceInterface $threatIntelligence = null;

    /**
     * Property to store ASN.
     *
     * @var \PeakyBlind3rs\IpAddressInterface\Interface\Model\AsnInterface | null
     */
    private ?AsnInterface $asn = null;

    /**
     * Property to store Company.
     *
     * @var \PeakyBlind3rs\IpAddressInterface\Interface\Model\CompanyInterface | null
     */
    private ?CompanyInterface $company = null;

    /**
     * @inheritDoc
     */
    public function getIp(): ?string
    {
        return $this->ip;
    }

    /**
     * @inheritDoc
     */
    public function setIp(?string $ip): IpAddressInterface
    {
        $this->ip = $ip;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getGeolocation(): ?GeolocationInterface
    {
        return $this->geolocation;
    }

    /**
     * @inheritDoc
     */
    public function setGeolocation(?GeolocationInterface $geolocation): self
    {
        $this->geolocation = $geolocation;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getMobileCarrier(): ?MobileCarrierInterface
    {
        return $this->mobileCarrier;
    }

    /**
     * @inheritDoc
     */
    public function setMobileCarrier(?MobileCarrierInterface $mobileCarrier): self
    {
        $this->mobileCarrier = $mobileCarrier;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getTimezone(): ?TimezoneInterface
    {
        return $this->timezone;
    }

    /**
     * @inheritDoc
     */
    public function setTimezone(?TimezoneInterface $timezone): self
    {
        $this->timezone = $timezone;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCurrency(): ?CurrencyInterface
    {
        return $this->currency;
    }

    /**
     * @inheritDoc
     */
    public function setCurrency(?CurrencyInterface $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getThreatIntelligence(): ?ThreatIntelligenceInterface
    {
        return $this->threatIntelligence;
    }

    /**
     * @inheritDoc
     */
    public function setThreatIntelligence(?ThreatIntelligenceInterface $threatIntelligence): self
    {
        $this->threatIntelligence = $threatIntelligence;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getAsn(): ?AsnInterface
    {
        return $this->asn;
    }

    /**
     * @inheritDoc
     */
    public function setAsn(?AsnInterface $asn): self
    {
        $this->asn = $asn;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCompany(): ?CompanyInterface
    {
        return $this->company;
    }

    /**
     * @inheritDoc
     */
    public function setCompany(?CompanyInterface $company): self
    {
        $this->company = $company;

        return $this;
    }
}
