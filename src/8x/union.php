<?php
/*
 * Union Types
 * ***/

function parse_value(string|int|float $value): string | null {

    return strval($value);
}

$result = parse_value(25);
print_r($result);