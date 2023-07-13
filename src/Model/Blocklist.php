<?php

/**
 * Class file for Blocklist Registry details.
 * Get and set data for Blocklist Registry.
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

use PeakyBlind3rs\IpAddressInterface\Interface\Model\BlocklistInterface;

/**
 * Class Blocklist
 *
 * @category   Class
 * @package    PeakyBlind3rs\IpAddressInterface\Model
 * @author     Tommy Shelby <developers@remitso.com>
 * @copyright  2023 RemitSo Private Limited
 * @license    http://opensource.org/licenses/MIT MIT License
 * @link       https://github.com/Peaky-Blind3rs/ip-address-interface
 *
 * This class provides getters and setters implementation
 * for the properties as defined in BlocklistInterface.
 * Each setter returns self for method chaining.
 * All properties can be null, indicating that data might not be available.
 */
class Blocklist implements BlocklistInterface
{
    /**
     * The name of the blocklist registry.
     *
     * @var string|null
     */
    private ?string $name = null;

    /**
     * The site URL of the blocklist registry.
     *
     * @var string|null
     */
    private ?string $site = null;

    /**
     * The type of blocklist.
     *
     * @var string|null
     */
    private ?string $type = null;

    /**
     * @inheritDoc
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * @inheritDoc
     */
    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSite(): ?string
    {
        return $this->site;
    }

    /**
     * @inheritDoc
     */
    public function setSite(?string $site): self
    {
        $this->site = $site;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * @inheritDoc
     */
    public function setType(?string $type): self
    {
        $this->type = $type;

        return $this;
    }
}
