<?php

use PHPUnit\Runner\Version;

class SimpleCalculatorTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        self::assertEquals("6.5.14", Version::id());
    }
}