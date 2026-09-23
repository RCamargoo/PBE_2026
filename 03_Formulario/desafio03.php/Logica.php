<?php

$precos = [
    "Inteira" => 30,
    "Meia" => 15
];

function calcularTotal($tipo, $quantidade)
{
    global $precos; //Permitir que a função $calarTotal acesse e utilize a vatriavel $precos

    return $precos[$tipo] * $quantidade;
}

function calcularDesconto($total, $pagamento)
{
    if ($pagamento == "Pix") {
        return $total * 0.10;
    } else {
        return 0;
    }
}
 

require_once "view_relatorio.php";
?>
