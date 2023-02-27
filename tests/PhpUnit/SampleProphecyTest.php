<?php
declare(strict_types=1);

namespace QualityTools\General\Tests\PhpUnit;

use PHPUnit\Framework\Attributes\DataProviderExternal;
use PHPUnit\Framework\TestCase;
use Prophecy\Prophet;
use QualityTools\General\SimpleCalculator;

class SampleProphecyTest extends TestCase
{
    private $prophecy;
    private $prophet;

    private const A =1;
    protected function setUp(): void
    {
        $this->prophet = new Prophet();
    }

    #[DataProviderExternal(DProvider::class, 'provideArray')]
    public function testSumma($array)
    {
        $this->prophecy = $this->prophet->prophesize(\QualityTools\General\ArrayProvider::class);
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