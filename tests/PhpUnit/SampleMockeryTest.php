<?php

namespace QualityTools\General\Tests\PhpUnit;

use Mockery;
use PHPUnit\Framework\Attributes\DataProviderExternal;
use QualityTools\General\SimpleCalculator;

class SampleMockeryTest extends BaseCalculatorTest
{
    #[DataProviderExternal('QualityTools\General\Tests\PhpUnit\DataProviders', 'provideArray')]
    public function testSumma($array)
    {
        $mock = Mockery::mock(\QualityTools\General\ArrayProvider::class)->makePartial();
        $mock->allows()->getArray()->andReturn($array);
        $res = (new SimpleCalculator())->sumArrayElements($mock);
        static::assertEquals(15, $res);
    }
}
