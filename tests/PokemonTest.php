<?php

use PHPUnit\Framework\TestCase;

class SampleTest extends TestCase
{
    public function testSample()
    {
        // assertrue check if the value is true
        $this->assertTrue(true);
    }

    // dodblock example
    // sample login
    /** @test */
    public function sampleLogin()
    {
        $this->assertTrue(true);
    }
}