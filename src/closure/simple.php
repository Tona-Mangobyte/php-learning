<?php

function basicClosure(Closure $closure) {
    $closure();
}
$function = function() {
    echo 'Hello, World!';
};

basicClosure($function);