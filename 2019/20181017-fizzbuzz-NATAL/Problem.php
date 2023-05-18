<?php
class FizzBuzz
{   
    public static function Solucao($param) {
        if($param == 3) {
            return "Fizz";
        }
        elseif($param == 5){
            Return "Buzz";
        }
        
        elseif($param == 15){
            Return "FizzBuzz";
        }
        else{
            return $param;
        }
    }
}
