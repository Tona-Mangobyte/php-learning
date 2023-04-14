<?php
$names = array("Long", "Vuthy", "Dara", "Tona");
$names = ["Long", "Vuthy", "Dara", "Tona"];
$names = array();
$names[0] = "Long";
$names[1] = "Vuthy";
$names[2] = "Dara";
$names[3] = "Tona";
print_r($names);
// create array object use stdClass | empty class in php
$arr = array();
$arr['id'] = "ST-001";
$arr['name'] = "Tona Chheun";
$arr['address'] = "PP";
print_r($arr);

$arr2 = array(
  'id' => "ST-001" ,
  'name' => "Tona Chheun",
  'address' => "PP",
);
print_r($arr2);

$arr3 = [
    'id' => "ST-001" ,
    'name' => "Tona Chheun",
    'address' => "PP",
];
print_r($arr3);
