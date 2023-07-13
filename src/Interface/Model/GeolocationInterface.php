<?php

/**
 * Interface file for Geolocation details.
 *
 * This file contains the GeolocationInterface which includes methods for
 * getting and setting Geolocation information.
 *
 * PHP version 8.2
 *
 * @category   Interface
 * @package    PeakyBlind3rs\IpAddressInterface\Interface\Model
 * @subpackage Geolocation
 * @author     Tommy Shelby <developers@remitso.com>
 * @copyright  2023 RemitSo Private Limited
 * @license    http://opensource.org/licenses/MIT MIT License
 * @link       https://github.com/Peaky-Blind3rs/ip-address-interface
 */

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Interface\Model;

/**
 * Interface GeolocationInterface
 *
 * @category   Interface
 * @package    PeakyBlind3rs\IpAddressInterface\Interface\Model
 * @subpackage Geolocation
 * @author     Tommy Shelby <developers@remitso.com>
 * @license    http://opensource.org/licenses/MIT MIT License
 * @link       https://github.com/Peaky-Blind3rs/ip-address-interface
 *
 * Interface for Geolocation information,
 * providing getters and setters for the properties.
 * Setters return self for method chaining. All properties can be null,
 * indicating data is not available.
 */
interface GeolocationInterface
{
    /**
     * Method to check if the region is in the European Union.
     *
     * @return boolean|null The state of European Union membership.
     * Null if the data is not available.
     */
    public function isEu(): ?bool;


    /**
     * Method to set the state of European Union membership.
     *
     * @param boolean|null $isEu The state of European Union membership.
     *
     * @return self
     */
    public function setEu(?bool $isEu): self;


    /**
     * Method to get the local city name.
     *
     * @return string|null The local city name. Null if the data is not available.
     */
    public function getCity(): ?string;


    /**
     * Method to set the local city name.
     *
     * @param string|null $city The local city name
     *
     * @return self
     */
    public function setCity(?string $city): self;


    /**
     * Method to get the local region name.
     *
     * @return string|null The local region name. Null if the data is not available.
     */
    public function getRegion(): ?string;


    /**
     * Method to set the local region name.
     *
     * @param string|null $region The local region name
     *
     * @return self
     */
    public function setRegion(?string $region): self;


    /**
     * Method to get the region code.
     *
     * @return string|null The region code. Null if the data is not available.
     */
    public function getRegionCode(): ?string;


    /**
     * Method to set the region code.
     *
     * @param string|null $regionCode The region code
     *
     * @return self
     */
    public function setRegionCode(?string $regionCode): self;


    /**
     * Method to get the type of the region.
     *
     * @return string|null The type of the region. Null if the data is not available.
     */
    public function getRegionType(): ?string;


    /**
     * Method to set the type of the region.
     *
     * @param string|null $regionType The type of the region
     *
     * @return self
     */
    public function setRegionType(?string $regionType): self;


    /**
     * Method to get the name of the country.
     *
     * @return string|null The local country name. Null if the data is not available.
     */
    public function getCountryName(): ?string;


    /**
     * Method to set the local country name.
     *
     * @param string|null $countryName The local country name
     *
     * @return self
     */
    public function setCountryName(?string $countryName): self;


    /**
     * Method to get the ISO 3166 country code alpha-2.
     *
     * @return string|null The ISO 3166 country code alpha-2.
     * Null if the data is not available.
     */
    public function getCountryCode(): ?string;


    /**
     * Method to set the ISO 3166 country code alpha-2.
     *
     * @param string|null $countryCode The ISO 3166 country code alpha-2
     *
     * @return self
     */
    public function setCountryCode(?string $countryCode): self;


    /**
     * Method to get the local continent name.
     *
     * @return string|null The local continent name.
     * Null if the data is not available.
     */
    public function getContinentName(): ?string;


    /**
     * Method to set the local continent name.
     *
     * @param string|null $continentName The local continent name
     *
     * @return self
     */
    public function setContinentName(?string $continentName): self;


    /**
     * Method to get the two-letter continent code.
     *
     * @return string|null The two-letter continent code.
     * Null if the data is not available.
     */
    public function getContinentCode(): ?string;


    /**
     * Method to set the two-letter continent code.
     *
     * @param string|null $continentCode The two-letter continent code
     *
     * @return self
     */
    public function setContinentCode(?string $continentCode): self;


    /**
     * Method to get the local latitude.
     *
     * @return float|null The local latitude. Null if the data is not available.
     */
    public function getLatitude(): ?float;


    /**
     * Method to set the local latitude.
     *
     * @param float|null $latitude The local latitude
     *
     * @return self
     */
    public function setLatitude(?float $latitude): self;


    /**
     * Method to get the local longitude.
     *
     * @return float|null The local longitude. Null if the data is not available.
     */
    public function getLongitude(): ?float;


    /**
     * Method to set the local longitude.
     *
     * @param float|null $longitude The local longitude
     *
     * @return self
     */
    public function setLongitude(?float $longitude): self;


    /**
     * Method to get the local postal code.
     *
     * @return string|null The local postal code. Null if the data is not available.
     */
    public function getPostal(): ?string;


    /**
     * Method to set the local postal code.
     *
     * @param string|null $postal The local postal code
     *
     * @return self
     */
    public function setPostal(?string $postal): self;


    /**
     * Method to get the ISD calling code.
     *
     * @return string|null The ISD calling code. Null if the data is not available.
     */
    public function getCallingCode(): ?string;


    /**
     * Method to set the ISD calling code.
     *
     * @param string|null $callingCode The ISD calling code
     *
     * @return self
     */
    public function setCallingCode(?string $callingCode): self;
}
