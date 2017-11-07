<?php
use PHPUnit\Framework\TestCase;

require_once 'vendor/autoload.php';

class ProblemTest extends TestCase
{
    public function testNumeroDeveSerDivisivelPor3() 
    {
        require_once 'Problem.php';
        $numero = 3;
        $problem = new Problem();
        $this->assertTrue($problem->dividePor($numero, 3));
    }
    
    public function testDeveRetornarFalseSeONumeroNaoForDivisivelPor3()
    {
        require_once 'Problem.php';
        $numero = 4;
        $problem = new Problem();
        $this->assertFalse($problem->dividePor($numero, 3));
    }
}