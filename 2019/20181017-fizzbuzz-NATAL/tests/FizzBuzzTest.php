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
    public function testSolucao()
    {
        $this->assertEquals(FizzBuzz::Solucao(1), "1");
    }
    public function testSolucao2()
    {
        $this->assertEquals(FizzBuzz::Solucao(2), "2");
    }
    public function testSolucaoFizz()
    {
        $this->assertEquals(FizzBuzz::Solucao(3), "Fizz");
    }
    public function testeBuzz()
    {
        $this->assertEquals(FizzBuzz::Solucao(5), "Buzz");
    }
    public function testeFizzBuzz()
    {
        $this->assertEquals(FizzBuzz::Solucao(15), "FizzBuzz");
    }
}
 