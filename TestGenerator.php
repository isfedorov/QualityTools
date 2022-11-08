<?php
for($i=1;$i<=500;$i++) {
    $newFile = "tests/PhpUnit/Generated/Sample{$i}Test.php";
    if (!file_exists($newFile)) {
        file_put_contents($newFile, <<<EOF
<?php
namespace QualityTools\General\Tests\PhpUnit\Generated;

use PHPUnit\Framework\TestCase;
use QualityTools\General\SimpleCalculator;

class Sample{$i}Test extends TestCase
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
EOF
);
    }
}