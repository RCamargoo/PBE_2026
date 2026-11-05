<?php

class Produto{

    private $nome;
    private $quantidade;
    private $preco;


    public function __construct($nome, $quantidade, $preco){

    $this->nome = $nome;
    $this->quantidade = $quantidade;
    $this->preco = $preco;

}

    public function getNome(){

        return $this->nome;
    }

    public function getQuantidade(){

        return $this->quantidade;
    }

    public function getPreco(){

        return $this->preco;
    }

    public function calcularTotal(){

        return $this->preco * $this->quantidade;
    }

    public function calcularDesconto(){

        if($this->quantidade >= 10){
            return 10;
        }
        else{
            return 0;
        }
    }
    public function calcularTotalComDesconto(){
        
        $desconto = $this->calcularDesconto();

        return $this->calcularTotal() - ($this->calcularTotal() * $desconto / 100);
        
    }

    public function verificarEstoque(){

        if($this->quantidade < 5){

            return "Estoque Baixo!";
        }
        else{

            return "Estoque Normal ";
        }
    }

} 


?>