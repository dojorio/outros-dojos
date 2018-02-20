<?php

/* 

For documentation see http://phpunit.de
 
Running Test:

vendor/bin/phpunit --colors ProblemTest.php

*/
use PHPUnit\Framework\TestCase;

require dirname(__FILE__) . '/../Problem.php';

class ProblemTest extends TestCase
{
    function testVerificarSeExisteValor(){
        $model = new Problem();
        $this->assertEmpty($model->valor);
    }
    
    function testVerificarSeValorEUmNumero(){
        $model = new Problem();
        $model->valor = 50;
        $this->assertInternalType('integer', $model->valor);
    }
    
    function testVerificarSeValorNaoEUmNumero(){
        $model = new Problem();
        $model->valor = 'abacate';
        $this->assertEmpty($model->valorInformado());
    }
}
