<?php
function greet(string $greeting, string $name): void
{
    echo $greeting . ', ' . $name  . PHP_EOL;
}

$params = ['Hello', 'world'];
greet(...$params); // Hello, world

function describe(float ...$values): array
{
    $min = min($values);
    $max = max($values);
    $mean = array_sum($values) / count($values);

    $variance = 0.0;
    foreach($values as $val) {
        $variance += pow(($val - $mean), 2);
    }
    $std_dev = (float) sqrt($variance/count($values));

    return [$min, $max, $mean, $std_dev];
}

$values = [1.0, 9.2, 7.3, 12.0];
list($min, $max, $mean, $std) = describe(...$values);
print_r($min . PHP_EOL);
print_r($max . PHP_EOL);
print_r($mean . PHP_EOL);
print_r($std . PHP_EOL);
