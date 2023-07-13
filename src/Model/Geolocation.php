<?php

/**
 * Class file for Geolocation details.
 *
 * This file contains the class Geolocation which implements the GeolocationInterface
 * and provides methods for getting and setting Geolocation details.
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

use PeakyBlind3rs\IpAddressInterface\Interface\Model\GeolocationInterface;

/**
 * Class Geolocation
 *
 * @category   Class
 * @package    PeakyBlind3rs\IpAddressInterface\Model
 * @author     Tommy Shelby <developers@remitso.com>
 * @license    http://opensource.org/licenses/MIT MIT License
 * @link       https://github.com/Peaky-Blind3rs/ip-address-interface
 *
 * The class for Geolocation information,
 * providing getters and setters for the properties.
 * All properties can be null, indicating data is not available.
 */
class Geolocation implements GeolocationInterface
{
    /**
     * The state of European Union membership.
     *
     * @var boolean|null
     */
    private ?bool $isEu = null;

    /**
     * The local city name.
     *
     * @var string|null
     */
    private ?string $city = null;

    /**
     * The local region name.
     *
     * @var string|null
     */
    private ?string $region = null;

    /**
     * The region code.
     *
     * @var string|null
     */
    private ?string $regionCode = null;

    /**
     * The region type.
     *
     * @var string|null
     */
    private ?string $regionType = null;

    /**
     * The country name.
     *
     * @var string|null
     */
    private ?string $countryName = null;

    /**
     * The ISO 3166 country code.
     *
     * @var string|null
     */
    private ?string $countryCode = null;

    /**
     * The continent name.
     *
     * @var string|null
     */
    private ?string $continentName = null;

    /**
     * The continent code.
     *
     * @var string|null
     */
    private ?string $continentCode = null;

    /**
     * The local latitude.
     *
     * @var float|null
     */
    private ?float $latitude = null;

    /**
     * The local longitude.
     *
     * @var float|null
     */
    private ?float $longitude = null;

    /**
     * The local postal code.
     *
     * @var string|null
     */
    private ?string $postal = null;

    /**
     * The ISD calling code.
     *
     * @var string|null
     */
    private ?string $callingCode = null;

    /**
     * @inheritDoc
     */
    public function isEu(): ?bool
    {
        return $this->isEu;
    }

    /**
     * @inheritDoc
     */
    public function setEu(?bool $isEu): self
    {
        $this->isEu = $isEu;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @inheritDoc
     */
    public function setCity(?string $city): self
    {
        $this->city = $city;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getRegion(): ?string
    {
        return $this->region;
    }

    /**
     * @inheritDoc
     */
    public function setRegion(?string $region): self
    {
        $this->region = $region;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getRegionCode(): ?string
    {
        return $this->regionCode;
    }

    /**
     * @inheritDoc
     */
    public function setRegionCode(?string $regionCode): self
    {
        $this->regionCode = $regionCode;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getRegionType(): ?string
    {
        return $this->regionType;
    }

    /**
     * @inheritDoc
     */
    public function setRegionType(?string $regionType): self
    {
        $this->regionType = $regionType;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCountryName(): ?string
    {
        return $this->countryName;
    }

    /**
     * @inheritDoc
     */
    public function setCountryName(?string $countryName): self
    {
        $this->countryName = $countryName;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCountryCode(): ?string
    {
        return $this->countryCode;
    }

    /**
     * @inheritDoc
     */
    public function setCountryCode(?string $countryCode): self
    {
        $this->countryCode = $countryCode;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getContinentName(): ?string
    {
        return $this->continentName;
    }

    /**
     * @inheritDoc
     */
    public function setContinentName(?string $continentName): self
    {
        $this->continentName = $continentName;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getContinentCode(): ?string
    {
        return $this->continentCode;
    }

    /**
     * @inheritDoc
     */
    public function setContinentCode(?string $continentCode): self
    {
        $this->continentCode = $continentCode;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getLatitude(): ?float
    {
        return $this->latitude;
    }

    /**
     * @inheritDoc
     */
    public function setLatitude(?float $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getLongitude(): ?float
    {
        return $this->longitude;
    }

    /**
     * @inheritDoc
     */
    public function setLongitude(?float $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getPostal(): ?string
    {
        return $this->postal;
    }

    /**
     * @inheritDoc
     */
    public function setPostal(?string $postal): self
    {
        $this->postal = $postal;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getCallingCode(): ?string
    {
        return $this->callingCode;
    }

    /**
     * @inheritDoc
     */
    public function setCallingCode(?string $callingCode): self
    {
        $this->callingCode = $callingCode;

        return $this;
    }
}
