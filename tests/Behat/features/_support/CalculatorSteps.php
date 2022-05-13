<?php

use _generated\AcceptanceTesterActions;
use Codeception\Actor;

class CalculatorSteps extends Actor
{
    use AcceptanceTesterActions;

    /**
     * @Given /^I have two numbers (\d+) and (\d+)$/
     */
    public function iHaveTwoNumbersAnd($arg1, $arg2)
    {
        throw new IncompleteTestError();
    }

    /**
     * @When /^I add (\d+) to (\d+)$/
     */
    public function iAddTo($arg1, $arg2)
    {
        throw new IncompleteTestError();
    }

    /**
     * @Then /^I receive (\d+)$/
     */
    public function iReceive($arg1)
    {
        throw new IncompleteTestError();
    }
}