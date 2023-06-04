<?php

$products1 = ['Cocacola Can', 'Pepsi Can', 'Tiger Can'];

foreach ($products1 as $pro) {
    print_r($pro . PHP_EOL);
}

$productsList = array(
    0 => array(
        'id' => 1,
        'name' => 'Cocacola Can',
        'qty' => 46,
        'price' => 0.5,
    ),
    1 => array(
        'id' => 2,
        'name' => 'Pepsi Can',
        'qty' => 46,
        'price' => 0.5,
    ),
    2 => array(
        'id' => 3,
        'name' => 'Tiger Can',
        'qty' => 96,
        'price' => 1.5,
    )
);

foreach ($productsList as $key => $product) {
    print_r($product);
}

$productOne = array(
    'id' => 3,
    'name' => 'Tiger Can',
    'qty' => 96,
    'price' => 1.5,
);

foreach ($productOne as $key => $value) {
    print_r("Key: ". $key ." Value: ". $value . PHP_EOL);
}