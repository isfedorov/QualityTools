<?php

namespace SubProjectPSR0Auto\PhpUnit;

use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

class SimpleTest extends TestCase
{
    public function testPhpUnitVersion()
    {
        self::assertEquals("6.5.14", Version::id());
    }
}