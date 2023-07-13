<?php

/**
 * Class file for Timezone details implementation.
 *
 * This file contains the Timezone class which implements methods from
 * the TimezoneInterface for getting and setting timezone information.
 *
 * PHP version 8.2
 *
 * @category  Class
 * @package   PeakyBlind3rs\IpAddressInterface\Model
 * @author    Tommy Shelby <developers@remitso.com>
 * @copyright 2023 RemitSo Private Limited
 * @license   http://opensource.org/licenses/MIT MIT License
 * @link      https://github.com/Peaky-Blind3rs/ip-address-interface
 */

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Model;

use PeakyBlind3rs\IpAddressInterface\Interface\Model\TimezoneInterface;

/**
 * Class Timezone
 *
 * The Timezone class provides an implementation for the TimezoneInterface.
 * It allows to get and set timezone information such as name, abbreviation and offset.
 *
 */
class Timezone implements TimezoneInterface
{
    /**
     * The name of the timezone.
     *
     * @var string|null
     */
    private ?string $name = null;

    /**
     * The abbreviation of the timezone.
     *
     * @var string|null
     */
    private ?string $abbr = null;

    /**
     * The offset of the timezone.
     *
     * @var string|null
     */
    private ?string $offset = null;

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
    public function getAbbr(): ?string
    {
        return $this->abbr;
    }

    /**
     * @inheritDoc
     */
    public function setAbbr(?string $abbr): self
    {
        $this->abbr = $abbr;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getOffset(): ?string
    {
        return $this->offset;
    }

    /**
     * @inheritDoc
     */
    public function setOffset(?string $offset): self
    {
        $this->offset = $offset;

        return $this;
    }
}
