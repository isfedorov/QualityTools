<?php

use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

class MyClassTest extends TestCase
{
    public function testPhpUnitVersion()
    {
        self::assertEquals("8.5.33", Version::id());
    }
}
