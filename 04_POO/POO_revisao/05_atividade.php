
<?php

class Turma{

    private $nome;
    private $professor;
    private $qtd_alunos;
    private $capacidade;

    public function __construct($nome, $professor, $capacidade){

        $this->nome = $nome;
        $this->professor = $professor;
        $this->capacidade = $capacidade;
        $this->qtd_alunos = 0;
    }

    public function adicionar_aluno(){

        if($this->qtd_alunos < $this->capacidade){
            $this->qtd_alunos++;
            echo "Aluno adicionado!<br>";
        }
        else{
            echo "Capacidade máxima atingida!<br>";
        }
    }

    public function remover_aluno(){

        if($this->qtd_alunos > 0){
            $this->qtd_alunos--;
            echo "Aluno removido!<br>";
        }
        else{
            echo "Não há alunos para remover!<br>";
        }
    }

    public function exibir_turma(){

        echo "Turma: $this->nome <br>";
        echo "Professor: $this->professor <br>";
        echo "Quantidade de alunos: $this->qtd_alunos <br>";
        echo "Capacidade: $this->capacidade <br><br>";
    }
}

$turma1 = new Turma("Desenvolvimento de Sistemas", "Carlos", 3);

$turma1->exibir_turma();

$turma1->adicionar_aluno();

echo "<br><br>";

$turma1->adicionar_aluno();

echo "<br><br>";

$turma1->exibir_turma();

?>
