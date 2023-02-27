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
}

class MyDataProvider {
    public function getData(): array
    {
        return [0 => [1]];
    }
}
