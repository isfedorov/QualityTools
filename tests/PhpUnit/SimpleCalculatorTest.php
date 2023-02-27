<?php

namespace QualityTools\General\Tests\PhpUnit;

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class SimpleCalculatorTest extends TestCase
{
    #[DataProvider('provideArray')]
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
