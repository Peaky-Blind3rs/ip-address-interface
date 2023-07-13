<?php

/**
 * Interface file for Blocklist Registry Details.
 *
 * This file contains the BlocklistInterface which includes methods for
 * getting and setting Blocklist Registry information.
 *
 * PHP version 8.2
 *
 * @category   Interface
 * @package    PeakyBlind3rs\IpAddressInterface\Interface\Model
 * @subpackage Blocklist
 * @author     Tommy Shelby <developers@remitso.com>
 * @copyright  2023 RemitSo Private Limited
 * @license    http://opensource.org/licenses/MIT MIT License
 * @link       https://github.com/Peaky-Blind3rs/ip-address-interface
 */

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Interface\Model;

/**
 * Interface BlocklistInterface
 *
 * @category   Interface
 * @package    PeakyBlind3rs\IpAddressInterface\Interface\Model
 * @subpackage Blocklist
 * @author     Tommy Shelby <developers@remitso.com>
 * @license    http://opensource.org/licenses/MIT MIT License
 * @link       https://github.com/Peaky-Blind3rs/ip-address-interface
 *
 * Interface for Blocklist Registry information,
 * providing getters and setters for the properties.
 * Setters return self for method chaining. All properties can be null,
 * indicating data is not available.
 */
interface BlocklistInterface
{
    /**
     * Get the name of the blocklist registry.
     *
     * @return string|null Blocklist name
     */
    public function getName(): ?string;


    /**
     * Set the name of the blocklist registry.
     *
     * @param string|null $name Name of the blocklist
     *
     * @return self
     */
    public function setName(?string $name): self;


    /**
     * Get the site URL of the blocklist registry.
     *
     * @return string|null URL of the blocklist site
     */
    public function getSite(): ?string;


    /**
     * Set the site URL of the blocklist registry.
     *
     * @param string|null $site URL of the blocklist site
     *
     * @return self
     */
    public function setSite(?string $site): self;


    /**
     * Get the type of blocklist.
     *
     * @return string|null Blocklist type
     */
    public function getType(): ?string;


    /**
     * Set the type of the blocklist.
     *
     * @param string|null $type Blocklist type
     *
     * @return self
     */
    public function setType(?string $type): self;
}
