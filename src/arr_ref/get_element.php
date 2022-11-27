<?php

$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo current($people) . PHP_EOL; // Peter
echo next($people) . PHP_EOL; // Joe
echo prev($people) . PHP_EOL; // Peter
echo end($people) . PHP_EOL; // Cleveland
echo prev($people) . PHP_EOL; // Glenn
echo current($people) . PHP_EOL; // Glenn
echo reset($people) . PHP_EOL; // Peter
