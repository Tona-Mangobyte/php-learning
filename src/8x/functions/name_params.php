<?php

/*
 * Named Parameters
 * ****/

$str_con = str_contains(needle: 'Bar', haystack: 'Bar');
print_r($str_con . PHP_EOL);

$str_con2 = str_starts_with('PHP 8.0', 'PHP');
print_r($str_con2 . PHP_EOL);

$str_con3 = str_ends_with('PHP 8.0', '8.0');
print_r($str_con3 . PHP_EOL);

$php_token = token_get_all('PHP 8.3');
print_r($php_token);
