<?php

/* 

For documentation see http://phpunit.de
 
Running Test:

vendor/bin/phpunit --colors ProblemTest.php

*/
use PHPUnit\Framework\TestCase;

require dirname(__FILE__) . '/Problem.php';

class ProblemTest extends TestCase
{
    public function testVerificaSeCorredorEhArray()
    {
        $Funcionario = new Funcionario();
        $corredor = $Funcionario->criaCorredor(4);
        $this->assertInternalType('array', $corredor);
    }
    
    public function testDaLorhanaVerificarCorredorSeTemTrêsSalas() {
        $Funcionario = new Funcionario();
        $corredor = $Funcionario->criaCorredor(3);
        $this->assertCount(3, $corredor);
        
    }
    
    public function testDaLorhanaVerificarCorredorSeTemQuatroSalas() {
        $Funcionario = new Funcionario();
        $corredor = $Funcionario->criaCorredor(4);
        $this->assertCount(4, $corredor);
        
    }
    
}
