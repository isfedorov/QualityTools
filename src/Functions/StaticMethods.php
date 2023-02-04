<?php

namespace QualityTools\General\Functions;

use Exception;
use function array_map;
use function dump;
use function func_get_args;

class StaticMethods
{
    public static function test()
    {
        echo "\033[31m some colored text \033[0m some white text \n";

        self::dd(new Exception());
    }

    public static function dd()
    {
        array_map(function ($x) {
            dump($x);
        }, func_get_args());
    }
}

StaticMethods::test();
