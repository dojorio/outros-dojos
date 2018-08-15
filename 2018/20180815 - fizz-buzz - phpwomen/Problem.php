<?php
class Problem
{
    public function fizzBuzz()
    {
        $arr=array();
        for ($a=1; $a<=100; $a++){
            if( $a % 3 == 0){
                
                array_push($arr,"Fizz");
             
                
            } elseif ( $a % 5 == 0){
                array_push($arr,"Buzz");
            } elseif ( ($a % 3 == 0) && ($a % 5 == 0) ){
                array_push($arr,"FizzBuzz");
            }
            
            else {
                array_push($arr, $a); 
            }
          
        } 
        
       
            
            
       
        //$arr[4]="Buzz";
        //$arr[14]="FizzBuzz";
        return $arr; 
    }
}