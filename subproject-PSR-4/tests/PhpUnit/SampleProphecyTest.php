<?php
declare(strict_types=1);

namespace SubProjectPSR4\General\Tests\PhpUnit;

use PHPUnit\Framework\TestCase;
use Prophecy\Prophet;
use SubProjectPSR4\General\SimpleCalculator;

class SampleProphecyTest extends TestCase
{
    private $prophecy;
    private $prophet;

    private const A =1;
    protected function setUp(): void
    {
        $this->prophet = new Prophet();
    }

    /**
     * @dataProvider \SubProjectPSR4\General\Tests\PhpUnit\DProvider::provideArray
     */
    public function testSumma($array)
    {
        $this->prophecy = $this->prophet->prophesize(\SubProjectPSR4\General\ArrayProvider::class);
        $this->prophecy->getArray()->willReturn($array);
        $res = (new SimpleCalculator())->sumArrayElements($this->prophecy->reveal());
        static::assertEquals(15, $res);
    }

    protected function tearDown(): void
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