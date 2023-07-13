<?php

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Tests\Model;

use PeakyBlind3rs\IpAddressInterface\Model\Asn;
use PHPUnit\Framework\TestCase;

/**
 * Class AsnTest
 *
 * This class tests the Asn model class.
 *
 * @category   Test
 * @package    PeakyBlind3rs\IpAddressInterface\Tests\Model
 */
final class AsnTest extends TestCase
{
    private Asn $asn;

    /**
     * Setup for tests.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->asn = new Asn();
    }

    /**
     * This method is used to test get and set ASN methods.
     *
     * @return void
     */
    public function testGetSetAsn(): void
    {
        $this->asn->setAsn('TestAsn');
        $this->assertSame('TestAsn', $this->asn->getAsn());
    }

    /**
     * This method is used to test get and set Name methods.
     *
     * @return void
     */
    public function testGetSetName(): void
    {
        $this->asn->setName('TestName');
        $this->assertSame('TestName', $this->asn->getName());
    }

    /**
     * This method is used to test get and set Domain methods.
     *
     * @return void
     */
    public function testGetSetDomain(): void
    {
        $this->asn->setDomain('TestDomain');
        $this->assertSame('TestDomain', $this->asn->getDomain());
    }

    /**
     * This method is used to test get and set Route methods.
     *
     * @return void
     */
    public function testGetSetRoute(): void
    {
        $this->asn->setRoute('TestRoute');
        $this->assertSame('TestRoute', $this->asn->getRoute());
    }

    /**
     * This method is used to test get and set Type methods.
     *
     * @return void
     */
    public function testGetSetType(): void
    {
        $this->asn->setType('TestType');
        $this->assertSame('TestType', $this->asn->getType());
    }

    /**
     * Cleans up the Asn instance.
     *
     * This method is called after each test.
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->asn);
    }
}
