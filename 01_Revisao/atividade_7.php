<?php

$operacao = "+";
$numero_1 = "2";
$numero_2 = "4";
$valor = 0;

switch ($operacao) {

    case "+":
        $valor = $numero_1 + $numero_2;
         echo $valor;
         break;
 
    case "-":
        $valor = $numero_1 - $numero_2;
         echo $valor;
         break;

    case "*":
        $valor = $numero_1 * $numero_2;
         echo $valor;
         break;

    case "/":
        $valor = $numero_1 / $numero_2;
         echo $valor;
         break;

    default:
        echo "operação invalida";
}

