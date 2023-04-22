<?php
function increment(): int
{
    static $count = 0;

    return $count++;
}

echo increment() . PHP_EOL; // 0
echo increment() . PHP_EOL; // 1
echo increment() . PHP_EOL; // 2