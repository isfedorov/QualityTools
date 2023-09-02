<?php

$newFile = 'src/Traversable/Nested/Nested0Traversable.php';
if (! file_exists($newFile)) {
    file_put_contents(
        $newFile,
        <<<EOF
<?php

namespace QualityTools\General\Traversable\Nested;
use QualityTools\General\SimpleCalculator;

/**
 * @template TKey
 * @template-covariant TValue
 * @template-implements \IteratorAggregate<TKey, TValue>
 */
class Nested0Traversable implements \IteratorAggregate
{
    /**
    * @param \Traversable<TKey, TValue> \$traversable
    */
    public function __contruct(\Traversable \$traversable) {
    
    }
    
    /**
    * @return \Traversable<TKey, TValue>
    */
    public function getIterator(): \Traversable
    {
        return new \ArrayIterator([new SimpleCalculator(), new SimpleCalculator()]);
    }
}
EOF
    );
}
for ($i = 1; $i <= 100; $i++) {
    $newFile = "src/Traversable/Direct/Direct{$i}Traversable.php";
    if (! file_exists($newFile)) {
        file_put_contents(
            $newFile,
            <<<EOF
<?php

namespace QualityTools\General\Traversable\Direct;
use QualityTools\General\SimpleCalculator;

/**
 * @template TKey
 * @template-covariant TValue
 * @template-implements \IteratorAggregate<TKey, TValue>
 */
class Direct{$i}Traversable implements \IteratorAggregate
{
    /**
    * @return \Traversable<TKey, TValue>
    */
    public function getIterator()
    {
        return new \ArrayIterator([new SimpleCalculator(), new SimpleCalculator()]);
    }
}
EOF
        );
    }
    $newFile = "src/Traversable/Level{$i}Traversable.php";
    if (! file_exists($newFile)) {
        file_put_contents(
            $newFile,
            <<<EOF
<?php

namespace QualityTools\General\Traversable;

/**
 * @template TKey
 * @template-covariant TValue
 * @template-extends ParentTraversable<TKey, TValue>
 */
class Level{$i}Traversable extends ParentTraversable
{
    /**
    * @param \Traversable<TKey, TValue> \$traversable
    */
    public function __contruct(\Traversable \$traversable) {
    
    }
}
EOF
        );
    }

    $j = $i - 1;
    $newFile = "src/Traversable/Nested/Nested{$i}Traversable.php";
    if (! file_exists($newFile)) {
        file_put_contents(
            $newFile,
            <<<EOF
<?php

namespace QualityTools\General\Traversable\Nested;
use QualityTools\General\SimpleCalculator;

/**
 * @template TKey
 * @template-covariant TValue
 * @template-extends Nested{$j}Traversable<TKey, TValue>
 */
class Nested{$i}Traversable extends Nested{$j}Traversable
{
    /**
    * @param \Traversable<TKey, TValue> \$traversable
    */
    public function __contruct(\Traversable \$traversable) {
    
    }

    public function getIterator(): Traversable
    {
        return new \ArrayIterator([new SimpleCalculator(), new SimpleCalculator()]);
    }
}
EOF
        );
    }
}
