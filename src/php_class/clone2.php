<?php

namespace src\php_class;
$parent = new class {
    public string $name = 'parent';
    public stdClass $child;

    public function __clone()
    {
        $this->child = clone $this->child;
    }
};
$parent->child = (object)[
    'name' => 'child'
];

$clone = clone $parent;

if ($parent === $clone) {
    echo 'The parent and clone are the same object!' . PHP_EOL;
}

if ($parent == $clone) {
    echo 'The parent and clone have the same data!' . PHP_EOL;
}

if ($parent->child === $clone->child) {
    echo 'The parent and the clone have the same child!' . PHP_EOL;
}

if ($parent->child == $clone->child) {
    echo 'The parent and the clone have the same child data!' . PHP_EOL;
}