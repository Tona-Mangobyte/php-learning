<?php
$array = array("really long string here, boy", "this", "middling length", "larger");

usort($array, function($a, $b) {
    return strlen($a) - strlen($b);
});

print_r($array);