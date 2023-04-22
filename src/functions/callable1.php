<?php

namespace src\functions;
class Entertainment
{
}

class Clown extends Entertainment
{
}

class Job
{
}

function handleEntertainment(Entertainment $a, callable $callback = NULL): void
{
    echo "Handling " . get_class($a) . " fun<br/>";

    if ($callback !== NULL) {
        $callback();
    }
}

// Anonymous functions
$callback = function () {
    // do something
    echo "Execute callback function";
};

handleEntertainment(new Clown); // works
// handleEntertainment(new Job, $callback); // runtime error
handleEntertainment(new Clown, $callback); // works