<?php

require_once "Aluno.php";
require_once "Professo.php";

class Turma{

    private $codigo;
    private $professor;
    private $aluno = [];

    public function __construct($codigo, Professor $professor){
        
        $this->codigo = $codigo;
        $this->professor = $professor;
    }

    public function adicionarAluno(Aluno $aluno){

        $this->aluno[] = $aluno;
    }

    public function listaAlunos(){
        echo "<h3>Aluno da terra $this->codigo </h3>";
        foreach ($this->aluno as $aluno){
            $aluno->exibirDadosAluno();
        }
    }

    public function exibirDadosTurma(){

        echo " <h2>Turma: $this->codigo </h2>";
        echo "Professor:". $this->professor->getNome(). "<br>";
        echo "Disciplina:". $this->professor->getDisciplina(). "<br>";
    }
}



?>