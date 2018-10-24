<?php
require_once dirname(__FILE__) . '/Problem.php';

$bissexto = new Problem();
if($bissexto->bissexto($argv[1])) {
    echo "Ano é bissexto";
} else {
    echo "Ano não é bissexto";
}
echo "\n";