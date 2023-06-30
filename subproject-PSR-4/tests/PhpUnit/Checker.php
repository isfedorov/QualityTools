<?php
namespace SubProjectPSR4\General\Tests\PhpUnit;
use PHPUnit\Framework\Attributes\Group;
use PHPUnit\Framework\Attributes\TestWith;
use PHPUnit\Framework\TestCase;

class Checker extends TestCase {

    #[\PHPUnit\Framework\Attributes\Test]
    public function checkChanges()
    {
        self::assertEquals(3, $GLOBALS['constantGlobal']);
    }

    #[TestWith([["day" => "monday", "conditions" => "sunny"], ["day", "conditions"]])]
    #[Group("Second")]
    #[TestWith([["month" => "jan", "weather" => "cold"], ["month", "cold"]])]
    public function testSome(array $array, array $keys)
    {
        $this->assertSame($keys, array_keys($array));
    }

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
