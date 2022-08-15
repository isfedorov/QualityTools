<?php
namespace QualityTools\Tests\Codeception\tests\unit\QualityTools;

use Exception;
use QualityTools\General\SimpleCalculator;
use function self;

class SimpleCalculatorTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSubstraction()
    {
        $calc = new SimpleCalculator();
        self::assertEquals(1, $calc->sub(2, 1));
    }

    public function testAddition()
    {
        $calc = new SimpleCalculator();
        self::assertEquals(1, $calc->add(2, 1));
    }

    public function testIncomplete()
    {
        self::markTestIncomplete("This test is incomplete");
    }

    public function testSkipped()
    {
        self::markTestSkipped('This test is skipped');
    }

    public function testExit()
    {
        exit("Die here");
    }
}
