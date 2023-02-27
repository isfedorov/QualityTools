<?php

namespace QualityTools\Tests\Codeception\tests\acceptance\QualityTools;

use AcceptanceTester;
use Prophecy\Prophet;
use QualityTools\General\SimpleCalculator;
use function PHPUnit\Framework\assertEquals;

class SimpleCalculatorCest
{
    public function _before(AcceptanceTester $I)
    {
        $this->prophet = new Prophet();
    }

    // tests
    public function tryToAdd(AcceptanceTester $I)
    {
        assertEquals(2, (new SimpleCalculator())->add(1, 1));
    }

    // tests
    public function tryToRemove(AcceptanceTester $I)
    {
    }
}
