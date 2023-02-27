<?php

namespace QualityTools\General\Tests\PhpUnit;

use Exception;
use PHPUnit\Framework\TestCase;
use function error_clear_last;
use function set_error_handler;
use const E_ALL;
use const E_DEPRECATED;
use const E_ERROR;
use const E_NOTICE;
use const E_STRICT;
use const E_WARNING;

set_error_handler(/**
 * @throws Exception
 */ static function ($code, $str, $file, $line) {
    error_clear_last();
    throw new \RuntimeException(match ($code) {
            E_WARNING => 'Warning',
            E_NOTICE => 'Notice',
            E_DEPRECATED => 'Deprecated',
            E_ERROR => 'Error',
            default => 'Something'
        } . ': ' . $str, $code);
}, E_ALL & ~E_STRICT & ~E_DEPRECATED);

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