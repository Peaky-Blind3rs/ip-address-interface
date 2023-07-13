<?php

/**
 * Interface file for Mobile Carrier details.
 *
 * This file contains the MobileCarrierInterface which includes methods for
 * getting and setting mobile carrier information.
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
 * Interface MobileCarrierInterface
 *
 * @category Interface
 * @package  PeakyBlind3rs\IpAddressInterface\Interface\Model
 * @author   Tommy Shelby <developers@remitso.com>
 * @license  http://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/Peaky-Blind3rs/ip-address-interface
 *
 * Interface for mobile carrier information,
 * providing getters and setters for the properties.
 * Setters return self for method chaining. All properties can be null,
 * indicating data is not available.
 */
interface MobileCarrierInterface
{
    /**
     * Returns the name of the mobile carrier.
     *
     * @return string|null
     */
    public function getName(): ?string;


    /**
     * Sets the name of the mobile carrier.
     *
     * @param string|null $name name of the mobile carrier.
     *
     * @return self
     */
    public function setName(?string $name): self;


    /**
     * Returns the mobile country code (MCC).
     *
     * @return string|null
     */
    public function getMcc(): ?string;


    /**
     * Sets the mobile country code (MCC).
     *
     * @param string|null $mcc mobile country code (MCC).
     *
     * @return self
     */
    public function setMcc(?string $mcc): self;


    /**
     * Returns the mobile network code (MNC).
     *
     * @return string|null
     */
    public function getMnc(): ?string;


    /**
     * Sets the mobile network code (MNC).
     *
     * @param string|null $mnc mobile network code (MNC)
     *
     * @return self
     */
    public function setMnc(?string $mnc): self;
}
