<?php

$produtos = [
    ["nome" => "Notebook", "estoque" => 10],
    ["nome" => "Mouse", "estoque" => 20],
    ["nome" => "Teclado", "estoque" => 30],
    ["nome" => "Monitor", "estoque" => 0],
    ["nome" => "Headset", "estoque" => 10],
    ["nome" => "Webcam", "estoque" => 8],
    ["nome" => "Pendrive", "estoque" => 3],
    ["nome" => "Impressora", "estoque" => 5]
];

$qtd = 0;
$estoque_qtd = 0;

foreach ($produtos as $produto){
    echo "Produto: " . $produto["nome"] . " | Estoque: " . $produto["estoque"];
    echo "<br>";
    $qtd = $qtd + 1;

    if($produto["estoque"] == 0){
         $estoque_qtd +=1; 
    } 
}
    
        echo "<br> Quantidade de produtos cadastrados: $qtd <br>";
        echo "Quantidade de produtos com estoque zerado: $estoque_qtd";

?>