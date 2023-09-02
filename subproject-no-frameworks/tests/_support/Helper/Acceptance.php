<?php

namespace Helper;

use Codeception\Module;

class Acceptance extends Module
{
    public function seeEqualNumbers($a, $b)
    {
        $this->assertEquals($a, $b);
    }
}
