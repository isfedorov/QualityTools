<?php

use SubProjectPSR0Auto\General\SimpleCalculator;

class SimpleCalculatorCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function tryToAdd(AcceptanceTester $I)
    {
        $I->seeEqualNumbers(2, (new SimpleCalculator())->add(1, 1));
    }

}
