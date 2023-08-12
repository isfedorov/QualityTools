<?php

namespace SubProjectNoPhpUnit\PhpUnit;

use PHPUnit\Framework\TestCase;

class SimpleCalculatorTest extends TestCase
{
    /**
     * @dataProvider provideArray
     */
    public function testArrayDataProvider($input)
    {
        self::assertEquals(1, $input);
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
