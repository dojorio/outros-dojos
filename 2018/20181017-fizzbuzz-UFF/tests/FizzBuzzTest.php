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
    public function testMetodoRetornaArray() {
        $classe = new Problem();
        $this->assertInternalType('array', $classe->fizzBuzz());
    }

    public function testTemCemElementos()
    {
        $classe = new Problem();
        $this->assertCount(100, $classe->fizzBuzz());
    }
    
    public function testFizzBuzz1()
    {
        $classe = new Problem();
        $this->assertEquals('1', $classe->fizzBuzz()[1]);
    }
    public function testeFizzBuzz3()
    {
    $classe = new Problem();
    $this->assertEquals('Fizz', $classe->fizzBuzz()[3]);
    }
    public function testeFizzBuzz5()
    {
        $classe = new Problem();
        $this->assertEquals('Buzz', $classe->fizzBuzz()[5]);
    }
    public function testeFizzBuzz15()
    {
        $classe = new Problem();
        $this->assertEquals('FizzBuzz', $classe->fizzBuzz()[15]);
    }
    
}