<?php

use PHPUnit\Framework\TestCase;

class SecondCalculatorTest extends TestCase
{
    public function testAdd()
    {
        self::assertEquals(3, 4);
    }

    public function testAdd2()
    {
        self::assertEquals(4, 5);

    }

    public function testAdd3()
    {
        self::assertEquals(5, 5);

    }
}