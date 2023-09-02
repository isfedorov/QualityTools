<?php

namespace SubProjectNoPhpUnit\PhpUnit;

class DataProviders
{
    public static function provideArray()
    {
        return array(
            0 => array(array(1, 2, 3)),
            1 => array(array(4, 5, 6)),
        );
    }
}
