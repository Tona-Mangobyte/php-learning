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

        // print_r($invoice);
    }

    /** @test */
    public function testArrayColumn() {
        $a = array(
            array(
                'id' => 5698,
                'first_name' => 'Peter',
                'last_name' => 'Griffin',
            ),
            array(
                'id' => 4767,
                'first_name' => 'Ben',
                'last_name' => 'Smith',
            ),
            array(
                'id' => 3809,
                'first_name' => 'Joe',
                'last_name' => 'Doe',
            )
        );

        $last_names = array_column($a, 'last_name');

        $this->assertEquals('Griffin', $last_names[0]);
        $this->assertEquals('Smith', $last_names[1]);
        $this->assertEquals('Doe', $last_names[2]);
    }

    /** @test */
    public function testArrayKeyExists() {
        $cars=array("Volvo"=>"XC90","BMW"=>"X5");

        $hasVolvo = array_key_exists('Volvo', $cars);
        $hasLexus = array_key_exists('Lexus', $cars);
        $this->assertTrue($hasVolvo);
        $this->assertFalse($hasLexus);
    }
}