<?php
class Problem {

    public function dividePor($numero, $divisor)
    {
        return $numero%$divisor==0; 
    }
    
    public function retornaFizz($numero){
        return ($this->dividePor($numero, 3))?'Fizz':false;
    }

    public function retornaBuzz($numero){
        return ($this->dividePor($numero, 5))?'Buzz':false;
    }
    
    public function retornaFizzBuzz($numero)
    {
        $FizzBuzz = $this->retornaFizz($numero);
        $FizzBuzz .= $this->retornaBuzz($numero);
        return $FizzBuzz;
    }
    
    public function retornaString($numero)
    {
        return 'Buzz';
    }
}