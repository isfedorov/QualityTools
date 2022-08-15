<?php

namespace QualityTools;

use PhpSpec\ObjectBehavior;
use QualityTools\General\SimpleCalculator;

class SimpleCalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(SimpleCalculator::class);
    }

    function it_adds_two_numbers() {
        $this->add(1, 2)->shouldReturn(3);
    }
}
