<?php


use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testPhpUnitVersion()
    {
        self::assertEquals("9", \PHPUnit\Runner\Version::id());
    }
}
