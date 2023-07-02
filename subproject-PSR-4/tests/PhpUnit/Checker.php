<?php
namespace SubProjectPSR4\General\Tests\PhpUnit;
use PHPUnit\Framework\TestCase;

class Checker extends TestCase {

    /**
     * @testWith
     *  [{"day": "monday", "conditions": "sunny"}, ["day", "conditions"]]
     *  [{"month": "jan", "weather": "cold"}, ["month", "cold"]]
     *
     */
    public function testArrayKeys(array $array, array $keys): void
    {
        $this->assertSame($keys, array_keys($array));
    }
}
