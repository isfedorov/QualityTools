<?php
namespace QualityTools\Tests\Codeception\tests\acceptance\QualityTools;

use AcceptanceTester;
use Prophecy\Prophet;
use QualityTools\General\ArrayProvider;
use QualityTools\General\SimpleCalculator;

class SimpleCalculatorCest
{
    private $prophet;
    public function _before(AcceptanceTester $I)
    {
        $this->prophet = new Prophet();
    }

    // tests
    public function tryToAdd(AcceptanceTester $I)
    {
        $calc = $this->prophet->prophesize(ArrayProvider::class);
        $calc->readArray()->willReturn([4,5,6]);
        $res = (new SimpleCalculator())->sumOfArrayElements($calc->reveal());
    }

    // tests
    public function tryToRemove(AcceptanceTester $I)
    {
    }
}
