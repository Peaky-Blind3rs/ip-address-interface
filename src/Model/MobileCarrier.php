<?php

/**
 * Class file for Mobile Carrier implementation.
 *
 * This file contains the MobileCarrier which implements methods from
 * the MobileCarrierInterface for getting and setting mobile carrier information.
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

use PeakyBlind3rs\IpAddressInterface\Interface\Model\MobileCarrierInterface;

/**
 * Class MobileCarrier
 *
 * The MobileCarrier class provides an implementation for the MobileCarrierInterface.
 * It allows to get and set mobile carrier information such as the carrier name,
 * mobile country code (MCC), and mobile network code (MNC).
 *
 */
class MobileCarrier implements MobileCarrierInterface
{
    /**
     * The name of the mobile carrier.
     *
     * @var string|null
     */
    private ?string $name = null;

    /**
     * The mobile country code.
     *
     * @var string|null
     */
    private ?string $mcc = null;

    /**
     * The mobile network code.
     *
     * @var string|null
     */
    private ?string $mnc = null;

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
    public function getMcc(): ?string
    {
        return $this->mcc;
    }

    /**
     * @inheritDoc
     */
    public function setMcc(?string $mcc): self
    {
        $this->mcc = $mcc;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getMnc(): ?string
    {
        return $this->mnc;
    }

    /**
     * @inheritDoc
     */
    public function setMnc(?string $mnc): self
    {
        $this->mnc = $mnc;

        return $this;
    }
}
