<?php

class Person
{
    public $name = '';

    function getName()
    {
        return $this->name;
    }
}

// return an anonymous implementation of Person
$anonymous = new class() extends Person {
    public function getName()
    {
        // return static value for testing purposes
        return "Moana";
    }
}; // note: requires closing semicolon, unlike nonanonymous class definitions

print_r($anonymous->getName());
