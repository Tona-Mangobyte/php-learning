<?php
function increment(): int
{
    static $count = 0;

    return $count++;
}

echo -variables - func . phpincrement() . PHP_EOL; // 0
echo -variables - func . phpincrement() . PHP_EOL; // 1
echo -variables - func . phpincrement() . PHP_EOL; // 2