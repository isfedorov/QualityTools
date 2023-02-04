<?php

namespace QualityTools\Tests\Codeception\tests\unit\QualityTools;

use Codeception\Test\Unit;
use QualityTools\General\SimpleCalculator;
use UnitTester;

class SimpleCalculatorTest extends Unit
{
    /**
     * @var UnitTester
     */
    protected $tester;


    public function getArray()
    {
        return [
            [1,2],
            [3,4]
        ];
    }

    /**
     * @dataProvider getArray
     */
    public function testAddition($a, $b)
    {
        $calc = new SimpleCalculator();
        self::assertEquals(3, $calc->add($a, $b));
    }
}
