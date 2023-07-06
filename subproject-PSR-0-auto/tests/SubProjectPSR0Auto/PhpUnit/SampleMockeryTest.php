<?php

namespace SubProjectPSR0Auto\PhpUnit;
require_once 'BaseCalculatorTest.php';
require_once 'DataProviders.php';
require_once __DIR__ . '/../../../src/SubProjectPSR0Auto/General/SimpleCalculator.php';

use Mockery;
use SubProjectPSR0Auto\General\SimpleCalculator;

class SampleMockeryTest extends BaseCalculatorTest
{
    /**
     * @dataProvider \SubProjectPSR0Auto\PhpUnit\DataProviders::provideArray()
     */
    public function testSumma($array)
    {
        $mock = Mockery::mock(\SubProjectPSR0Auto\General\ArrayProvider::class)->makePartial();
        $mock->allows()->getArray()->andReturn($array);
        $res = (new SimpleCalculator())->sumArrayElements($mock);
        static::assertEquals(15, $res);
    }
}
