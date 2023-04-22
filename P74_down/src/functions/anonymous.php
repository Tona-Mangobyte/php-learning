<?php
$array = array("really long string here, boy", "this", "middling length", "larger");

usort($array, function($a, $b) {
    return strlen($a) - strlen($b);
});

print_r($array);

echo "<br/>";

$array2 = array("really long string here, boy", "this", "middling length",
    "larger");
$sortOption = 'random';

usort($array2, function($a, $b) use ($sortOption)
{
    if ($sortOption == 'random') {
        // sort randomly by returning (-1, 0, 1) at random
        return rand(0, 2) - 1;
    }
    else {
        return strlen($a) - strlen($b);
    }
});

print_r($array2);

echo "<br/>";

$array3 = array("really long string here, boy", "this", "middling length",
    "larger");
$sortOption3 = "random";

function sortNonrandom($array)
{
    $sortOption3 = false;

    usort($array, function($a, $b) use ($sortOption3)
    {
        if ($sortOption3 == "random") {
            // sort randomly by returning (-1, 0, 1) at random
            return rand(0, 2) - 1;
        }
        else {
            return strlen($a) - strlen($b);
        }
    });

    print_r($array);
}

print_r(sortNonrandom($array3));