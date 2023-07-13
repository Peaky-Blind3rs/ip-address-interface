<?php

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Tests\Model;

use PHPUnit\Framework\TestCase;
use PeakyBlind3rs\IpAddressInterface\Model\Company;

/**
 * Class CompanyTest
 *
 * @category Tests
 * @package  PeakyBlind3rs\IpAddressInterface\Tests\Model
 */
final class CompanyTest extends TestCase
{
    /**
     * @var Company
     */
    private Company $company;

    /**
     * Setup for tests.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->company = new Company();
    }

    /**
     * Test getter and setter for name
     *
     * @return void
     */
    public function testName(): void
    {
        $name = 'Example Name';
        $this->company->setName($name);

        $this->assertSame($name, $this->company->getName());
    }

    /**
     * Test getter and setter for domain
     *
     * @return void
     */
    public function testDomain(): void
    {
        $domain = 'example.com';
        $this->company->setDomain($domain);

        $this->assertSame($domain, $this->company->getDomain());
    }

    /**
     * Test getter and setter for network
     *
     * @return void
     */
    public function testNetwork(): void
    {
        $network = '192.168.1.1/24';
        $this->company->setNetwork($network);

        $this->assertSame($network, $this->company->getNetwork());
    }

    /**
     * Test getter and setter for type
     *
     * @return void
     */
    public function testType(): void
    {
        $type = 'ISP';
        $this->company->setType($type);

        $this->assertSame($type, $this->company->getType());
    }

    /**
     * Cleans up the Company instance.
     *
     * This method is called after each test.
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->company);
    }
}
