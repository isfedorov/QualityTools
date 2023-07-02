<?php

namespace SubProjectPSR4\General\Tests\PhpUnit;

use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

class SimpleTest extends TestCase
{
    public function testPhpUnitVersion()
    {
        self::assertEquals("9.6.9", Version::id());
    }
}