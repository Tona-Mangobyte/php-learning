<?php

namespace src\operaters;
class Person
{
    public $firstName;
    public $lastName;

    public function __construct($first, $last)
    {
        $this->firstName = $first;
        $this->lastName = $last;
    }
}
