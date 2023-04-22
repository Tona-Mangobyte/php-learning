<?php
function say_hello(?string $message): void
{
    echo 'Hello, ';

    if ($message === null) {
        echo 'world!'. PHP_EOL;
    } else {
        echo $message . '!' . PHP_EOL;
    }
}

say_hello('Reader'); // Hello, Reader!
say_hello(null); // Hello, world!
