<?php

require_once "Pessoa.php";

class Professor extends Pessoa{

    private $disciplina;

    public function __construct($nome, $email, $disciplina){

        $this->disciplina = $disciplina;
        //executar o construtor da classe Pessoa
        parent::__construct($nome, $email);
    }

    //metodo para buscar diciplina 
    public function getDisciplina(){

        return $this->disciplina;
    }

    //exibir todos os dados do professor
    public function exibirDados(){

        parent::exibirDadosPessoa();
        echo "Disciplina: $this->disciplina <br><hr>";
    }
}



?>