<?php

/**
 * PHP version 8.2
 *
 * @category IPAddressInterface
 * @package PeakyBlind3rs\IpAddressInterface\Tests
 */

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Tests\Adapter;

use PHPUnit\Framework\TestCase;
use PeakyBlind3rs\IpAddressInterface\Adapter\DebugAdapter;

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
     * @var \PeakyBlind3rs\IpAddressInterface\Adapter\DebugAdapter
     */
    private DebugAdapter $debugAdapter;

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
        /** @var \PeakyBlind3rs\IpAddressInterface\Interface\Model\IpAddressInterface $ipAddressInstance */
        $ipAddressInstance = $this->debugAdapter->lookup('127.0.0.1');

        $this->assertEquals($ipAddress, $ipAddressInstance->getIp());
    }
}
