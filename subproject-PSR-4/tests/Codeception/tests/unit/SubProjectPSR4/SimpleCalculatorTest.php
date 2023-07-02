<?php

namespace SubProjectPSR4\Tests\Codeception\tests\unit\SubProjectPSR4;

use Codeception\Test\Unit;

class SimpleCalculatorTest extends Unit
{
    /**
     * @dataProvider \SubProjectPSR4\Tests\Codeception\tests\unit\SubProjectPSR4\MyDataProvider::getData
     */
    public function testAddition($number)
    {
        self::assertEquals(1, $number);
    }

    public function testExample(): void
    {
        // previous must be set
        throw new \LogicException(previous: new \Exception());
    }
}

class MyDataProvider
{
    public function getData(): array
    {
        return [0 => [1]];
    }
}
