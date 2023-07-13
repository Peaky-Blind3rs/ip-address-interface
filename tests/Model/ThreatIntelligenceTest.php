<?php

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Tests\Model;

use PeakyBlind3rs\IpAddressInterface\Model\ThreatIntelligence;
use PHPUnit\Framework\TestCase;
use PeakyBlind3rs\IpAddressInterface\Interface\Model\BlocklistInterface;
use PeakyBlind3rs\IpAddressInterface\Interface\Model\ReputationScoreInterface;

/**
 * Class ThreatIntelligenceTest
 *
 * This class tests the ThreatIntelligence model class.
 *
 * @category   Test
 * @package    PeakyBlind3rs\IpAddressInterface\Tests\Model
 */
final class ThreatIntelligenceTest extends TestCase
{
    /**
     * The ThreatIntelligence instance.
     *
     * @var \PeakyBlind3rs\IpAddressInterface\Model\ThreatIntelligence
     */
    private ThreatIntelligence $threatIntelligence;

    /**
     * Setup for tests.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->threatIntelligence = new ThreatIntelligence();
    }

    /**
     * This method is used to test get and set Tor methods.
     *
     * @return void
     */
    public function testGetSetTor(): void
    {
        $this->threatIntelligence->setTor(true);
        $this->assertSame(true, $this->threatIntelligence->isTor());
    }

    /**
     * This method is used to test get and set IcloudRelay methods.
     *
     * @return void
     */
    public function testGetSetIcloudRelay(): void
    {
        $this->threatIntelligence->setIcloudRelay(true);
        $this->assertSame(true, $this->threatIntelligence->isIcloudRelay());
    }

    /**
     * This method is used to test get and set Proxy methods.
     *
     * @return void
     */
    public function testGetSetProxy(): void
    {
        $this->threatIntelligence->setProxy(true);
        $this->assertSame(true, $this->threatIntelligence->isProxy());
    }

    /**
     * This method is used to test get and set Datacenter methods.
     *
     * @return void
     */
    public function testGetSetDatacenter(): void
    {
        $this->threatIntelligence->setDatacenter(true);
        $this->assertSame(true, $this->threatIntelligence->isDatacenter());
    }

    /**
     * This method is used to test get and set Anonymous methods.
     *
     * @return void
     */
    public function testGetSetAnonymous(): void
    {
        $this->threatIntelligence->setAnonymous(true);
        $this->assertSame(true, $this->threatIntelligence->isAnonymous());
    }

    /**
     * This method is used to test get and set KnownAttacker methods.
     *
     * @return void
     */
    public function testGetSetKnownAttacker(): void
    {
        $this->threatIntelligence->setKnownAttacker(true);
        $this->assertSame(true, $this->threatIntelligence->isKnownAttacker());
    }

    /**
     * This method is used to test get and set KnownAbuser methods.
     *
     * @return void
     */
    public function testGetSetKnownAbuser(): void
    {
        $this->threatIntelligence->setKnownAbuser(true);
        $this->assertSame(true, $this->threatIntelligence->isKnownAbuser());
    }

    /**
     * This method is used to test get and set Threat methods.
     *
     * @return void
     */
    public function testGetSetThreat(): void
    {
        $this->threatIntelligence->setThreat(true);
        $this->assertSame(true, $this->threatIntelligence->isThreat());
    }

    /**
     * This method is used to test get and set Bogon methods.
     *
     * @return void
     */
    public function testGetSetBogon(): void
    {
        $this->threatIntelligence->setBogon(true);
        $this->assertSame(true, $this->threatIntelligence->isBogon());
    }

    /**
     * This method is used to test get and set Blocklists methods.
     *
     * @return void
     * @throws \PHPUnit\Framework\MockObject\Exception
     */
    public function testGetSetBlocklists(): void
    {
        $blocklistMock = $this->createMock(BlocklistInterface::class);
        $this->threatIntelligence->setBlocklists([$blocklistMock]);
        $this->assertSame([$blocklistMock], $this->threatIntelligence->getBlocklists());
    }

    /**
     * This method is used to test add Blocklist method.
     *
     * @return void
     * @throws \PHPUnit\Framework\MockObject\Exception
     */
    public function testAddBlocklist(): void
    {
        $blocklistMock = $this->createMock(BlocklistInterface::class);
        $this->threatIntelligence->addBlocklist($blocklistMock);
        $this->assertSame([$blocklistMock], $this->threatIntelligence->getBlocklists());
    }

    /**
     * This method is used to test get and set Scores methods.
     *
     * @return void
     * @throws \PHPUnit\Framework\MockObject\Exception
     */
    public function testGetSetScores(): void
    {
        $scoresMock = $this->createMock(ReputationScoreInterface::class);
        $this->threatIntelligence->setScores($scoresMock);
        $this->assertSame($scoresMock, $this->threatIntelligence->getScores());
    }

    /**
     * Cleans up the ThreatIntelligence instance.
     *
     * This method is called after each test.
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->threatIntelligence);
    }
}
