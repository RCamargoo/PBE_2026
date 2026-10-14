<?php

class Paciente{

    private $idade;
    private $nome;
    private $peso;
    private $altura;


    public function __construct($idade, $peso, $altura, $nome){

        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->nome = $nome;

    }

    public function IMC(){

        $IMC =  $this->peso / ($this->altura * $this->altura);
    }

    public function clacificar(){

        if ($IMC <= 18){

        }
    }
}

?>