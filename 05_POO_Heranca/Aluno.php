<?php

require_once "Pessoa.php";

class Aluno extends Pessoa{

    private $matricula;
    private $notas = []; //notas é um array(lista)         ja estvasia a nota 

    #[Override]
    public function __construct($nome, $email, $matricula){

        parent::__construct($nome, $email);
        $this->matricula = $matricula;
    }

    //metodo adicionaNotas é uma lista de notas 
    public function adicionarNotas($nota){
        $this->notas[] = $nota;
    }
    
    public function calcularMedia(){

        //se for 0 ja para a excução e sai do metodo não faz a conta
        if(count($this->notas) == 0 )return 0;

        //soma as notas de todas as  notas 
        return array_sum($this->notas) / count($this->notas);
    }

    public function verificarSituacao(){
        return $this->calcularMedia () >= 7 ? "Aprovada " : "reprovada";

    }

    //metodo 
    public function exibirDadosAluno(){
        
        parent::exibirDadosPessoa();
        echo "Matricula: $this->matricula <br>";
        echo "Média: ".number_format($this->calcularMedia(), 2)." <br>";
        echo "Situação: ". $this->verificarSituacao()."<br><hr>";
    }
}

?>