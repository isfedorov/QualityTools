<?php
foo(15);

function foo($a, $b)
{
    echo "1"; // place breakpoint here
    if ($a == 42) {
        echo "2";
    }
    if ($b == 15) {
        echo "3";
    }
}
