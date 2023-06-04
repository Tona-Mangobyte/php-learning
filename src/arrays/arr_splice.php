<?php
$celestials = [
    'sun',
    'mercury',
    'venus',
    'earth',
    'mars',
    'asteroid belt',
    'jupiter',
    'saturn',
    'uranus',
    'neptune',
    'pluto',
    'voyagers 1 & 2',
];

array_splice($celestials, 0, 1);
array_splice($celestials, 4, 1);
array_splice($celestials, 8);
print_r($celestials);