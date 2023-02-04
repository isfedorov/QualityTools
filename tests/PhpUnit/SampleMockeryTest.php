<?php

namespace PhpUnit;



use Mockery;
use PHPUnit\Framework\TestCase;
use QualityTools\General\ArrayProvider;
use QualityTools\General\SimpleCalculator;

class SampleMockeryTest extends TestCase
{
    /**
     * @dataProvider \QualityTools\General\Tests\PhpUnit\DataProviders::provideArray
     */
    public function testSumma($array)
    {
        $mock = \Mockery::mock(ArrayProvider::class)->makePartial();
        $mock->allows()->getArray()->andReturn($array);
        $res = (new SimpleCalculator())->sumArrayElements($mock);
        $this->assertEquals(15, $res);
    }
}
