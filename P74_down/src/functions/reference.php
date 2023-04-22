<?php
$names = array("Fred", "Barney", "Wilma", "Betty");

function &findOne($n) {
    global $names;

    return $names[$n];
}

$person =& findOne(1); // Barney
var_dump($person);

$person = "Barnetta"; // changes $names[1]
var_dump($person);

var_dump($names);