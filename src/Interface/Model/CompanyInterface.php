<?php

/**
 * Interface file for Company information.
 *
 * This file contains the CompanyInterface which includes methods for
 * getting and setting Company information.
 *
 * PHP version 8.2
 *
 * @category   Interface
 * @package    PeakyBlind3rs\IpAddressInterface\Interface\Model
 * @subpackage Company
 * @author     Tommy Shelby <developers@remitso.com>
 * @copyright  2023 RemitSo Private Limited
 * @license    http://opensource.org/licenses/MIT MIT License
 * @link       https://github.com/Peaky-Blind3rs/ip-address-interface
 */

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Interface\Model;

/**
 * Interface CompanyInterface
 *
 * @category   Interface
 * @package    PeakyBlind3rs\IpAddressInterface\Interface\Model
 * @subpackage Company
 * @author     Tommy Shelby <developers@remitso.com>
 * @license    http://opensource.org/licenses/MIT MIT License
 * @link       https://github.com/Peaky-Blind3rs/ip-address-interface
 *
 * Interface for Company information,
 * providing getters and setters for the properties.
 * Setters return self for method chaining. All properties can be null,
 * indicating data is not available.
 */
interface CompanyInterface
{
    /**
     * Get the name of the company.
     *
     * @return string|null Name of the company
     */
    public function getName(): ?string;


    /**
     * Set the name of the company.
     *
     * @param string|null $name Name of the company
     *
     * @return self
     */
    public function setName(?string $name): self;


    /**
     * Get the domain of the company.
     *
     * @return string|null Domain of the company
     */
    public function getDomain(): ?string;


    /**
     * Set the domain of the company.
     *
     * @param string|null $domain Domain of the company
     *
     * @return self
     */
    public function setDomain(?string $domain): self;


    /**
     * Get the network of the company.
     *
     * @return string|null Network of the company
     */
    public function getNetwork(): ?string;


    /**
     * Set the network of the company.
     *
     * @param string|null $network Network of the company
     *
     * @return self
     */
    public function setNetwork(?string $network): self;


    /**
     * Get the type of the company.
     *
     * @return string|null Type of the company
     */
    public function getType(): ?string;


    /**
     * Set the type of the company.
     *
     * @param string|null $type Type of the company
     *
     * @return self
     */
    public function setType(?string $type): self;
}
