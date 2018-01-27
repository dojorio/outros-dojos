<?php
class Funcionario
{
    public function criaCorredor($n)
    {
        
        $corredor=array();
        for($i =1; $i<=$n;$i++){
            $corredor[$i] = 0;
            
        }
        return $corredor;
    }
}