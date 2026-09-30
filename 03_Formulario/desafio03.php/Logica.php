<?php

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$filme = $_POST["filme"];
$tipo = $_POST["tipo"];
$quantidade = $_POST["quantidade"];
$pagamento = $_POST["pagamento"];

$total = calcularTotal($tipo, $quantidade);

$desconto = calcularDesconto($total, $pagamento);

$totalFinal = $total - $desconto;

$filmes = [
    "Homem-Aranha: Um Novo Dia",
    "A Odisseia",
    "No Limite da Justiça",
    "Resident Evil",
    "One Piece – O Filme",
    "Vingadores: Ultimato Encore",
    "Minha Melhor Amiga",
    "Coração Selvagem",
    "Digger"
];


function calcularTotal($tipo, $quantidade)
{
    if($tipo == "meia"){
        return 15 * $quantidade;
    }
    else{
        return 30 * $quantidade;
    }
    
}

function calcularDesconto($total, $pagamento){

    if ($pagamento == "Pix") {
        return $total * 0.10;
    }
    if ($pagamento == "Dinheiro") {
        return $total * 0.10;
    } 
    else {
        return 0;
    }
}
 

require_once "view_relatorio.php";
?>
