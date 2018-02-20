<?php
class Problem
{
    public $valor;
    
    public function valorInformado()
    {
        if (!is_numeric($this->valor)) {
            return;
        }
        return $this->valor;
    }
    
}