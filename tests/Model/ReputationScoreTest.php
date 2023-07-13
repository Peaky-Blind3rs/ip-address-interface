<?php

declare(strict_types=1);

namespace PeakyBlind3rs\IpAddressInterface\Tests\Model;

use PHPUnit\Framework\TestCase;
use PeakyBlind3rs\IpAddressInterface\Model\ReputationScore;

/**
 * Class ReputationScoreTest
 *
 * @category Tests
 * @package  PeakyBlind3rs\IpAddressInterface\Tests\Model
 */
final class ReputationScoreTest extends TestCase
{
    /**
     * @var ReputationScore
     */
    private ReputationScore $reputationScore;

    /**
     * Setup for tests.
     *
     * @return void
     */
    protected function setUp(): void
    {
        $this->reputationScore = new ReputationScore();
    }

    /**
     * Tests whether the vpnScore value could be correctly set and get.
     *
     * @return void
     */
    public function testGetSetVpnScore(): void
    {
        $score = 10;
        $this->reputationScore->setVpnScore($score);

        $this->assertEquals($score, $this->reputationScore->getVpnScore());
    }

    /**
     * Tests whether the proxyScore value could be correctly set and get.
     *
     * @return void
     */
    public function testGetSetProxyScore(): void
    {
        $score = 20;
        $this->reputationScore->setProxyScore($score);

        $this->assertEquals($score, $this->reputationScore->getProxyScore());
    }

    /**
     * Tests whether the threatScore value could be correctly set and get.
     *
     * @return void
     */
    public function testGetSetThreatScore(): void
    {
        $score = 30;
        $this->reputationScore->setThreatScore($score);

        $this->assertEquals($score, $this->reputationScore->getThreatScore());
    }

    /**
     * Tests whether the trustScore value could be correctly set and get.
     *
     * @return void
     */
    public function testGetSetTrustScore(): void
    {
        $score = 40;
        $this->reputationScore->setTrustScore($score);

        $this->assertEquals($score, $this->reputationScore->getTrustScore());
    }

    /**
     * Destroys the ReputationScore instance.
     *
     * This method is invoked after each test.
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->reputationScore);
    }
}
