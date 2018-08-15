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
    public function testRetornaUmArray()
    {
        $problem = new Problem();
        $this->assertInternalType('array', $problem->fizzBuzz());
    }
    
    public function testTemCemElementos()
    {
        $problem = new Problem();
        $this->assertCount(100, $problem->fizzBuzz()); 
    }
    
    public function testPrimeiroIndiceEhNumero()
    {
        $problem = new Problem();
        $this->assertTrue(is_numeric($problem->fizzBuzz()[0]));
    }
    
    public function testPrimeiroIndiceEhNumeroUm()
    {
        $problem = new Problem();
        $this->assertEquals(1, $problem->fizzBuzz()[0]);
    }
    
    
    
}
