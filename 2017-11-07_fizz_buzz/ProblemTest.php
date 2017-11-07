<?php
use PHPUnit\Framework\TestCase;

require_once 'vendor/autoload.php';

class ProblemTest extends TestCase
{
    public function setUp(){
        require_once 'Problem.php';
    }
    
    public function testNumeroDeveSerDivisivelPor3() 
    {
        $numero = 3;
        $problem = new Problem();
        $this->assertTrue($problem->dividePor($numero, 3));
    }
    
    public function testDeveRetornarFalseSeONumeroNaoForDivisivelPor3()
    {
        
        $numero = 4;
        $problem = new Problem();
        $this->assertFalse($problem->dividePor($numero, 3));
    }
    
    public function testNumeroDeveSerDivisivelPor5()
    {
        
        $numero = 5;
        $problem = new Problem();
        $this->assertTrue($problem->dividePor($numero, 5));
    }
    
    public function testDeveRetornarFalseSeONumeroNaoForDivisivelPor5()
    {
        
        $numero = 4;
        $problem = new Problem();
        $this->assertFalse($problem->dividePor($numero, 5));
    }
    
    public function testNumeroDeveSerDivisivelPor3E5()
    {
        
        $numero = 15;
        $problem = new Problem();
        $this->assertTrue($problem->dividePor($numero, 3));
        $this->assertTrue($problem->dividePor($numero, 5));
    }
    
    public function testNumeroNaoDeveDivisivelPor3E5()
    {
        
        $numero = 14;
        $problem = new Problem();
        $this->assertFalse($problem->dividePor($numero, 3));
        $this->assertFalse($problem->dividePor($numero, 5));
    }

    public function testDeveRetornarFizzSeForDivisivelPor3()
    {
        $numero = 3;
        $problem = new Problem();
        $this->AssertEquals($problem->retornaFizz($numero),"Fizz");
    }
    
    public function testDeveNaoRetornarFizzSeNaoForDivisivelPor3()
    {
        $numero = 4;
        $problem = new Problem();
        $this->AssertEquals($problem->retornaFizz($numero),false);
    }
    
    public function testDeveRetornarBuzzSeForDivisivelPor5()
    {
        $numero = 5;
        $problem = new Problem();
        $this->AssertEquals($problem->retornaBuzz($numero),"Buzz");
    }

    public function testDeveNaoRetornarBuzzSeNaoForDivisivelPor5()
    {
        $numero = 4;
        $problem = new Problem();
        $this->AssertEquals($problem->retornaBuzz($numero),false);
    }
    
    public function testDeveRetornarFizzBuzzSeForDivisivelPor5e3()
    {
        $numero = 15;
        $problem = new Problem();
        $this->AssertEquals($problem->retornaFizz($numero),'Fizz');
        $this->AssertEquals($problem->retornaBuzz($numero),'Buzz');
    }
    
    public function testNaoDeveRetornarFizzBuzzSeForDivisivelPor5e3()
    {
        $numero = 14;
        $problem = new Problem();
        $this->AssertEquals($problem->retornaFizz($numero),false);
        $this->AssertEquals($problem->retornaBuzz($numero),false);
    }
    
    public function testDeveRetornarFizzBuzzJuntoSeForDivisivelPor5e3()
    {
        $numero = 15;
        $problem = new Problem();
        $this->AssertEquals($problem->retornaFizzBuzz($numero),'FizzBuzz');
    }
    
    public function testNaoDeveRetornarFizzBuzzJuntoSeNaoForDivisivelPor5e3()
    {
        $numero = 14;
        $problem = new Problem();
        $this->AssertEquals('', $problem->retornaFizzBuzz($numero));
    }
}