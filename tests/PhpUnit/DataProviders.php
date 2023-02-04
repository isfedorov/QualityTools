<?php

namespace QualityTools\General\Tests\PhpUnit;

class DataProviders
{
    public function provideArray()
    {
        return [
            0 => [[1, 2, 3]],
            1 => [[4, 5, 6]]
        ];
    }
}