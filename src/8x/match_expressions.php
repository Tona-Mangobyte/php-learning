<?php
/*
 * match expressions
 * ****/

function getLevel(int $level): string {
    return match($level) {
        1 => 'You are level one',
        2 => 'You are level two',
        5 => 'You are level five',
        10 => 'You are level ten',
        default => 'unknown',
    };
}

$result = getLevel(3);
print_r($result);