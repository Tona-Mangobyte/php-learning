<?php

class User
{
    public function __construct()
    {
        echo 'object has created' . PHP_EOL;
    }
    public function __destruct()
    {
        echo 'object has destroy' . PHP_EOL;
    }
}

// new User(); // creation object and destroy
$user = new User();
unset($user); // destroy object User