<?php
class Funcionario
{
    public $corredor = array();
    public function criaCorredor($n)
    {
        for($i =1; $i<=$n;$i++){
            $this->corredor[$i] = 0;
        }
        return $this->corredor;
    }
}