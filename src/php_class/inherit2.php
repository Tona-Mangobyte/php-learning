<?php

namespace src\php_class;
interface A
{
    public function foo(): int;
}

interface B
{
    public function foo(): int;
}

interface C
{
    public function foo(): string;
}

class First implements \A, \src\php_class\B
{
    public function foo(): int
    {
        return 1;
    }
}

class Second implements A, C
{
    public function foo(): int|string
    {
        return 'nope';
    }
}
