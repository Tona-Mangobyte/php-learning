<?php

namespace src\php_class;
class Student
{

    public $name = '';

    public function __clone()
    {
        print_r("execute copy object or clone object is successfully");
    }

    function getName()
    {
        return $this->name;
    }

    function setName($newName)
    {
        $this->name = $newName;
    }
}

$student = new Student();
$student1 = new Student;

// $student2 = new "Student"; // does not work
// $student3 = new Student;
// $object = "$student3";
// ${$object}->init(50000, 1.10); // same as $account->init

$student_clone = clone $student1; // make a copy
