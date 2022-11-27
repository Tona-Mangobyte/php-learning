<?php

$x;
/*
 * ===Ternary operations===
 * solution 01 => a ? b : c
 * solution 02 => a ?: c
 * **/
$result = $x ?: 'default'; // shorten of Ternary operations
print_r($result . PHP_EOL);

/*
 * Coalescing potentially null values
 * Using a null-coalescing operator (??) as follows will use the first value only if it is set and non-null:
 * **/
$y = null;
$result2 = $y ?? 'default';

print_r($result2 . PHP_EOL);

// compare
$simple = [];
$result3 = $simple['id'] ?? 'default';
$result4 = $simple['id'] ?: 'default'; // Notice: undefined index
print_r($result3 . PHP_EOL);
print_r($result4 . PHP_EOL);

/*
 * Comparing identical values(===)
 * **/
$a = 12;
$b = 12;
if ($a === $b) {
    print_r('the same value' . PHP_EOL);
}
if (0 == 'a') { // it will true if PHP < 8 | The string "a" is cast as an integer, which means it’s cast to 0
    print_r('the same value' . PHP_EOL);
}
if ("1" == "01") { // result true
    print_r('the same value' . PHP_EOL);
}
if (100 == "1e2") { // result true
    print_r('the same value' . PHP_EOL);
}

if (5 == "5") { // result true
    print_r('the same value' . PHP_EOL);
}

if (5 === "5") { // result false
    print_r('the same value' . PHP_EOL);
}