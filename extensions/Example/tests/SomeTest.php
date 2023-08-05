<?php


use PHPUnit\Framework\TestCase;

class SomeTest extends TestCase
{
    public function testPhpUnitVersionWithConfig()
    {
        assertEquals("9", \PHPUnit\Runner\Version::id());
    }
}
