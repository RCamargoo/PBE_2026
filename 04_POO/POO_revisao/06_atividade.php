
<?php

class Pessoa{

    private $nome;
    private $idade;
    private $cidade;
    private $telefone;

    public function __construct($nome, $idade, $cidade, $telefone){

        $this->nome = $nome;
        $this->idade = $idade;
        $this->cidade = $cidade;
        $this->telefone = $telefone;
    }

    public function definir_endereco($cidade){

        $this->cidade = $cidade;
    }

    public function definir_telefone($numero){

        $this->telefone = $numero;


    }

    public function aniversario(){

        $this->idade++; // esse atividade ++ e para somar mais 1
    }

    public function exibir_perfil(){

        echo "Nome: $this->nome <br>";
        echo "Idade: $this->idade <br>";
        echo "Cidade: $this->cidade <br>";
        echo "Telefone: $this->telefone <br><br>";
    }
}

$pessoa1 = new Pessoa("Predro", 18, "tambau", "11987654321");

$pessoa1->exibir_perfil();

$pessoa1->definir_endereco("campinas");

$pessoa1->definir_telefone("123456787654");

$pessoa1->aniversario();

$pessoa1->exibir_perfil();

?>
