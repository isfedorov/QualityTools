<?php

namespace SubProjectPSR4\General\Tests\PhpUnit;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use QualityTools\General\SimpleCalculator;
use function chr;

class SimpleCalculatorTest extends TestCase
{

    #[DataProvider('provideArray')]
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
