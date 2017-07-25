<?php

use PHPUnit\Framework\TestCase;

require 'vendor/autoload.php';
require 'problem.php';

final class ProblemTest extends TestCase
{
    public function setUp()
    {
        $this->problema = new Problema();
    }
    public function testPassaUm()
    {
        $retorno = $this->problema->retornaNumero(1);
        $this->assertEquals(1, $retorno);
    }
    
    public function testPassaTres()
    {
        $retorno = $this->problema->retornaNumero(3);
        $this->assertEquals('Fizz', $retorno);
    }
}