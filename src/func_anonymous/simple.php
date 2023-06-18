<?php

function valuesDefaultIfEmpty($vals) {
    $fields = [
        'status' =>  function(&$vals, $name) {
            $vals[$name] = '01';
        },
    ];

    foreach ($fields as $name => $setter_func) {
        if (!array_key_exists($name, $vals) || empty($vals[$name])) {
            $setter_func($vals, $name);
        }
    }
    return $vals;
}

$data = [
    'status' => null,
];
print_r(valuesDefaultIfEmpty($data));
