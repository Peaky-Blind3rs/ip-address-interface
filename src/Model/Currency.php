<?php

/**
 * Class file for Currency details implementation.
 *
 * This file contains the Currency class which implements methods from
 * the CurrencyInterface for getting and setting currency information.
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

use PeakyBlind3rs\IpAddressInterface\Interface\Model\CurrencyInterface;

/**
 * Class Currency
 *
 * The Currency class provides an implementation for the CurrencyInterface.
 * It allows to get and set currency information such as name, code, symbol, native, and plural form.
 */
class Currency implements CurrencyInterface
{
    /**
     * The name of the currency.
     *
     * @var string|null
     */
    private ?string $name = null;

    /**
     * The code of the currency.
     *
     * @var string|null
     */
    private ?string $code = null;

    /**
     * The symbol of the currency.
     *
     * @var string|null
     */
    private ?string $symbol = null;

    /**
     * The native representation of the currency.
     *
     * @var string|null
     */
    private ?string $native = null;

    /**
     * The plural form of the currency name.
     *
     * @var string|null
     */
    private ?string $plural = null;

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
    public function getCode(): ?string
    {
        return $this->code;
    }

    /**
     * @inheritDoc
     */
    public function setCode(?string $code): self
    {
        $this->code = $code;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getSymbol(): ?string
    {
        return $this->symbol;
    }

    /**
     * @inheritDoc
     */
    public function setSymbol(?string $symbol): self
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getNative(): ?string
    {
        return $this->native;
    }

    /**
     * @inheritDoc
     */
    public function setNative(?string $native): self
    {
        $this->native = $native;

        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getPlural(): ?string
    {
        return $this->plural;
    }

    /**
     * @inheritDoc
     */
    public function setPlural(?string $plural): self
    {
        $this->plural = $plural;

        return $this;
    }
}
