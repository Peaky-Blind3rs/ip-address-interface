<?php

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Tests;

use PeakyBlind3rs\IpAddressInterface\StaticConfig;
use PHPUnit\Framework\TestCase;

/**
 * Class StaticConfigTest
 *
 * This class tests the StaticConfig class.
 *
 * @category   Test
 * @package    PeakyBlind3rs\IpAddressInterface
 */
final class StaticConfigTest extends TestCase
{
    /**
     * Test the parseDsn method with a valid DSN string.
     *
     * @return void
     */
    public function testParseDsnWithValidString(): void
    {
        $dsn = 'iplookup://username:password@local.host/hello?foo=bar';
        $expected = [
            'scheme' => 'iplookup',
            'user' => 'username',
            'pass' => 'password',
            'host' => 'local.host',
            'path' => '/hello',
            'query' => [
                'foo' => 'bar',
            ],
        ];
        $actual = StaticConfig::parseDsn($dsn);
        $this->assertEquals($expected, $actual);
    }

    /**
     * Test the parseDsn method with an invalid DSN string.
     *
     * @return void
     */
    public function testParseDsnWithInvalidString(): void
    {
        $dsn = 'https://////.$.$.$';
        $actual = StaticConfig::parseDsn($dsn);
        $this->assertFalse($actual);
    }
}
