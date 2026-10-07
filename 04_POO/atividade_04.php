<?php

class Pedido{

    public $numero;
    public $cliente;
    public $valor;
    public $status;

    function adicionar_item($valor){
        $this->valor += $valor;
    }

    function cancelar(){
        $this->status = "Cancelado";
    }

    function finalizar(){
        $this->status = "Finalizado";
    }

    function exibir_resumo(){
        echo "Número: $this->numero <br>";
        echo "Cliente: $this->cliente <br>";
        echo "Valor: R$ $this->valor <br>";
        echo "Status: $this->status <br><br>";
    }

}

$pedido1 = new Pedido();

$pedido1->numero = 1;
$pedido1->cliente = "Rafael";
$pedido1->valor = 0;
$pedido1->status = "Aguardando";

$pedido1->adicionar_item(50);
$pedido1->adicionar_item(30);
$pedido1->finalizar();


$pedido2 = new Pedido();

$pedido2->numero = 7;
$pedido2->cliente = "Davi";
$pedido2->valor = 0;
$pedido2->status = "Aguardando";

$pedido2->adicionar_item(100);
$pedido2->adicionar_item(25);
$pedido2->cancelar();

$pedido1->exibir_resumo();
$pedido2->exibir_resumo();

?>