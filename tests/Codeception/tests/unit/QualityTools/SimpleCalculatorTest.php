<?php
namespace QualityTools\Tests\Codeception\tests\unit\QualityTools;

use QualityTools\SimpleCalculator;

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
}
