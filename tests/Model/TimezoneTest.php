<?php

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Tests\Model;

use PHPUnit\Framework\TestCase;
use PeakyBlind3rs\IpAddressInterface\Model\Timezone;

/**
 * Class TimezoneTest
 *
 * @category Tests
 * @package  PeakyBlind3rs\IpAddressInterface\Tests\Model
 */
final class TimezoneTest extends TestCase
{
    /**
     * @var Timezone
     */
    private Timezone $timezone;

    /**
     * Setup for tests.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->timezone = new Timezone();
    }

    /**
     * Test getter and setter for name
     *
     * @return void
     */
    public function testName(): void
    {
        $name = 'Asia/Kolkata';
        $this->timezone->setName($name);

        $this->assertSame($name, $this->timezone->getName());
    }

    /**
     * Test getter and setter for abbreviation
     *
     * @return void
     */
    public function testAbbr(): void
    {
        $abbr = 'PST';
        $this->timezone->setAbbr($abbr);

        $this->assertSame($abbr, $this->timezone->getAbbr());
    }

    /**
     * Test getter and setter for offset
     *
     * @return void
     */
    public function testOffset(): void
    {
        $offset = '-08:00';
        $this->timezone->setOffset($offset);

        $this->assertSame($offset, $this->timezone->getOffset());
    }

    /**
     * Destroys the timezone instance.
     *
     * This method is invoked after each test.
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->timezone);
    }
}
