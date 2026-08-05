<?php

$a = 3;
$b = 10;
$c = 2;

$delta = ($b * $b) - (4 * $a * $c);

echo "Delta: $delta <br>";

if ($delta < 0) {
    echo "não possui raízes";
} else {
    $valor_mais = (-$b + sqrt($delta)) / (2 * $a);
    $valor_menos = (-$b - sqrt($delta)) / (2 * $a);

    echo "Raiz mais =  $valor_mais <br>";
    echo "Raiz menos =  $valor_menos ";
}

?>