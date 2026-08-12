<?php

$produtos = [
    
    "Teclado" => 150,
    "Mouse" => 70,
    "Notebook" => 1000,
    "Fone" => 30
];

foreach($produtos as $produto){
    if($produto > 100){
    echo $produto;
    echo "<br>";
}}

?>