<?php

namespace Simple;

class Foo
{
    const SOME_CONSTANT = 42;

    public string $hello = 'hello';
    public string $world = 'world';

    public function __construct(string $world = 'world') {
        $this->world = $world;
    }

    public function greet(): void
    {
        echo sprintf('%s %s', $this->hello, $this->world);
    }
}

$foo = new Foo;
$foo->greet();