<?php

namespace QualityTools\General\Tests\Codeception\Functional;

use FunctionalTester;
use QualityTools\General\SimpleCalculator;

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

    public function tryToRemove(FunctionalTester $I)
    {
    }
}
