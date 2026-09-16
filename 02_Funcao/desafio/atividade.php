<?php

//nome do produto;
//preço unitário;
//quantidade;
//percentual de desconto, com valor padrão de 0;
//percentual de imposto, com valor padrão de 0.

//A função deverá calcular e retornar múltiplos valores em um array:
//nome do produto;
//subtotal;
//valor do desconto;
//valor do imposto;
//total final.

require_once 'funcao.php';

$resultado  = calcularPedido("arroz", 10, 10, 10, 10 );

echo "nome: ". ($resultado ["nome_produto"])."<br>";
echo "Subtotal: ". ($resultado ["subtotal"])."<br>";
echo "Valor do desconto: ". ($resultado ["valor_do_desconto"])."<br>";
echo "Valor do imposto: ". ($resultado ["valor_do_imposto"])."<br>";
echo "Total: ". ($resultado ["valor_final"])."<br>";

$total_com_frete = calculo_frete($resultado['valor_final']);

echo "Total com frete". $total_com_frete;

?>