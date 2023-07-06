<?php

use SubProjectPSR0Autoload\General\SimpleCalculator;

class SampleMockeryTest extends BaseCalculatorTest
{
    /**
     * @dataProvider \DataProviders::provideArray
     */
    public function testSumma($array)
    {
        $mock = Mockery::mock(\SubProjectPSR0Autoload\General\ArrayProvider::class)->makePartial();
        $mock->allows()->getArray()->andReturn($array);
        $res = (new SimpleCalculator())->sumArrayElements($mock);
        static::assertEquals(15, $res);
    }
}
