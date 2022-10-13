<?php
class Person
{
    var $name = "Fred";
    var $age = 35;
}

$o = new Person;
$a = (array) $o;

print_r($a);