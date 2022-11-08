<?php

namespace QualityTools\General\Tests\PhpUnit;

use QualityTools\General\SimpleCalculator;

class SimpleCalculatorTest extends BaseCalculatorTest
{

    public function testAdd()
    {
        $calc = new SimpleCalculator();
        self::assertEquals(3, $calc->add(1, 2));
    }
}
