<?php

namespace SubProjectConfig\PhpUnit;
require_once 'BaseCalculatorTest.php';
require_once 'DataProviders.php';
require_once __DIR__ . '/../../../src/SubProjectConfig/General/SimpleCalculator.php';

use Mockery;
use SubProjectPSR0Auto\General\SimpleCalculator;

class SampleMockeryTest extends BaseCalculatorTest
{
    /**
     * @dataProvider \SubProjectConfig\PhpUnit\DataProviders::provideArray()
     */
    public function testSumma($array)
    {
        $mock = Mockery::mock(\SubProjectConfig\General\ArrayProvider::class)->makePartial();
        $mock->allows()->getArray()->andReturn($array);
        $res = (new SimpleCalculator())->sumArrayElements($mock);
        static::assertEquals(15, $res);
    }
}
