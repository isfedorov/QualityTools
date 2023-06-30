<?php

/**
 * @template T
 */
class ClassA
{
    /**
     * @param T $owner
     */
    public function __construct(
        protected mixed $owner,
    )
    {
    }

    /**
     * @return T
     */
    public function methodOfClassA(): mixed
    {
        return $this->owner;
    }
}

/** @mixin ClassA<ClassB> */
class ClassB
{
    /**
     * @param array{int, mixed} $arguments
     */
    public function __call(string $name, array $arguments): self
    {
        (new ClassA($this))->$name(...$arguments);

        return $this;
    }

    public function methodOfClassB(): self
    {
        return $this;
    }
}

(new ClassB())->methodOfClassA()->methodOfClassB();
