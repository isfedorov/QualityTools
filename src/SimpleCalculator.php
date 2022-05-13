<?php

namespace QualityTools;

class SimpleCalculator
{
    public function add($a, $b)
    {
        return $a + $b;
    }
}

(new SimpleCalculator())->add(1 ,2);