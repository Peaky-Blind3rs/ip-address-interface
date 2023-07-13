<?php

/**
 * Class file for Company.
 * Set and get data for Company.
 *
 * PHP version 8.2
 *
 * @category   Class
 * @package    PeakyBlind3rs\IpAddressInterface\Model
 * @subpackage Company
 * @author     Tommy Shelby <developers@remitso.com>
 * @copyright  2023 RemitSo Private Limited
 * @license    http://opensource.org/licenses/MIT MIT License
 * @link       https://github.com/Peaky-Blind3rs/ip-address-interface
 */

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Model;

use PeakyBlind3rs\IpAddressInterface\Interface\Model\CompanyInterface;

/**
 * Class Company
 *
 * @category   Class
 * @package    PeakyBlind3rs\IpAddressInterface\Model
 * @subpackage Company
 * @author     Tommy Shelby <developers@remitso.com>
 * @copyright  2023 RemitSo Private Limited
 * @license    http://opensource.org/licenses/MIT MIT License
 * @link       https://github.com/Peaky-Blind3rs/ip-address-interface
 *
 * This class provides getters and setters implementation
 * for the properties as defined in the CompanyInterface.
 *
 * Each setter returns self for method chaining.
 * All properties can be null, indication that data might not be available.
 */
class Company implements CompanyInterface
{
    /**
     * The name of the company.
     *
     * @var string|null
     */
    private ?string $name = null;

    /**
     * The domain of the company.
     *
     * @var string|null
     */
    private ?string $domain = null;

    /**
     * The network of the company.
     *
     * @var string|null
     */
    private ?string $network = null;

    /**
     * The type of the company.
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
    public function getNetwork(): ?string
    {
        return $this->network;
    }

    /**
     * @inheritDoc
     */
    public function setNetwork(?string $network): self
    {
        $this->network = $network;

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
