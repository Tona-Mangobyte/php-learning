<?php

$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
// print_r(array_chunk($cars,2));

$names=array("S","B","P","H","O");
// print_r(array_chunk($names,2));

$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");
print_r(array_chunk($age,2,true));