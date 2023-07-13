<?php

/**
 * Interface file for Timezone details.
 *
 * This file contains the TimezoneInterface which includes methods for
 * getting and setting timezone information.
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
 * Interface TimezoneInterface
 *
 * @category Interfaces
 * @package  PeakyBlind3rs\IpAddressInterface\Interface\Model
 * @author   Tommy Shelby <developers@remitso.com>
 * @license  http://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/Peaky-Blind3rs/ip-address-interface
 *
 * Interface for timezone information,
 * providing getters and setters for the properties.
 * Setters return self for method chaining. All properties can be null,
 * indicating data is not available.
 */
interface TimezoneInterface
{
    /**
     * Retrieves the name of the timezone.
     *
     * @return string|null
     */
    public function getName(): ?string;


    /**
     * Specifies the name of the timezone.
     *
     * @param string|null $name The name of the timezone.
     *
     * @return self
     */
    public function setName(?string $name): self;


    /**
     * Returns the abbreviation of the timezone.
     *
     * @return string|null
     */
    public function getAbbr(): ?string;


    /**
     * Sets the abbreviation of the timezone.
     *
     * @param string|null $abbr The abbreviation of the timezone.
     *
     * @return self
     */
    public function setAbbr(?string $abbr): self;


    /**
     * Retrieves the offset from UTC for the timezone.
     *
     * @return string|null
     */
    public function getOffset(): ?string;


    /**
     * Specifies the offset from UTC for the timezone.
     *
     * @param string|null $offset The offset from UTC.
     *
     * @return self
     */
    public function setOffset(?string $offset): self;
}
