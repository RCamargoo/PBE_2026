<?php

$produtos = [
    
    ["nome" => "mouse", "estoque" => 1],
    ["nome" => "notebook", "estoque" => 3],
    ["nome" => "monitor", "estoque" => 20],
    ["nome" => "fone", "estoque" => "sem estoque"],
    ["nome" => "pc", "estoque" => "sem estoque"]
];

$quantidade_produto = count($produtos);

foreach($produtos as $produto){
    echo $produto["nome"] . $produto['estoque'];
    echo "<br>";

}

    echo $quantidade_produto;
?>