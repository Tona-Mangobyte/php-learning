<?php

$array = ['apple', 'banana', 'coconut'];
array_push($array, 'grape');

print_r($array);

array_splice($array, 1, 2);
print_r($array);