<?php
$child = (object) [
    'name' => 'child',
];
$parent = (object) [
    'name'  => 'parent',
    'child' => $child
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
