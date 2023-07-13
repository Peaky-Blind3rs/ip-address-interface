<?php

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Tests\Model;

use PHPUnit\Framework\TestCase;
use PeakyBlind3rs\IpAddressInterface\Model\MobileCarrier;

/**
 * Class MobileCarrierTest
 *
 * @category Tests
 * @package  PeakyBlind3rs\IpAddressInterface\Tests\Model
 */
final class MobileCarrierTest extends TestCase
{
    /**
     * @var MobileCarrier The MobileCarrier instance under test.
     */
    private MobileCarrier $mobileCarrier;

    /**
     * Setup for tests.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->mobileCarrier = new MobileCarrier();
    }

    /**
     * Tests the getName and setName methods.
     *
     * @return void
     */
    public function testGetSetName(): void
    {
        $name = 'CarrierName';
        $this->mobileCarrier->setName($name);

        $this->assertEquals($name, $this->mobileCarrier->getName());
    }

    /**
     * Tests the getMcc and setMcc methods.
     *
     * @return void
     */
    public function testGetSetMcc(): void
    {
        $mcc = '123';
        $this->mobileCarrier->setMcc($mcc);

        $this->assertEquals($mcc, $this->mobileCarrier->getMcc());
    }

    /**
     * Tests the getMnc and setMnc methods.
     *
     * @return void
     */
    public function testGetSetMnc(): void
    {
        $mnc = '456';
        $this->mobileCarrier->setMnc($mnc);

        $this->assertEquals($mnc, $this->mobileCarrier->getMnc());
    }

    /**
     * Cleans up the MobileCarrier instance.
     *
     * This method is called after each test.
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->mobileCarrier);
    }
}
