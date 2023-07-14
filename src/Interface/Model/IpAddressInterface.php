<?php

/**
 * Interface file for IP Address information.
 *
 * This file contains the IpAddressInterface which includes methods for
 * getting and setting IP Address information.
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
 * Interface IpAddressInterface
 *
 * @category Interface
 * @package  PeakyBlind3rs\IpAddressInterface\Interface\Model
 * @author   Tommy Shelby <developers@remitso.com>
 * @license  http://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/Peaky-Blind3rs/ip-address-interface
 *
 * Interface for IP Address information,
 * providing getters and setters for the properties.
 * Setters return self for method chaining. All properties can be null,
 * indicating data is not available.
 */
interface IpAddressInterface
{
    /**
     * Gets the IP address.
     *
     * @return string|null The IP address or null if it does not exist.
     */
    public function getIp(): ?string;


    /**
     * Sets the IP address.
     *
     * @param string|null $ip The IP address to set. If null, the IP address will be removed.
     * @return $this
     */
    public function setIp(?string $ip): self;


    /**
     * Get the Geolocation object of the IP address.
     *
     * @return \PeakyBlind3rs\IpAddressInterface\Interface\Model\GeolocationInterface|null The Geolocation
     * information object or null if it is not available.
     */
    public function getGeolocation(): ?GeolocationInterface;


    /**
     * Set the Geolocation object of the IP address.
     *
     * @param \PeakyBlind3rs\IpAddressInterface\Interface\Model\GeolocationInterface|null $geolocation The Geolocation
     * information to set. Null to unset the property.
     *
     * @return $this Self return for method chaining.
     */
    public function setGeolocation(?GeolocationInterface $geolocation): self;


    /**
     * Get the MobileCarrier object of the IP address.
     *
     * @return \PeakyBlind3rs\IpAddressInterface\Interface\Model\MobileCarrierInterface|null The MobileCarrier
     * information object or null if it is not available.
     */
    public function getMobileCarrier(): ?MobileCarrierInterface;


    /**
     * Set the MobileCarrier object of the IP address.
     *
     * @param \PeakyBlind3rs\IpAddressInterface\Interface\Model\MobileCarrierInterface|null $mobileCarrier The
     * MobileCarrier information to set. Null to unset the property.
     *
     * @return $this Self return for method chaining.
     */
    public function setMobileCarrier(?MobileCarrierInterface $mobileCarrier): self;


    /**
     * Get the Timezone object of the IP address.
     *
     * @return \PeakyBlind3rs\IpAddressInterface\Interface\Model\TimezoneInterface|null The Timezone information object
     * or null if it is not available.
     */
    public function getTimezone(): ?TimezoneInterface;


    /**
     * Set the Timezone object of the IP address.
     *
     * @param \PeakyBlind3rs\IpAddressInterface\Interface\Model\TimezoneInterface|null $timezone The Timezone
     * information to set. Null to unset the property.
     *
     * @return $this Self return for method chaining.
     */
    public function setTimezone(?TimezoneInterface $timezone): self;


    /**
     * Get the Currency object of the IP address.
     *
     * @return \PeakyBlind3rs\IpAddressInterface\Interface\Model\CurrencyInterface|null The Currency information object
     * or null if it is not available.
     */
    public function getCurrency(): ?CurrencyInterface;


    /**
     * Set the Currency object of the IP address.
     *
     * @param \PeakyBlind3rs\IpAddressInterface\Interface\Model\CurrencyInterface|null $currency The Currency
     * information to set. Null to unset the property.
     *
     * @return $this Self return for method chaining.
     */
    public function setCurrency(?CurrencyInterface $currency): self;


    /**
     * Get the ThreatIntelligence object of the IP address.
     *
     * @return \PeakyBlind3rs\IpAddressInterface\Interface\Model\ThreatIntelligenceInterface|null The
     * Threat Intelligence information object or null if it is not available.
     */
    public function getThreatIntelligence(): ?ThreatIntelligenceInterface;


    /**
     * Set the ThreatIntelligence object of the IP address.
     *
     * @param \PeakyBlind3rs\IpAddressInterface\Interface\Model\ThreatIntelligenceInterface|null $threatIntelligence
     * The ThreatIntelligence information to set. Null to unset the property.
     *
     * @return $this Self return for method chaining.
     */
    public function setThreatIntelligence(?ThreatIntelligenceInterface $threatIntelligence): self;


    /**
     * Get the ASN (Autonomous System Number) information object of the IP address.
     *
     * @return \PeakyBlind3rs\IpAddressInterface\Interface\Model\AsnInterface|null The ASN information object
     * or null if not available.
     */
    public function getAsn(): ?AsnInterface;


    /**
     * Set the ASN (Autonomous System Number) information object of the IP address.
     *
     * @param \PeakyBlind3rs\IpAddressInterface\Interface\Model\AsnInterface|null $asn The ASN information to set.
     * Null to unset the property.
     *
     * @return $this Self return for method chaining.
     */
    public function setAsn(?AsnInterface $asn): self;


    /**
     * Get the Company object of the IP address.
     *
     * @return \PeakyBlind3rs\IpAddressInterface\Interface\Model\CompanyInterface|null The Company information object
     * or null if it is not available.
     */
    public function getCompany(): ?CompanyInterface;


    /**
     * Set the Company object of the IP address.
     *
     * @param \PeakyBlind3rs\IpAddressInterface\Interface\Model\CompanyInterface|null $company The Company information
     * to set. Null to unset the property.
     *
     * @return $this Self return for method chaining.
     */
    public function setCompany(?CompanyInterface $company): self;
}
