<?php
$y = 1;

$fn1 = fn($x) => $x + $y;
// equivalent to using $y by value:
$fn2 = function ($x) use ($y) {
    return $x + $y;
};

print_r($fn1(5));
print_r($fn2(5));

$z = 1;
$fn = fn($x) => fn($y) => $x * $y + $z;
// Outputs 51

print_r($fn(5)(10));
