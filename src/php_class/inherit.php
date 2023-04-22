<?php

namespace src\php_class;
class A
{
    public function hello(): string
    {
        return 'hello';
    }

    public function greet(string $name): string
    {
        return 'Good morning, ' . $name;
    }
}

class B extends \A
{
    public function world(): string
    {
        return 'world';
    }

    public function greet(string $name): string
    {
        return 'Howdy, ' . $name;
    }
}

$instance = new B();
echo "{$instance->hello()} {$instance->world()}";

$first = new A();
echo $first->greet('Alice');

$second = new B();
echo $second->greet('Bob');