<?php

//puxando do view

$nome = $_POST['nome'];
$nome_filme = $_POST['nome_filme'];
$quantidade = $_POST['quantidade'];
$tipo_ingresso = $_POST['tipo_ingresso'];

$preco = 30;

if ($tipo_ingresso == 'meia'){
    $meia = $valor_ingresso / 2;
}

if ($quantidade > 10){
    $desconto = $preco * 10/100;
    $preco = $preco - $desconto;
}

$total = $preco * $quantidade;

require_once "view_relatorio.php";

?>