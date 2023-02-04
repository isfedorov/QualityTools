<?php
declare(strict_types=1);

namespace QualityTools\General\Tests\PhpUnit;

use Prophecy\Prophet;
use QualityTools\General\ArrayProvider;
use QualityTools\General\SimpleCalculator;

class SampleProphecyTest extends BaseCalculatorTest
{
    private $prophecy;
    private $prophet;

    private const A =1;
    public function setUp(): void
    {
        $this->prophet = new Prophet();
    }

    /**
     * @dataProvider \QualityTools\General\Tests\PhpUnit\DataProviders::provideArray
     */
    public function testSumma($array)
    {
        $this->prophecy = $this->prophet->prophesize(ArrayProvider::class);
        $this->prophecy->getArray()->willReturn($array);
        $res = (new SimpleCalculator())->sumArrayElements($this->prophecy->reveal());
        $this->assertEquals(15, $res);
    }

    protected function tearDown(): void
    {
        $this->prophet->checkPredictions();
    }
}
