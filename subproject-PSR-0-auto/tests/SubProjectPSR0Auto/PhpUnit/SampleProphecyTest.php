<?php
declare(strict_types=1);

namespace SubProjectPSR0Auto\PhpUnit;

use PHPUnit\Framework\TestCase;
use Prophecy\Prophet;
use QualityTools\General\SimpleCalculator;

class SampleProphecyTest extends TestCase
{
    private $prophecy;
    private $prophet;

    protected function setUp()
    {
        $this->prophet = new Prophet();
    }

    /**
     * @dataProvider \SubProjectPSR0Auto\PhpUnit\DProvider::provideArray()
     */
    public function testSumma($array)
    {
        $this->prophecy = $this->prophet->prophesize(\QualityTools\General\ArrayProvider::class);
        $this->prophecy->getArray()->willReturn($array);
        $res = (new SimpleCalculator())->sumArrayElements($this->prophecy->reveal());
        static::assertEquals(15, $res);
    }

    protected function tearDown()
    {
        $this->prophet->checkPredictions();
    }
}

class DProvider
{
    public static function provideArray()
    {
        return [
            0 => [[1, 2, 3]],
            1 => [[4, 5, 6]]
        ];
    }
}