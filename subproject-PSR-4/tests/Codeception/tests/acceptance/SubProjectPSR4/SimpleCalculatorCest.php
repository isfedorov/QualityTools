<?php

namespace SubProjectPSR4\Tests\Codeception\Acceptance;

use AcceptanceTester;
use function PHPUnit\Framework\assertEquals;
use Prophecy\Prophet;
use SubProjectPSR4\General\SimpleCalculator;

class SimpleCalculatorCest
{
    public function _before(AcceptanceTester $I)
    {
        $this->prophet = new Prophet();
    }

    // tests
    public function tryToAdd(AcceptanceTester $I)
    {
        $I->seeEqualNumbers(2, (new SimpleCalculator())->add(1, 1));
    }

    // tests
    public function tryToRemove(AcceptanceTester $I)
    {
    }
}
