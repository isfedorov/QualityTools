<?php
declare(strict_types=1);

namespace PhpUnit;

class My {
    public function toTest() {
        return 1;
    }
}

use PHPUnit\Framework\TestCase;

class MyTest extends TestCase {
    public function testMe() {
        $my = new My(); // From a breakpoint here, Step Over takes us to TestCase.php:1600
        $this->assertEquals($my->toTest(), 1);
    }
}