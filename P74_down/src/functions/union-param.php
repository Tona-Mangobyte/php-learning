<?php
function add_numbers(int|string $left, int|string $right): int
{
    return $left + $right;
}

$result = add_numbers(2, '3'); // 5
print_r($result);