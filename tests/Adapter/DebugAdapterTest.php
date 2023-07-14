<?php

/**
 * PHP version 8.2
 *
 * @category IPAddressInterface
 * @package PeakyBlind3rs\IpAddressInterface\Tests
 */

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Tests\Adapter;

use PHPUnit\Framework\MockObject\Exception;
use PHPUnit\Framework\TestCase;
use PeakyBlind3rs\IpAddressInterface\Adapter\DebugAdapter;
use PeakyBlind3rs\IpAddressInterface\Model\IpAddress;

/**
 * Class DebugAdapterTest
 *
 * Test case for DebugAdapter class.
 *
 * @category IPAddressInterface
 * @package PeakyBlind3rs\IpAddressInterface\Tests
 */
class DebugAdapterTest extends TestCase
{
    /**
     * @var DebugAdapter
     */
    private $debugAdapter;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->debugAdapter = new DebugAdapter();
    }

    /**
     * Test lookup method.
     *
     * @return void
     */
    public function testLookup(): void
    {
        $ipAddress = '127.0.0.1';
        $ipAddressInstance = $this->debugAdapter->lookup('127.0.0.1');

        $this->assertEquals($ipAddress, $ipAddressInstance->getIp());
    }
}
