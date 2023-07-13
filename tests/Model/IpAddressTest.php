<?php

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Tests\Model;

use PeakyBlind3rs\IpAddressInterface\Model\IpAddress;
use PeakyBlind3rs\IpAddressInterface\Interface\Model\AsnInterface;
use PeakyBlind3rs\IpAddressInterface\Interface\Model\CompanyInterface;
use PeakyBlind3rs\IpAddressInterface\Interface\Model\CurrencyInterface;
use PeakyBlind3rs\IpAddressInterface\Interface\Model\GeolocationInterface;
use PeakyBlind3rs\IpAddressInterface\Interface\Model\MobileCarrierInterface;
use PeakyBlind3rs\IpAddressInterface\Interface\Model\ThreatIntelligenceInterface;
use PeakyBlind3rs\IpAddressInterface\Interface\Model\TimezoneInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class IpAddressTest
 *
 * @category   Test
 * @package    PeakyBlind3rs\IpAddressInterface\Tests\Model
 */
final class IpAddressTest extends TestCase
{
    private IpAddress $ipAddress;

    /**
     * Setup function for every test method
     */
    protected function setUp(): void
    {
        $this->ipAddress = new IpAddress();
    }

    /**
     * Test get and set Geolocation
     */
    public function testGetSetGeolocation(): void
    {
        $geolocationMock = $this->createMock(GeolocationInterface::class);
        $this->ipAddress->setGeolocation($geolocationMock);
        $this->assertSame($geolocationMock, $this->ipAddress->getGeolocation());
    }

    /**
     * Test get and set MobileCarrier
     */
    public function testGetSetMobileCarrier(): void
    {
        $mobileCarrierMock = $this->createMock(MobileCarrierInterface::class);
        $this->ipAddress->setMobileCarrier($mobileCarrierMock);
        $this->assertSame($mobileCarrierMock, $this->ipAddress->getMobileCarrier());
    }

    /**
     * Test get and set Timezone
     */
    public function testGetSetTimezone(): void
    {
        $timezoneMock = $this->createMock(TimezoneInterface::class);
        $this->ipAddress->setTimezone($timezoneMock);
        $this->assertSame($timezoneMock, $this->ipAddress->getTimezone());
    }

    /**
     * Test get and set Currency
     */
    public function testGetSetCurrency(): void
    {
        $currencyMock = $this->createMock(CurrencyInterface::class);
        $this->ipAddress->setCurrency($currencyMock);
        $this->assertSame($currencyMock, $this->ipAddress->getCurrency());
    }

    /**
     * Test get and set ThreatIntelligence
     */
    public function testGetSetThreatIntelligence(): void
    {
        $threatIntelligenceMock = $this->createMock(ThreatIntelligenceInterface::class);
        $this->ipAddress->setThreatIntelligence($threatIntelligenceMock);
        $this->assertSame($threatIntelligenceMock, $this->ipAddress->getThreatIntelligence());
    }

    /**
     * Test get and set Asn
     */
    public function testGetSetAsn(): void
    {
        $asnMock = $this->createMock(AsnInterface::class);
        $this->ipAddress->setAsn($asnMock);
        $this->assertSame($asnMock, $this->ipAddress->getAsn());
    }

    /**
     * Test get and set Company
     */
    public function testGetSetCompany(): void
    {
        $companyMock = $this->createMock(CompanyInterface::class);
        $this->ipAddress->setCompany($companyMock);
        $this->assertSame($companyMock, $this->ipAddress->getCompany());
    }

    /**
     * This method is called after each test.
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->ipAddress);
    }
}
