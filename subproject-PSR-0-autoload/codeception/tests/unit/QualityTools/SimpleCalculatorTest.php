<?php

namespace SubProjectPSR0Autoload\Tests\Codeception\Unit;

use Codeception\Test\Unit;

class SimpleCalculatorTest extends Unit
{
    /**
     * @dataProvider \SubProjectPSR0Autoload\Tests\Codeception\Unit\MyDataProvider::getData
     */
    public function testAddition($number)
    {
        self::assertEquals(1, $number);
    }
}

class MyDataProvider
{
    public function getData(): array
    {
        return [0 => [1]];
    }
}
