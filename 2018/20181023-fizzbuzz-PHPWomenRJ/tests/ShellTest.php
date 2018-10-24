<?php
use PHPUnit\Framework\TestCase;

class ShellTest extends TestCase
{
    public function testOutputIgualBissexto()
    {
        $output = trim(shell_exec('php index.php 4'));
        $this->assertEquals("Ano é bissexto",$output);
    }
    public function testOutputIgualNaoBissexto()
    {
        $output = trim(shell_exec('php index.php 1'));
        $this->assertEquals("Ano não é bissexto",$output);
    }
}