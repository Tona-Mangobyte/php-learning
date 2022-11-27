<?php

require_once 'const.php';

$x;
$red = '#f00';
$color = 'red';

print_r($x); // Warning: Undefined variable $x
print_r(isset($x) . PHP_EOL); // false
print_r(empty($x) . PHP_EOL); // true

print_r(MY_CONSTANT . PHP_EOL);

echo $$color . PHP_EOL;
print_r($$color . PHP_EOL);
print_r($red . PHP_EOL);
