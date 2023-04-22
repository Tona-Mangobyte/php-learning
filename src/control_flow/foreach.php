<?php
$products = [
    'id' => 16,
    'name' => "Cocacola Can",
    'qty' => 24,
    'cost' => 0.5
];
var_dump($products);
foreach ($products as $key => $value) {
    echo "$key => $value <br/>";
}

print_r(rand(0, 50));