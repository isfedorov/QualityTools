<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;


class MyClassTest extends TestCase {

    public function testA() {
        self::assertEquals("6.5.14", Version::id());
    }
}
