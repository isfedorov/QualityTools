<?php


use PHPUnit\Framework\TestCase;
use PHPUnit\Runner\Version;

class SimpleTest extends TestCase
{
    public function testPhpUnitVersion()
    {
        self::assertEquals("8.5.33", Version::id());
    }
}