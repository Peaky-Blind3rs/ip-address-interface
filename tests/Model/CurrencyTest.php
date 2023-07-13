<?php

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Tests\Model;

use PHPUnit\Framework\TestCase;
use PeakyBlind3rs\IpAddressInterface\Model\Currency;

/**
 * Class CurrencyTest
 *
 * @category Tests
 * @package  PeakyBlind3rs\IpAddressInterface\Tests\Model
 */
final class CurrencyTest extends TestCase
{
    /**
     * @var Currency
     */
    private Currency $currency;

    /**
     * Setup for tests.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->currency = new Currency();
    }

    /**
     * Test getter and setter for name
     *
     * @return void
     */
    public function testName(): void
    {
        $name = 'US Dollar';
        $this->currency->setName($name);

        $this->assertSame($name, $this->currency->getName());
    }

    /**
     * Test getter and setter for code
     *
     * @return void
     */
    public function testCode(): void
    {
        $code = 'USD';
        $this->currency->setCode($code);

        $this->assertSame($code, $this->currency->getCode());
    }

    /**
     * Test getter and setter for symbol
     *
     * @return void
     */
    public function testSymbol(): void
    {
        $symbol = '$';
        $this->currency->setSymbol($symbol);

        $this->assertSame($symbol, $this->currency->getSymbol());
    }

    /**
     * Test getter and setter for native
     *
     * @return void
     */
    public function testNative(): void
    {
        $native = 'US Dollar';
        $this->currency->setNative($native);

        $this->assertSame($native, $this->currency->getNative());
    }

    /**
     * Test getter and setter for plural
     *
     * @return void
     */
    public function testPlural(): void
    {
        $plural = 'US Dollars';
        $this->currency->setPlural($plural);

        $this->assertSame($plural, $this->currency->getPlural());
    }

    /**
     * Cleans up the Currency instance.
     *
     * This method is called after each test.
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->currency);
    }
}
