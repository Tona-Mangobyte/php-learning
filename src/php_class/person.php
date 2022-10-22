<?php

class PaymentMethod {
    public const TYPE_CREDIT_CARD = 0;
    public const TYPE_CASH = 1;
}

class Job {
    public $title;

    public function __construct($title = '')
    {
        $this->title = $title;
    }
}

class Person
{
    static $global = 23;

    public $age;
    private $name;

    public function __construct() {
        $this->age = 0;
        $this->name = '';
    }

    public function incrementAge() {
        $this->age += 1;
        $this->ageChanged();
    }

    protected function decrementAge() {
        $this->age -= 1;
        $this->ageChanged();
    }

    private function ageChanged() {
        echo "Age changed to {$this->age}\n";
    }

    function takeJob(Job $job) {
        echo "Now employed as a {$job->title}\n";
    }

    function bestJob(): Job {
        $job = Job("PHP developer");

        return $job;
    }

    function getName() {
        return $this->name;
    }

    function setName($newName) {
        $this->name = $newName;
    }


    public function __get($property) {
        if ($property === 'name') {
            $name = "long text here..."; // would retrieve from database

            return $name;
        }
    }

    public function __set($property, $value) {
        if ($property === 'name') {
            // set the value in the database
            echo "set the value of name in the database";
        }
    }
}

class SupernaturalPerson extends Person {
    public function incrementAge() {
        // ages in reverse
        $this->decrementAge();
    }
}

$o = new Person;
$a = (array) $o;
// print_r($a);

$person = new Person;
$person->incrementAge();
// $person->decrementAge(); // not allowed
// $person->ageChanged(); // also not allowed

$person = new SupernaturalPerson;
$person->incrementAge(); // calls decrementAge under the hood

$person->setName("Tona");
echo $person->getName(). "\n";

echo Person::$global. "\n";

echo PaymentMethod::TYPE_CREDIT_CARD;