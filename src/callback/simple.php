<?php

function basicCallback(Callable $callback) {
    $callback();
}

$function = function() {
    hello();
};
function hello() {
    echo 'Hello, World!' . PHP_EOL;
}

basicCallback($function); // Hello, World!
basicCallback("hello"); // Hello, World!