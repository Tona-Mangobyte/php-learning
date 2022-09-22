<?php

namespace Tests;

use PHPUnit\Framework\TestCase;

class VariableTest extends TestCase
{
    /** @test */
    public function testVariables() {
        $hello = "Hello World";
        $numInt = 45;
        $is_string = is_string($hello);
        $is_int = is_int($numInt);

        $this->assertTrue($is_string);
        $this->assertTrue($is_int);

        $this->assertEquals("Hello World", $hello);
    }

    /** @test */
    public function testCastingIntAndInteger() {
        $a1 = (int)"3 euros";
        $a2 = (integer)"3 euros";

        $this->assertEquals(3, $a2);
        $this->assertEquals(3, $a1);
    }
}