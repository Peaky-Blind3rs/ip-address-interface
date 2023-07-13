<?php

/**
 * Interface file for Currencies details.
 *
 * This file contains the CurrencyInterface which includes methods for
 * getting and setting currencies information.
 *
 * PHP version 8.2
 *
 * @category   Interface
 * @package    PeakyBlind3rs\IpAddressInterface\Interface\Model
 * @subpackage Currencies
 * @author     Tommy Shelby <developers@remitso.com>
 * @copyright  2023 RemitSo Private Limited
 * @license    http://opensource.org/licenses/MIT MIT License
 * @link       https://github.com/Peaky-Blind3rs/ip-address-interface
 */

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Interface\Model;

/**
 * Interface CurrencyInterface
 *
 * @category   Interface
 * @package    PeakyBlind3rs\IpAddressInterface\Interface\Model
 * @subpackage Currency
 * @author     Tommy Shelby <developers@remitso.com>
 * @license    http://opensource.org/licenses/MIT MIT License
 * @link       https://github.com/Peaky-Blind3rs/ip-address-interface
 *
 * Interface for Currencies information,
 * providing getters and setters for the properties.
 * Setters return self for method chaining.
 * All properties can be null, indicating data is not available.
 */
interface CurrencyInterface
{
    /**
     * Get the name of the Currency
     *
     * @return string|null The name of the currency
     */
    public function getName(): ?string;


    /**
     * Set the name of the Currency
     *
     * @param string|null $name The name of the currency
     *
     * @return self
     */
    public function setName(?string $name): self;


    /**
     * Get the ISO 4217 three-letter code of the Currency
     *
     * @return string|null The ISO 4217 three-letter code of the currency
     */
    public function getCode(): ?string;


    /**
     * Set the ISO 4217 three-letter code of the Currency
     *
     * @param string|null $code The ISO 4217 three-letter code of the currency
     *
     * @return self
     */
    public function setCode(?string $code): self;


    /**
     * Get the symbol of the Currency
     *
     * @return string|null The symbol of the currency
     */
    public function getSymbol(): ?string;


    /**
     * Set the symbol of the Currency
     *
     * @param string|null $symbol The symbol of the currency
     *
     * @return self
     */
    public function setSymbol(?string $symbol): self;


    /**
     * Get the native symbol of the Currency
     *
     * @return string|null The native symbol of the currency
     */
    public function getNative(): ?string;


    /**
     * Set the native symbol of the Currency
     *
     * @param string|null $native The native symbol of the currency
     *
     * @return self
     */
    public function setNative(?string $native): self;


    /**
     * Get the plural form of the Currency
     *
     * @return string|null The plural form of the currency
     */
    public function getPlural(): ?string;


    /**
     * Set the plural form of the Currency
     *
     * @param string|null $plural The plural form of the currency
     *
     * @return self
     */
    public function setPlural(?string $plural): self;
}
