<?php
namespace Tests;

use PHPUnit\Framework\TestCase;

class HelpersTest extends TestCase
{

    /** @test */
    public function test()
    {
        $this->assertTrue(str_contains('Laravel', 'Lara'));
        $this->assertTrue(true);
    }
}