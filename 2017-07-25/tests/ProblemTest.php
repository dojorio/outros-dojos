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
        $problema = new Problema();
        $retorno = $problema->retornaNumero();
        $this->assertEquals(1, $retorno);
    }
    
    public function testPassaDois()
    {
        
    }
}