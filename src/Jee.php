<?php

namespace Blaah;

class Jee
{
    private $foo;
    private $bar;

    public function __construct(string $foo, int $bar)
    {
        $this->foo = $foo;
        $this->bar = $bar;
    }
}
