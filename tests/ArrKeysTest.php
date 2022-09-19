<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class ArrKeysTest extends TestCase
{

    /** @test */
    public function basicArrKeys() {
        $invoice = [
            'order001' => [
                'productId' => '1',
                'productName' => 'Cocaolca Can',
                'price' => '0.5',
                'category' => [
                    'name' => 'Drink'
                ]
            ],
            'order002' => [
                'productId' => '2',
                'productName' => 'Pepsi Can',
                'price' => '0.5',
                'category' => [
                    'name' => 'Drink'
                ]
            ]
        ];

        $prodId = $invoice['order001']['productId'];
        $prodName = $invoice['order001']['productName'];
        $prodPrice = $invoice['order001']['price'];
        $catName = $invoice['order001']['category']['name'];


        $this->assertEquals(1, $prodId);
        $this->assertEquals('Cocaolca Can', $prodName);
        $this->assertEquals('0.5', $prodPrice);
        $this->assertEquals('Drink', $catName);

        $productValues = array_values($invoice['order001']);

        $this->assertEquals(1, $productValues[0]);
        $this->assertEquals('Cocaolca Can', $productValues[1]);
        $this->assertEquals('0.5', $productValues[2]);

        print_r($invoice);
    }
}