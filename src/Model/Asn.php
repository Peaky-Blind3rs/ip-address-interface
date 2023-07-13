<?php

/**
 * Model file for ASN (Autonomous System Number) information.
 *
 * This file contains the Asn model which includes methods for
 * getting and setting ASN information.
 *
 * PHP version 8.2
 *
 * @category    Model
 * @package     PeakyBlind3rs\IpAddressInterface\Model
 * @subpackage  ASN
 * @author      Tommy Shelby <developers@remitso.com>
 * @copyright   2023 RemitSo Private Limited
 * @license     http://opensource.org/licenses/MIT MIT License
 * @link        https://github.com/Peaky-Blind3rs/ip-address-interface
 */

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Model;

use PeakyBlind3rs\IpAddressInterface\Interface\Model\AsnInterface;

/**
 * Class Asn
 *
 * @category   Model
 * @package    PeakyBlind3rs\IpAddressInterface\Model
 * @author     Tommy Shelby <developers@remitso.com>
 * @license    http://opensource.org/licenses/MIT MIT License
 * @link       https://github.com/Peaky-Blind3rs/ip-address-interface
 *
 * The model Autonomous System Number (ASN) information,
 * providing getters and setters for the properties.
 * Setters return self for method chaining. All properties are set to null by default.
 */
class Asn implements AsnInterface
{
    /**
     * The ASN value
     *
     * @var string|null
     */
    private ?string $asn = null;

    /**
     * The name value
     *
     * @var string|null
     */
    private ?string $name = null;

    /**
     * The domain value
     *
     * @var string|null
     */
    private ?string $domain = null;

    /**
     * The route value
     *
     * @var string|null
     */
    private ?string $route = null;

    /**
     * The type value
     *
     * @var string|null
     */
    private ?string $type = null;

    /**
     * @inheritDoc
     */
    public function getAsn(): ?string
    {
        return $this->asn;
    }

    /**
     * @inheritDoc
     */
    public function setAsn(?string $asn): self
    {
        $this->asn = $asn;

        return $this;
    }

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
    public function getDomain(): ?string
    {
        return $this->domain;
    }

    /**
     * @inheritDoc
     */
    public function setDomain(?string $domain): self
    {
        $this->domain = $domain;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getRoute(): ?string
    {
        return $this->route;
    }

    /**
     * @inheritDoc
     */
    public function setRoute(?string $route): self
    {
        $this->route = $route;

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
