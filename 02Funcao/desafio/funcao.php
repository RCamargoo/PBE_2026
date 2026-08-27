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

function calcularPedido($nome_p, $preco, $qtd, $percentual_des = 0, $percentual_imp = 0){

        $subtotal = $preco * $qtd;

        $valor_desconto = $subtotal * ($percentual_des / 100);

        $valor_com_desconto = $subtotal - $valor_desconto; 
        
        $valor_imposto = $valor_com_desconto * ($percentual_imp / 100); 
        
        $total = ($subtotal - $valor_desconto) + $valor_imposto;

        return [

        "nome_produto" => $nome_p,
        "subtotal" => $subtotal,
        "valor_do_desconto" => $valor_desconto,
        "valor_do_imposto" => $valor_imposto,
        "valor_final" => $total

    ];

}

?>




