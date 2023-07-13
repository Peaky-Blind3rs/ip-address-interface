<?php

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Tests\Model;

use PeakyBlind3rs\IpAddressInterface\Model\Blocklist;
use PHPUnit\Framework\TestCase;

/**
 * Class BlocklistTest
 *
 * @category Tests
 * @package  PeakyBlind3rs\IpAddressInterface\Tests\Model
 */
final class BlocklistTest extends TestCase
{
    /**
     * @var Blocklist
     */
    private Blocklist $blocklist;

    /**
     * Setup for tests.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->blocklist = new Blocklist();
    }

    /**
     * Test getter and setter for name
     *
     * @return void
     */
    public function testName(): void
    {
        $name = 'Example Name';
        $this->blocklist->setName($name);

        $this->assertSame($name, $this->blocklist->getName());
    }

    /**
     * Test getter and setter for site
     *
     * @return void
     */
    public function testSite(): void
    {
        $site = 'https://example.com';
        $this->blocklist->setSite($site);

        $this->assertSame($site, $this->blocklist->getSite());
    }

    /**
     * Test getter and setter for type
     *
     * @return void
     */
    public function testType(): void
    {
        $type = 'Example Type';
        $this->blocklist->setType($type);

        $this->assertSame($type, $this->blocklist->getType());
    }

    /**
     * Cleans up the Blocklist instance.
     *
     * This method is called after each test.
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->blocklist);
    }
}
