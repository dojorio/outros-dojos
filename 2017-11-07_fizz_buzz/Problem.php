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
}