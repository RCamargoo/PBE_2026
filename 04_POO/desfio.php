<?php

class Pedido{

    private $cliente;
    private $valor_item;

    public function __construct($cliente, $valor_item = 0){
        
        $this->cliente = $cliente;
        $this->valor_item = $valor_item;

    }

    public function adicionar_item ($valor){

        $this->valor_item += $valor;
    }

    function get_total(){

        return $this->valor_item;
    }

    function exibir_pedido(){

        echo "Cliente:  $this->cliente <br>";
        echo "Total do pedido: R$ " . $this->get_total() . "<br>";

    }
}


class Nota_Fiscal{

    private $total_pedido;
    private $imposto;
    private $total_pagar;

    function __construct($total_pedido, $imposto = 0.1){

        $this->total_pedido = $total_pedido;
        $this->imposto = $imposto;
        $this->total_pagar = 0;

    }

    function calcular_total(){

        $this->total_pagar = $this->total_pedido * (1 + $this->imposto);

    }

    function exibir_nota(){

        echo "Subtotal: R$ $this->total_pedido <br>";
        echo "Imposto aplicado: ($this->imposto * 100) <br>";
        echo "Total final: R$  $this->total_pagar <br>";

    }

}

$pedido = new Pedido("Rafael");

$pedido->adicionar_item(50);
$pedido->adicionar_item(30);
$pedido->adicionar_item(20);

$pedido->exibir_pedido();

echo "<br>  <hr>";

$nota1 = new Nota_Fiscal(100);

$nota1->calcular_total();
$nota1->exibir_nota();

?>