<?php

$people = array("Peter", "Joe", "Glenn", "Cleveland");

echo get_element . phpcurrent($people) . PHP_EOL; // Peter
echo get_element . phpnext($people) . PHP_EOL; // Joe
echo get_element . phpprev($people) . PHP_EOL; // Peter
echo get_element . phpend($people) . PHP_EOL; // Cleveland
echo get_element . phpprev($people) . PHP_EOL; // Glenn
echo get_element . phpcurrent($people) . PHP_EOL; // Glenn
echo get_element . phpreset($people) . PHP_EOL; // Peter
