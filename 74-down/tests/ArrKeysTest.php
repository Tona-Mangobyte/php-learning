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

    /** @test */
    public function testArrayKeys() {
        $cars=array("Volvo"=>"XC90","BMW"=>"X5");

        $keys = array_keys($cars);
        $this->assertEquals('Volvo', $keys[0]);
        $this->assertEquals('BMW', $keys[1]);
    }

    /** @test */
    public function testArrayProduct() {
        $a=array(5,5,2,10);
        $result = array_product($a);
        $this->assertEquals(500, $result);
    }

    /** @test */
    public function testArraySum() {
        $a=array(5,15,25);
        $a2=array("a"=>52.2,"b"=>13.7,"c"=>0.9);

        $result = array_sum($a);
        $result2 = array_sum($a2);

        $this->assertEquals(45, $result);
        $this->assertEquals(66.8, round($result2, 2));
    }

    /** @test */
    public function testArrayCountValues() {
        $a=array("A","Cat","Dog","A","Dog");
        $result = array_count_values($a);

        $this->assertEquals(2, $result["A"]);
        $this->assertEquals(1, $result["Cat"]);
        $this->assertEquals(2, $result["Dog"]);
    }

    /** @test */
    public function testArrayCombine() {
        $fname=array("Peter","Ben","Joe");
        $age=array("35","37","43");
        $result = array_combine($fname,$age);

        $this->assertEquals(35, $result["Peter"]);
        $this->assertEquals(37, $result["Ben"]);
        $this->assertEquals(43, $result["Joe"]);
    }

    /** @test */
    public function testArrayChunk() {
        $cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
        $result = array_chunk($cars, 2);

        $this->assertEquals('Volvo', $result[0][0]);
        $this->assertEquals('BMW', $result[0][1]);

        $this->assertEquals('Toyota', $result[1][0]);
        $this->assertEquals('Honda', $result[1][1]);

        $this->assertEquals('Mercedes', $result[2][0]);
        $this->assertEquals('Opel', $result[2][1]);

        $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43","Harry"=>"50");
        $resultAge = array_chunk($age,2,true);

        $this->assertEquals(35, $resultAge[0]["Peter"]);
        $this->assertEquals(37, $resultAge[0]["Ben"]);

        $this->assertEquals(43, $resultAge[1]["Joe"]);
        $this->assertEquals(50, $resultAge[1]["Harry"]);
    }

    /** @test */
    public function testArrayDiff() {
        $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        $a2=array("e"=>"red","f"=>"green","g"=>"blue");
        $a3=array("e"=>"red","f"=>"black","g"=>"purple");
        $a4=array("a"=>"red","b"=>"black","h"=>"yellow");

        $result = array_diff($a1, $a2);
        $result2 = array_diff($a1, $a3, $a4);

        $this->assertEquals("yellow", $result["d"]);

        $this->assertEquals("green", $result2["b"]);
        $this->assertEquals("blue", $result2["c"]);
    }

    /** @test */
    public function testArrayDiffAssoc() {
        $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        $a2=array("e"=>"red","f"=>"green","g"=>"blue");

        $result = array_diff_assoc($a1, $a2);

        $this->assertEquals("red", $result["a"]);
        $this->assertEquals("green", $result["b"]);
        $this->assertEquals("blue", $result["c"]);
        $this->assertEquals("yellow", $result["d"]);


        $a3=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
        $a4=array("a"=>"red","f"=>"green","g"=>"blue");
        $a5=array("h"=>"red","b"=>"green","g"=>"blue");

        $result2 = array_diff_assoc($a3, $a4, $a5);

        $this->assertEquals("blue", $result2["c"]);
        $this->assertEquals("yellow", $result2["d"]);
    }

    /** @test */
    public function testArrayDiffKey() {
        $a1=array("a"=>"red","b"=>"green","c"=>"blue");
        $a2=array("a"=>"red","c"=>"blue","d"=>"pink");
        $result = array_diff_key($a1,$a2);

        $this->assertEquals("green", $result["b"]);

        $a3=array("red","green","blue","yellow");
        $a4=array("red","green","blue");

        $result2 = array_diff_key($a3,$a4);
        $this->assertEquals("yellow", $result2[3]);


        $a5=array("a"=>"red","b"=>"green","c"=>"blue");
        $a6=array("c"=>"yellow","d"=>"black","e"=>"brown");
        $a7=array("f"=>"green","c"=>"purple","g"=>"red");

        $result3 = array_diff_key($a5, $a6, $a7);
        $this->assertEquals("red", $result3["a"]);
        $this->assertEquals("green", $result3["b"]);
    }

    /** @test */
    public function testArraySort() {
        $age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
        $isSort = asort($age);
        $this->assertTrue($isSort);

        $this->assertEquals(35, $age["Peter"]);
        $this->assertEquals(37, $age["Ben"]);
        $this->assertEquals(43, $age["Joe"]);
    }

    /** @test */
    public function testCompact() {
        $firstname = "Peter";
        $lastname = "Griffin";
        $age = "41";

        $result = compact("firstname", "lastname", "age");

        $this->assertEquals("Peter", $result["firstname"]);
        $this->assertEquals("Griffin", $result["lastname"]);
        $this->assertEquals("41", $result["age"]);

        $name = array("firstname", "lastname");
        $location = "Phnom Penh";
        $result2 = compact($name, "location", "age");

        $this->assertEquals("Peter", $result2["firstname"]);
        $this->assertEquals("Griffin", $result2["lastname"]);
        $this->assertEquals("41", $result2["age"]);
        $this->assertEquals("Phnom Penh", $result2["location"]);
    }
}