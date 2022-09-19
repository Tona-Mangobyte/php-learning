<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class ArrKeysTest extends TestCase
{

    /** @test */
    public function basicArrKeys() {
        $invoice = [
            'order' => [
                'productId' => '1',
                'productName' => 'Cocaolca Can',
                'price' => '0.5'
            ]
        ];

        $prodId = $invoice['order']['productId'];
        $prodName = $invoice['order']['productName'];
        $prodPrice = $invoice['order']['price'];


        $this->assertEquals(1, $prodId);
        $this->assertEquals('Cocaolca Can', $prodName);
        $this->assertEquals('0.5', $prodPrice);
    }
}