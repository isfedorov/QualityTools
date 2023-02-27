<?php

function foo($a) {
    if (is_array($a)) {
        var_dump($a);
    } elseif (is_int($a) && is_object($a)) {
        var_dump($a);
    }
}
foo(1);
