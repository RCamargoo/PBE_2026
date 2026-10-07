<?php

class Produto {

    private $nome;
    private $preco;
    private $estoque;

    public function __construct($nome, $preco, $estoque) {

        $this->nome = $nome;
        $this->preco = $preco;
        $this->estoque = $estoque;

    }

    public function vender($quantidade) {

        if($quantidade <= $this->estoque) {

            $this->estoque = $this->estoque - $quantidade;
            echo "Venda realizada com sucesso!<br> ";

        } else {
            echo "Estoque insuficiente!<br> ";

        }

    }

    public function reajustar_preco($percentual) {

        $aumento = $this->preco * ($percentual / 100);
        $this->preco = $this->preco + $aumento;
        echo "Preço reajustado com sucesso!<br> ";
 
    }

    public function exibir_info() {

        echo "Produto: $this->nome<br> ";
        echo "Preço: $this->preco ";
        echo "Estoque: $this->estoque unidades<br> ";

    }

}

$produto1 = new Produto("Teclado", 100, 10);
$produto1->exibir_info();

echo "<br>";

$produto1->vender(3);
$produto1->exibir_info();

echo "<br>";

$produto1->vender(20);

echo "<br>";

$produto1->reajustar_preco(10);
$produto1->exibir_info();

?>