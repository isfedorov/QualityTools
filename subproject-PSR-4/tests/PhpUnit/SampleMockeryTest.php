<?php

namespace SubProjectPSR4\General\Tests\PhpUnit;

use Mockery;
use SubProjectPSR4\General\SimpleCalculator;

class SampleMockeryTest extends BaseCalculatorTest
{
    /**
     * @dataProvider \SubProjectPSR4\General\Tests\PhpUnit\DataProviders::provideArray
     */
    public function testSumma($array)
    {
        $mock = Mockery::mock(\SubProjectPSR4\General\ArrayProvider::class)->makePartial();
        $mock->allows()->getArray()->andReturn($array);
        $res = (new SimpleCalculator())->sumArrayElements($mock);
        static::assertEquals(15, $res);
    }
}
