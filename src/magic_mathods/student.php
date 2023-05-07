<?php

class Student {
    public $name;
    public $address;
    public function __construct($name, $address)
    {
        $this->name = $name;
        $this->address = $address;
    }

    public function info() {
        return "Name: ". $this->name . " and Address: ". $this->address . PHP_EOL;
    }
}

$student = new Student("Tona", "PP");
echo $student->info();
echo $student->{'name'} . PHP_EOL;
$result = (array) $student; // casting to array
echo $result["name"] . PHP_EOL;