<?php

use PHPUnit\Framework\TestCase;
use App\Model\Pokemon;

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

    /** @test */
    public function checkPokemon()
    {

        $pokemon = new Pokemon();
        $pokemon->setName('Pikachu');
        // ambil nama pokemon, check persamaan dengan pikachu
        $this->assertEquals($pokemon->getName(), 'Pikachu');
    }
}