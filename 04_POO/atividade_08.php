<?php

class Funcionario {

    private $nome;
    private $salario;

    public function __construct($nome, $salario = 1000) {

        $this->nome = $nome;
        $this->salario = $salario;

    }

    public function aumentar_salario($percentual) {

        if ($percentual > 0 && $percentual <= 10) {
            $aumento = $this->salario * ($percentual / 100);
            $this->salario += $aumento;

        } else {
            echo "Erro: O percentual de aumento deve ser maior que 0% e menor ou igual a 10%.<br>";

        }

    }

    public function exibir_salario() {

        $salario_formatado = $this->salario;
        echo "Funcionário: $this->nome<br>";
        echo "Salário: $salario_formatado<br>";

    }

}

$func1 = new Funcionario("Carlos Silva");
$func1->exibir_salario();

echo "<br>";

$func2 = new Funcionario("Ana Souza", 2500);
$func2->exibir_salario();

echo "<br>";

$func2->aumentar_salario(15);

echo "<br>";

$func2->aumentar_salario(5);
$func2->exibir_salario();

?>