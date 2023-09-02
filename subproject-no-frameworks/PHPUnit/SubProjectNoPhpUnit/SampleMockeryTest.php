<?php

namespace SubProjectNoPhpUnit\PhpUnit;

use Mockery;
use QualityTools\General\ArrayProvider;
use QualityTools\General\SimpleCalculator;

require_once 'BaseCalculatorTest.php';
require_once 'DataProviders.php';
require_once __DIR__.'/../../../src/SimpleCalculator.php';
require_once __DIR__.'/../../../src/ArrayProvider.php';


class SampleMockeryTest extends BaseCalculatorTest
{
    /**
     * @dataProvider \SubProjectNoPhpUnit\PhpUnit\DataProviders::provideArray()
     */
    public function testSumma($array)
    {
        $mock = Mockery::mock(ArrayProvider::class)->makePartial();
        $mock->allows()->getArray()->andReturn($array);
        $res = (new SimpleCalculator())->sumArrayElements($mock);
        static::assertEquals(15, $res);
    }
}
