<?php

/*

For documentation see http://phpunit.de

Running Test:

vendor/bin/phpunit --colors ProblemTest.php

*/
use PHPUnit\Framework\TestCase;

require_once dirname(__FILE__) . '/../Problem.php';

class ProblemTest extends TestCase
{
    public function testeRetornaTrueSeBissexto()
    {
        $problem = new Problem();
        $this->assertTrue($problem->bissexto(1604));
    }

    public function testeFalhaComAnoNaoNumerico()
    {
        $problem = new Problem();
        $this->expectException(TypeError::class);
        $problem->bissexto(new stdClass());
    }
    public function testeRetornaFalseSeNaoBissexto()
    {
        $problem = new Problem();
        $this->assertFalse($problem->bissexto(1601));
    }
    
    public function testeRetornaTrueSeAno1604()
    {
        $problem = new Problem();
        $this->assertTrue($problem->bissexto(1604));
    }
    public function testeRetornaFalseSeAno100()
    {
        $problem = new Problem();
        $this->assertFalse($problem->bissexto(100));
    }
    public function testeRetornaTrueSeAno1600()
    {
        $problem = new Problem();
        $this->assertTrue($problem->bissexto(1600));
    }
}
