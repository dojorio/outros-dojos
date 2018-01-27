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
    
    public function retornaString($numero)
    {
        $FizzBuzz = $this->retornaFizz($numero);
        $FizzBuzz .= $this->retornaBuzz($numero);
        return $FizzBuzz;
    }
    public function retornaLista($num) {
        $lista = [];
        for($i = 1 ; $i <= $num; $i++ )
        {
            $lista[] = $this->retornaString($i);
        }
        return $lista;
    }
}