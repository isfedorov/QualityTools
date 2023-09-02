<?php

declare(strict_types=1);

namespace SubProjectNoPhpUnit\PhpUnit;

use PHPUnit\Framework\TestCase;
use Prophecy\Prophet;
use QualityTools\General\SimpleCalculator;

require_once 'BaseCalculatorTest.php';
require_once 'DataProviders.php';
require_once __DIR__.'/../../../src/SimpleCalculator.php';
require_once __DIR__.'/../../../src/ArrayProvider.php';

class SampleProphecyTest extends TestCase
{
    private $prophecy;

    private $prophet;

    protected function setUp(): void
    {
        $this->prophet = new Prophet();
    }

    /**
     * @dataProvider \SubProjectNoPhpUnit\PhpUnit\DProvider::provideArray()
     */
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
        return array(
            0 => array(array(1, 2, 3)),
            1 => array(array(4, 5, 6)),
        );
    }
}
