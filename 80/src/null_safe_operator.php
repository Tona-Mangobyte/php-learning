<?php

/*
 * Null-safe Operator
 * ***/

class Student {
    public $first_name = '';

    /**
     * @param string $first_name
     */
    public function setFirstName(string $first_name): void
    {
        $this->first_name = $first_name;
    }

    public function __toString(): string
    {
        return "FirstName: {$this ?->first_name} LastName: {$this ?->last_name}";
    }
}

$student = new \src\php_class\Student();
$student->setFirstName('Simple');
print_r($student->__toString());
