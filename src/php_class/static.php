<?php

namespace src\php_class;
class Foo
{
    private int $counter = 0;

    public function increment(): void
    {
        $this->counter += 1;
    }

    public function getCount(): int
    {
        return $this->counter;
    }
}

$instance = new Foo;
$instance->increment();
$instance->increment();

echo $instance->getCount() . PHP_EOL;

// $instance->counter = 0;

$reflectionClass = new ReflectionClass('Foo');
$reflectionClass->getProperty('counter')->setValue($instance, 0);

echo $instance->getCount() . PHP_EOL;
