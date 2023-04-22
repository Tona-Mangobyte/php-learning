<?php

namespace src\php_class;

require "People.php";

class Employee extends People
{
    private $position, $salary;

    function __construct($name, $address, $age, $position, $salary)
    {
        parent::__construct($name, $address, $age);

        $this->position = $position;
        $this->salary = $salary;
        echo "A Employee is being init.\n";
    }

    public function __toString()
    {
        return "description of employee object\n";
    }

    public function __clone()
    {
        echo "A Employee has clone successfully\n";
    }

    public function __destruct()
    {
        echo "A Employee is being destroyed!\n";
    }

    /**
     * @return mixed
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param mixed $position
     */
    public function setPosition($position): void
    {
        $this->position = $position;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary): void
    {
        $this->salary = $salary;
    }

}

$emp = new Employee("Tona", "PP", 32, "Web Developer", "$ 1000");
// copy object or clone object in php
$emp2 = clone $emp;
$emp2->setSalary("$ 1500");
print_r($emp);
print_r($emp2);

// referent object in php
$emp3 = $emp;
$emp3->setSalary("$ 1200");
print_r($emp);
print_r($emp3->__toString());