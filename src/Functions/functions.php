<?php

namespace QualityTools\General\Functions;

use function file_get_contents;

function generateTests()
{
    for ($i = 0; $i < 10; $i++) {
        file_put_contents(
            __DIR__ . "/../tests/PhpUnit/Sample${i}Test.php",
            <<<EOF
<?php
class Sample${i}Test extends TestCase
{
EOF
        );
        for ($j = 0; $j < 5; $j++) {
            file_put_contents(
                __DIR__ . "/../tests/PhpUnit/Sample${i}Test.php",
                file_get_contents(__DIR__ . "/../tests/PhpUnit/Sample${i}Test.php") . "\n" .
                <<<EOF
public function testTrue$j()
    {
        \$calc = new SimpleCalculator();
        self::assertEquals(3, \$calc->add(1, 2));
    }
EOF
            );
        }
        file_put_contents(__DIR__ . "/../tests/PhpUnit/Sample${i}Test.php", file_get_contents(__DIR__ . "/../tests/PhpUnit/Sample${i}Test.php") . "\n" . "}");
    }
}

generateTests();
