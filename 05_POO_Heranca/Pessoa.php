<?php

class Pessoa{

    protected $nome;
    protected $email;

    public function __construct($nome, $email){

        $this->nome = $nome;
        $this->email = $email;

    }

    //metodo

    public function getNome(){

        return $this->nome;
    }

    //metodo

    public function setNome($nome){

        $this->nome = $nome;
    }

    // metodo

    public function getEmail(){

        return $this->email;
    }
    //metodo parea atualizar email 
    
    public function setEmail($email){

        $this->email = $email;
    }

    //metodo exibir todos os dados 
    
    public function exibirDadosPessoa(){

        echo "Nome: $this->nome <br> Email: $this->email <br>";
    }
}


?>