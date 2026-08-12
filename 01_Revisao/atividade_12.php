<?php

$idades = [5, 10, 15, 20, 25, 30, 35, 40];
$quantidade = count($idades);
$soma = 0;
$media = 0; 

foreach ($idades as $idade) {
    $soma += $idade;
    if($idade >= 18){
    echo "idades maiores que 18 => ".$idade; 
    echo "<br>";
    }
}

$media = $soma/$quantidade;

echo "média é igual a :". $media;
echo  "<br>";

?>