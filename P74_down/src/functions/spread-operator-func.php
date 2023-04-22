<?php
function greatest(int ...$numbers): int
{
    $greatest = 0;
    foreach ($numbers as $number) {
        if ($number > $greatest) {
            $greatest = $number;
        }
    }

    return $greatest;
}

$result = greatest(12,3,21,40,90,5);
print_r($result . PHP_EOL);

function greet(string $greeting, string ...$names): void
{
    foreach($names as $name) {
        echo $greeting . ', ' . $name . PHP_EOL;
    }
}

greet('Hello', 'Tony', 'Steve', 'Wanda', 'Peter');

greet('Welcome', 'Alice', 'Bob');