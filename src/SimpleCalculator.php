<?php

namespace QualityTools\General;


use ArrayAccess;
use function array_sum;

class SimpleCalculator
{

    public array $prop;

    public function __construct()
    {
        $this->prop = array();
    }

    /**
     * @param int $a desc
     * @param int $b
     * @return int
     */
    public function add(int $a, int $b): int
    {
        return $a + $b;
    }

    public function sub($a, $b)
    {
        return $a - $b;
    }

    public function sumArrayElements(ArrayProvider $arrayProvider)
    {
        return array_sum($arrayProvider->getArray());
    }
}