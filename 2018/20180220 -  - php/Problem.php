<?php
class Problem
{
    public $valor;
    
    public function valorInformado()
    {
        if (!is_numeric($this->valor)) {
            return;
        }
        if($this->valor < 10) {
            return;
        }
        if($this->valor % 10 != 0) {
            return;
        }
        return $this->valor;
    }
    
}