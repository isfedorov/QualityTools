<?php

include "../../vendor/autoload.php";

echo "\033[31m some colored text \033[0m some white text \n";

dd(new Exception());

function dd()
{
    array_map(function ($x) {
        dump($x);
    }, func_get_args());
}
