<?php

class aula{

    public $disciplina;
    public $professor;
    public $duracao;
    public $numero_sala;
    public $bloco;

    function exibir_informacoes(){

        echo "Disciplina: $this->disciplina <br>";
        echo "Professor: $this->professor <br>";
        echo "Duração: $this->duracao <br>";
        echo "Número da sala: $this->numero_sala <br>";
        echo "Bloco: $this->bloco <br>";

    }

    function trocar_professor($novoProfessor){

        $this->professor = $novoProfessor;
        echo "O professor foi trocado para $this->professor <br>";

    }

    function alterar_local($n_sala, $bloco){

        $this->numero_sala = $n_sala;
        $this->bloco = $bloco;

        echo "A sala foi alterada para $this->numero_sala <br>";
        echo "O bloco foi alterado para $this->bloco <br>";

    }

}

$aula1 = new aula();

$aula1->disciplina = "Programação";
$aula1->professor = "Leonardo";
$aula1->duracao = "2 horas";
$aula1->numero_sala = 12;
$aula1->bloco = "A";


$aula1->exibir_informacoes();
$aula1->trocar_professor("Carlos");
$aula1->alterar_local(20, "B");

?>