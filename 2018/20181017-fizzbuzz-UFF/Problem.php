<?php
class Problem
{
    public function fizzBuzz()
    {
        $arr = [];
        for ($i = 1; $i <= 100; $i++) {
            if($i%3 == 0 && $i%5 == 0)
            {
                $arr[$i] = 'FizzBuzz';
            }
            Else if($i%3 == 0)
            {
                $arr[$i] = 'Fizz';
            }
            Else if($i%5 == 0)
            {
                $arr[$i] = 'Buzz';
            }
            
            Else
            {
                $arr[$i] = $i;
            }
        }
        return $arr;
    }
}