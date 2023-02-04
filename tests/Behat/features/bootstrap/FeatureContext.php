<?php

use Behat\Behat\Context\Context;

/**
 * Defines application features from the specific context.
 */
class FeatureContext implements Context
{
    private $firstDigit;
    private $secondDigit;
    private $result;

    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct()
    {
    }

    /**
     * @Given /^I have two numbers (\d+) and (\d+)$/
     */
    public function iHaveTwoNumbersAnd($arg1, $arg2)
    {
        $this->firstDigit = (int)$arg1;
        $this->secondDigit = (int)$arg2;
    }

    /**
     * @When /^I add (\d+) to (\d+)$/
     */
    public function iAddTo($arg1, $arg2)
    {
        $this->result = $this->firstDigit + $this->secondDigit;
    }

    /**
     * @Then /^I receive (\d+)$/
     */
    public function iReceive($arg1)
    {
        if ($this->result !== (int)$arg1) {
            throw new Exception("Wrong result");
        }
    }
}
