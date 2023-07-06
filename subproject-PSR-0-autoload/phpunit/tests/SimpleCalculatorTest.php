<?php

use PHPUnit\Framework\TestCase;
use SubProjectPSR0Autoload\General\SimpleCalculator;

class SimpleCalculatorTest extends TestCase
{

    /**
     * @dataProvider provideArray
     */
    public function testArrayDataProvider($array)
    {
        self::assertEquals(1, (new SimpleCalculator())->add($array, 0));
    }

    public static function provideArray(): array
    {
        return [
            '1' => [1],
            2 => [2],
            '3' => [3]
        ];
    }
}
