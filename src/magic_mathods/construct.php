<?php
class User
{
    // execute when creation object with new keyword
    public function __construct()
    {
        echo 'object has created' . PHP_EOL;
    }

    public static function hello($name)
    {
        return 'Hello ' . $name;
    }
}

// new User;
// new User();

echo User::hello("Tona");
