<?php

namespace SubProjectPSR0Autoload\General;

use PhpSpec\ObjectBehavior;

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
