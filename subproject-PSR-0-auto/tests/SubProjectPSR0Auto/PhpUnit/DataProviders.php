<?php

namespace SubProjectPSR0Auto\PhpUnit;

class DataProviders
{
    public static function provideArray()
    {
        return [
            0 => [[1, 2, 3]],
            1 => [[4, 5, 6]]
        ];
    }
}