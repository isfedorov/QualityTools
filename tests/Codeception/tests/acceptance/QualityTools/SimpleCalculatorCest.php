<?php

namespace QualityTools\General\Tests\Codeception\Acceptance;

use AcceptanceTester;
use Prophecy\Prophet;
use QualityTools\General\SimpleCalculator;

class SimpleCalculatorCest
{
    public function _before(AcceptanceTester $I)
    {
        $this->prophet = new Prophet();
    }

    // tests
    public function tryToAdd(AcceptanceTester $I)
    {
        $I->seeEqualNumbers(3, (new SimpleCalculator())->add(1, 1));
    }

    // tests
    public function tryToRemove(AcceptanceTester $I)
    {
    }
}
