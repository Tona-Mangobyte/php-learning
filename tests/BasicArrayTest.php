<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class BasicArrayTest extends TestCase
{
    /** @test */
    public function testCountArray() {
        $cars = array("Volvo", "BMW", "Toyota");
        $count = count($cars);
        $isArr = is_array($cars);

        $this->assertEquals(3, $count);
        $this->assertTrue($isArr);

    }
}