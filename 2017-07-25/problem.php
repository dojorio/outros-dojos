<?php
class Problema
{
    public function retornaNumero(int $numero)
    {
        if ($numero %3 == 0) {
            return 'Fizz';
        }
        return $numero;
    }
}