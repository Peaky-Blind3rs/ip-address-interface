<?php

/**
 * Interface file for ASN (Autonomous System Number) information.
 *
 * This file contains the ASNInterface which includes methods for
 * getting and setting ASN information.
 *
 * PHP version 8.2
 *
 * @category    Interfaces
 * @package     PeakyBlind3rs\IpAddressInterface\Interface\Model
 * @subpackage  ASN
 * @author      Tommy Shelby <developers@remitso.com>
 * @copyright   2023 RemitSo Private Limited
 * @subcategory ASN
 * @license     http://opensource.org/licenses/MIT MIT License
 * @link        https://github.com/Peaky-Blind3rs/ip-address-interface
 */

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Interface\Model;

/**
 * Interface AsnInterface
 *
 * @category   Interfaces
 * @package    PeakyBlind3rs\IpAddressInterface\Interface\Model
 * @subpackage ASN
 * @author     Tommy Shelby <developers@remitso.com>
 * @license    http://opensource.org/licenses/MIT MIT License
 * @link       https://github.com/Peaky-Blind3rs/ip-address-interface
 *
 * Interface for Autonomous System Number (ASN) information,
 * providing getters and setters for the properties.
 * Setters return self for method chaining. All properties can be null,
 * indicating data is not available.
 */
interface AsnInterface
{
    /**
     * Get ASN
     *
     * @return string|null ASN value
     */
    public function getAsn(): ?string;


    /**
     * Set ASN
     *
     * @param string|null $asn ASN value.
     *
     * @return self
     */
    public function setAsn(?string $asn): self;


    /**
     * Get name
     *
     * @return string|null Name value
     */
    public function getName(): ?string;


    /**
     * Set name
     *
     * @param string|null $name Name value.
     *
     * @return self
     */
    public function setName(?string $name): self;


    /**
     * Get domain
     *
     * @return string|null Domain value
     */
    public function getDomain(): ?string;


    /**
     * Set domain
     *
     * @param string|null $domain Domain value.
     *
     * @return self
     */
    public function setDomain(?string $domain): self;


    /**
     * Get route
     *
     * @return string|null Route value
     */
    public function getRoute(): ?string;


    /**
     * Set route
     *
     * @param string|null $route Route value.
     *
     * @return self
     */
    public function setRoute(?string $route): self;


    /**
     * Get type
     *
     * @return string|null Type value
     */
    public function getType(): ?string;


    /**
     * Set type
     *
     * @param string|null $type Type value.
     *
     * @return self
     */
    public function setType(?string $type): self;
}
