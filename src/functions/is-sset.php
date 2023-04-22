<?php
$s1 = isset($name); // $s1 is false
echo $s1;
$name = "Fred";
$s2 = isset($name); // $s2 is true
echo $s2;
// unset($name); // $name is NULL
