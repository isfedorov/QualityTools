<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;


class MyClassTest extends TestCase {

    public function testPhpUnitVersion() {
        self::assertEquals("6.5.14", Version::id());
    }
}
