<?php

for ($i = 1; $i <= 100; $i++) {
    $newFile = "tests/PhpUnit/Generated/Sample{$i}Test.php";
    if (!file_exists('tests/PhpUnit/Generated')) {
        mkdir('tests/PhpUnit/Generated');
    }
    if (!file_exists($newFile)) {
        file_put_contents(
            $newFile,
            <<<EOF
<?php
namespace QualityTools\General\Tests\PhpUnit\Generated;
use QualityTools\General\SimpleCalculator;
use PHPUnit\Framework\TestCase;

class Sample{$i}Test extends TestCase
{
    private array \$prop;
    
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
EOF
        );
    }
}
