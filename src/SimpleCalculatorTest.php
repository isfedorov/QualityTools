<?php

namespace QualityTools;

use PHPUnit\Framework\TestCase;

class SimpleCalculatorTest extends TestCase
{
    public function testAdd()
    {
        $calc = new SimpleCalculator();
        self::assertEquals(3, $calc->add(1, 2));
    }
}
