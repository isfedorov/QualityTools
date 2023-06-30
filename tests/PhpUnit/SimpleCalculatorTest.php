<?php

namespace QualityTools\General\Tests\PhpUnit;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use QualityTools\General\SimpleCalculator;

class SimpleCalculatorTest extends TestCase
{
    #[DataProvider('provideArray')]
    public function testArrayDataProvider($element)
    {
        self::assertEquals(1, (new SimpleCalculator())->add($element, 0));
    }

    public static function provideArray(): array
    {
        return [
            '1' => [1],
            2 => [2],
            '3' => [3],
        ];
    }
}
