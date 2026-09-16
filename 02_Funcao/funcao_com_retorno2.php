<?php


function calcular_preco_final($preco, $quantidade, $percentual_desconto) {
    return $preco * $quantidade - ($preco * $quantidade * ($percentual_desconto / 100)); 

}

$preco = 10;
$quantidade = 5;
$percentual_desconto = 10;

$resultado = calcular_preco_final($preco, $quantidade, $percentual_desconto);

echo "preço = $preco <br> ";
echo "Quantidade = $quantidade <br> ";
echo "desconto aplicado = $percentual_desconto <br>";
echo "Resultado final = $resultado";

       
?>