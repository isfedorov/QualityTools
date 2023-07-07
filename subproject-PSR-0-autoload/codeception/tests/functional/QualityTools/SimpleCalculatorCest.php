<?php

namespace SubProjectPSR0Autoload\Tests\Codeception\Functional;

use FunctionalTester;
use SubProjectPSR0Autoload\General\SimpleCalculator;

class SimpleCalculatorCest
{
    public function _before(FunctionalTester $I)
    {
    }

    // tests
    public function tryToAdd(FunctionalTester $I)
    {
        $I->seeEqualNumbers(2, (new SimpleCalculator())->add(1, 1));
    }
}
