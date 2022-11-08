<?php
namespace QualityTools\General\Tests\PhpUnit\Generated;

use PHPUnit\Framework\TestCase;
use QualityTools\General\SimpleCalculator;

class Sample483Test extends TestCase
{
    public function testArrayDataProvider1()
    {
        self::assertEquals(2, (new SimpleCalculator())->add(1, 1));
    }
    
    public function testArrayDataProvider2()
    {
        self::assertEquals(3, (new SimpleCalculator())->add(1, 1));
    }
    
    public function testArrayDataProvider3()
    {
        self::assertEquals(2, (new SimpleCalculator())->add(1, 1));
    }
}