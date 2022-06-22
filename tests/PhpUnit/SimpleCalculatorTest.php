<?php

namespace QualityTools\Tests\PhpUnit;

use QualityTools\SimpleCalculator;
use PHPUnit\Framework\TestCase;

class SimpleCalculatorTest extends BaseCalculatorTest
{

    public function testAdd()
    {
        $calc = new SimpleCalculator();
        self::assertEquals(3, $calc->add(1, 2));
    }
}
