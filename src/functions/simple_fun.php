<?php
function returnOne()
{
    return 42;
}
function returnTwo()
{
    return array("Fred", 35);
}
function someMath($var1, $var2): int
{
    return $var1 * $var2;
}

var_dump(returnOne());
var_dump(returnTwo());
var_dump(someMath(10, 5));

var_dump(function_exists("returnOne"));
var_dump(function_exists("simpleFun"));