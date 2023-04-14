<?php

require_once 'Person.php';

$presidents = [];

$presidents[] = new Person('George', 'Washington');
$presidents[] = new Person('John', 'Adams');
$presidents[] = new Person('Thomas', 'Jefferson');
// ...
$presidents[] = new Person('Barack', 'Obama');
$presidents[] = new Person('Donald', 'Trump');
$presidents[] = new Person('Joseph', 'Biden');

function presidential_sorter($left, $right)
{
    return [$left->lastName, $left->firstName] <=> [$right->lastName, $right->firstName];
}

usort($presidents, 'presidential_sorter');

print_r($presidents);