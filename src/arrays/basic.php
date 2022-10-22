<?php
// simple create array in php
$person = array("name" => 'Tona');
print "Hello, {$person["name"]}\n";// output: Hello, Tona (with no warning)

define('NAME', 'TONA');
$person = array("name" => 'Tona');
echo "Hello, {$person['name']}\n";
echo "Hello, NAME\n";
echo NAME ;

// Storing Data in Arrays
$addresses = array();
print_r($addresses[0]); // prints nothing | Warning: Undefined array key 0
print_r($addresses); // prints nothing

$addresses[0] = "spam@cyberpromo.net";
print_r($addresses); // prints "Array"

$addresses[0] = "spam@cyberpromo.net";
$addresses[1] = "abuse@example.com";
$addresses[2] = "root@example.com";
print_r($addresses);


$price['gasket'] = 15.29;
$price['wheel'] = 75.25;
$price['tire'] = 50.00;
print_r($price);

$price = array('gasket' => 15.29, 'wheel' => 75.25, 'tire' => 50.00);
print_r($price);

$price = ['gasket' => 15.29, 'wheel' => 75.25, 'tire' => 50.0];
print_r($price);

$days = array(1 => "Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun");
print_r($days);

$whoops = array('Fri' => "Black", "Brown", "Green");
print_r($whoops);

$whoops = array('Fri' => "Black", 0 => "Brown", 1 => "Green");
print_r($whoops);

// add element to array
$family = array("Fred", "Wilma");
$family[] = "Pebbles"; // $family[2] is "Pebbles"
print_r($family);

$person = array('name' => "Fred");
$person[] = "Wilma"; // $person[0] is now "Wilma"
print_r($person);