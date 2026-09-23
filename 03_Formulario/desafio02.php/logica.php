<?php

//puxando do view

$nome = $_POST['nome'];
$nomeP1 = $_POST['nome_produto1'];
$nomeP2 = $_POST['nome_produto2'];
$nomeP3 = $_POST['nome_produto3'];

$preco1 = $_POST['preco1'];
$preco2 = $_POST['preco2'];
$preco3 = $_POST['preco3']; 

$quantidade1 = $_POST['quantidade1'];
$quantidade2 = $_POST['quantidade2'];
$quantidade3 = $_POST['quantidade3'];

$produtos = [

    ["produto" => $nomeP1,   "preco" => $preco1,   "quantidade" => $quantidade1,   "subtotal" => $preco1 * $quantidade1 ],
    ["produto" => $nomeP2,   "preco" => $preco2,   "quantidade" => $quantidade2,   "subtotal" => $preco2 * $quantidade2 ],
    ["produto" => $nomeP3,   "preco" => $preco3,   "quantidade" => $quantidade3,   "subtotal" => $preco3 * $quantidade3 ]

];

$total = 0;

foreach($produtos as $produto){

    $total += $produto['subtotal'];

}

$desconto = 0;

if($total > 500){
    $desconto = 10;
}

$valor_desconto = $total * (10/100);
$valor_final = $total - $valor_desconto;

require_once "view_relatorio.php";

?>