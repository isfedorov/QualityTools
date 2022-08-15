<?php
declare(strict_types=1);

namespace QualityTools\Classes;

class SimpleCalculator
{
    public array $prop;

    public function __construct()
    {
        $this->prop = array();
    }

    public function add($a, $b)
    {
        return $a + $b;
    }

    public function sub($a, $b)
    {
        return $a - $b;
    }
}
