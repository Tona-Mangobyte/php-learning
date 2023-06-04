<?php
$productOne = array(
    'id' => 3,
    'name' => 'Tiger Can',
    'qty' => 96,
    'price' => 2,
    'amount' => 0,
);

$callback = fn(string $k, string $v): string => $k === 'amount' ? 100 : $v;
/*$result = array_map(function ($key, $val) use($productOne) {
    print_r("Key ". $key ." Value ". $val . PHP_EOL);
    if ($key === 'amount') {
        return $productOne['qty'] * $productOne['price'];
    }
    return $val;
}, array_keys($productOne), array_values($productOne));*/

$result = array_map($callback, array_keys($productOne), array_values($productOne));

print_r($result);
