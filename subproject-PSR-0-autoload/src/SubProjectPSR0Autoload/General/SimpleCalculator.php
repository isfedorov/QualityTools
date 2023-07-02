<?php

namespace SubProjectPSR0Autoload\General;

class SimpleCalculator
{

    public $prop;

    public function __construct()
    {
        $this->prop = array();
    }

    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public function sub($a, $b)
    {
        return $a - $b;
    }

    public function sumArrayElements(ArrayProvider $arrayProvider) //some long long comment that doesn't fir the lenght of line
    {
        return array_sum($arrayProvider->getArray());
    }
}
