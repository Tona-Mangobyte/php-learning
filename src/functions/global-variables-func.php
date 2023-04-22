<?php
$counter = 0;

function increment_counter(): void
{
    global $counter;

    $counter += 1;
}

increment_counter();

echo $counter . PHP_EOL; // 1


$var = 'global';

function example(): void
{
    $var = 'local';

    echo 'Local variable: ' . $var . PHP_EOL;
    echo 'Global variable: ' . $GLOBALS['var'] . PHP_EOL;
}

example();
// Local variable: local
// Global variable: global
