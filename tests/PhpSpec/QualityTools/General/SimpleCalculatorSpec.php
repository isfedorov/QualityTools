<?php

namespace QualityTools\General;

use PhpSpec\ObjectBehavior;

class SimpleCalculatorSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(SimpleCalculator::class);
    }

    public function it_adds_two_numbers()
    {
        $this->add(1, 2)->shouldReturn(5);
    }
}
