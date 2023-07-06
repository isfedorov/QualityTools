<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testSetAndGetStatus(): void
    {
        $res = $this->foo();
        self::assertNotNull($res);
    }
    function foo() {
        return ['key' => 1];
    }
}
