<?php

namespace QualityTools\Tests\Codeception\tests\unit\QualityTools;

use Codeception\Test\Unit;

class SimpleCalculatorTest extends Unit
{
    /**
     * @dataProvider \QualityTools\Tests\Codeception\tests\unit\QualityTools\MyDataProvider::getData
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
