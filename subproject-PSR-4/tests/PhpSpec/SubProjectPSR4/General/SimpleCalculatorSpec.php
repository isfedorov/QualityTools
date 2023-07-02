<?php

namespace SubProjectPSR4\General;

use PhpSpec\ObjectBehavior;
use SubProjectPSR4\General\SimpleCalculator;

class SimpleCalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SimpleCalculator::class);
    }

    public function it_adds_two_numbers()
    {
        $this->add(1, 2)->shouldReturn(5);
    }
}
