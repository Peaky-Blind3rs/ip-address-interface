<?php

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Tests;

use InvalidArgumentException;
use PeakyBlind3rs\IpAddressInterface\Adapter\DebugAdapter;
use PeakyBlind3rs\IpAddressInterface\IPServiceFactory;
use PHPUnit\Framework\TestCase;
use PeakyBlind3rs\IpAddressInterface\Interface\IpLookupInterface;

/**
 * Class IPServiceFactoryTest
 *
 * PHPUnit Test class for the IPServiceFactory class.
 *
 * @coversDefaultClass \PeakyBlind3rs\IpAddressInterface\IPServiceFactory
 */
class IPServiceFactoryTest extends TestCase
{
    /**
     * @return void
     */
    public function testGetInstance(): void
    {
        IPServiceFactory::classMaps(['debug' => DebugAdapter::class]);
        $lookupServiceInstance = IPServiceFactory::getInstance('debug://localhost');
        $this->assertInstanceOf(IpLookupInterface::class, $lookupServiceInstance);
    }

    /**
     * @return void
     */
    public function testGetInstanceWithConstructor(): void
    {
        $lookupServiceInstance = IPServiceFactory::getInstance('ipdata://localhost');
        $this->assertInstanceOf(IpLookupInterface::class, $lookupServiceInstance);
    }

    /**
     * @return void
     */
    public function testInvalidDsn(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Provided DSN is not valid');
        IPServiceFactory::getInstance('https://////.$.$.$');
    }

    /**
     * @return void
     */
    public function testNoAdapterFound(): void
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Adapter could not be found');
        IPServiceFactory::getInstance('unknown://localhost');
    }

    /**
     * @return void
     *
     * @psalm-suppress ArgumentTypeCoercion
     */
    public function testAdapterInstanceCouldNotBeCreated(): void
    {
        /**
         * @psalm-suppress UndefinedClass
         */
        IPServiceFactory::classMaps(['bad' => '\\NotExistingNameSpace\\NotExistingClass']);

        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Adapter instance could not be created');
        IPServiceFactory::getInstance('bad://localhost');
    }
}
