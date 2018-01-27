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
        $corredor = $Funcionario->criaCorredor();
        $this->assertInternalType('array', $corredor);
    }
}
