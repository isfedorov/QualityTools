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
        return array(
            '1' => array(1),
            2 => array(2),
            '3' => array(3),
        );
    }
}
