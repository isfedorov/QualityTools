<?php
namespace E;
interface I {
    public function getInstance(): object;
}

class C implements I {

    public function getInstance(): object
    {
        return new self();
    }
}
class D implements I {

    public function getInstance(): object
    {
        return new self();
    }
}
function foo(I $i): D
{
    return $i->getInstance();
}

foo(new D());