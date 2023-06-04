<?php
$productOne = array(
    'id' => 3,
    'name' => 'Tiger Can',
    'qty' => 96,
    'price' => 2,
    'amount' => 0,
);
unset($productOne['amount']); // remove key [amount]
print_r($productOne);