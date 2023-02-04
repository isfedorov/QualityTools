<?php

namespace QualityTools\General\Tests\PhpUnit;

use PHPUnit\Framework\TestCase;

class SimpleCalculatorTest extends TestCase
{
    /**
     * @dataProvider provideArray()
     */
    public function testArrayDataProvider($input)
    {
        self::assertEquals(1, $input);
    }

    public function provideArray()
    {
        return array(
            '1' => array(1),
            2 => [2],
            '3' => array(3)
        );
    }
}
