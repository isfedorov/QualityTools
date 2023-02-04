<?php

namespace QualityTools\General\Tests\PhpUnit;

use QualityTools\General\SimpleCalculator;

class SecondCalculatorTest extends BaseCalculatorTest
{
    public function testAdd()
    {
        $calc = new SimpleCalculator();
        self::assertEquals(4, $calc->add(5, -1));
    }

}