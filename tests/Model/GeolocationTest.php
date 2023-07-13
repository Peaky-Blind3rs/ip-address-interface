<?php

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Tests\Model;

use PHPUnit\Framework\TestCase;
use PeakyBlind3rs\IpAddressInterface\Model\Geolocation;

/**
 * Class GeolocationTest
 *
 * @category   Tests
 * @package    PeakyBlind3rs\IpAddressInterface\Tests\Model
 */
final class GeolocationTest extends TestCase
{
    private Geolocation $geo;

    /**
     * Setup for tests.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->geo = new Geolocation();
    }

    /**
     * Test for isEu() and setEu().
     *
     * @return void
     */
    public function testIsEu(): void
    {
        $this->geo->setEu(true);
        $this->assertTrue($this->geo->isEu());
    }

    /**
     * Test for getCity() and setCity().
     *
     * @return void
     */
    public function testCity(): void
    {
        $city = 'New York';
        $this->geo->setCity($city);
        $this->assertSame($city, $this->geo->getCity());
    }

    /**
     * Test for getRegion() and setRegion().
     *
     * @return void
     */
    public function testRegion(): void
    {
        $region = 'New York';
        $this->geo->setRegion($region);
        $this->assertSame($region, $this->geo->getRegion());
    }

    /**
     * Test for getRegionCode() and setRegionCode().
     *
     * @return void
     */
    public function testRegionCode(): void
    {
        $regionCode = 'NY';
        $this->geo->setRegionCode($regionCode);
        $this->assertSame($regionCode, $this->geo->getRegionCode());
    }

    /**
     * Test for getRegionType() and setRegionType().
     *
     * @return void
     */
    public function testRegionType(): void
    {
        $regionType = 'State';
        $this->geo->setRegionType($regionType);
        $this->assertSame($regionType, $this->geo->getRegionType());
    }

    /**
     * Test for getCountryName() and setCountryName().
     *
     * @return void
     */
    public function testCountryName(): void
    {
        $countryName = 'United States';
        $this->geo->setCountryName($countryName);
        $this->assertSame($countryName, $this->geo->getCountryName());
    }

    /**
     * Test for getCountryCode() and setCountryCode().
     *
     * @return void
     */
    public function testCountryCode(): void
    {
        $countryCode = 'US';
        $this->geo->setCountryCode($countryCode);
        $this->assertSame($countryCode, $this->geo->getCountryCode());
    }

    /**
     * Test for getContinentName() and setContinentName().
     *
     * @return void
     */
    public function testContinentName(): void
    {
        $continentName = 'North America';
        $this->geo->setContinentName($continentName);
        $this->assertSame($continentName, $this->geo->getContinentName());
    }

    /**
     * Test for getContinentCode() and setContinentCode().
     *
     * @return void
     */
    public function testContinentCode(): void
    {
        $continentCode = 'NA';
        $this->geo->setContinentCode($continentCode);
        $this->assertSame($continentCode, $this->geo->getContinentCode());
    }

    /**
     * Test for getLatitude() and setLatitude().
     *
     * @return void
     */
    public function testLatitude(): void
    {
        $latitude = 40.7128;
        $this->geo->setLatitude($latitude);
        $this->assertSame($latitude, $this->geo->getLatitude());
    }

    /**
     * Test for getLongitude() and setLongitude().
     *
     * @return void
     */
    public function testLongitude(): void
    {
        $longitude = 74.0060;
        $this->geo->setLongitude($longitude);
        $this->assertSame($longitude, $this->geo->getLongitude());
    }

    /**
     * Test for getPostal() and setPostal().
     *
     * @return void
     */
    public function testPostal(): void
    {
        $postalCode = '10001';
        $this->geo->setPostal($postalCode);
        $this->assertSame($postalCode, $this->geo->getPostal());
    }

    /**
     * Test for getCallingCode() and setCallingCode().
     *
     * @return void
     */
    public function testCallingCode(): void
    {
        $callingCode = '1';
        $this->geo->setCallingCode($callingCode);
        $this->assertSame($callingCode, $this->geo->getCallingCode());
    }

    /**
     * Cleans up the Geolocation instance.
     *
     * This method is called after each test.
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->geo);
    }
}
