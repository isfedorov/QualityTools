<?php
declare(strict_types=1);

namespace QualityTools;

class SimpleCalculator
{
    public $prop = array();

    public function add($a, $b)
    {
        return $a + $b;
    }

    public function sub($a, $b)
    {
        return $a - $b;
    }
}
