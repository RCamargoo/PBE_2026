<?php

$funcionarios = [
    ["nome" => "Carlos", "cargo" => "Programador", "salario" => 500],
    ["nome" => "Ana", "cargo" => "Designer", "salario" => 3500],
    ["nome" => "Pedro", "cargo" => "Analista", "salario" => 3000],
    ["nome" => "Marina", "cargo" => "Gerente", "salario" => 1500],
    ["nome" => "João", "cargo" => "Suporte", "salario" => 1000],
    ["nome" => "Julia", "cargo" => "Estagiária", "salario" => 2000]
];

$quantidade = count($funcionarios);
$soma_salarios = 0;

foreach ($funcionarios as $funcionario) {
    echo "Nome: " . $funcionario[ "nome"] . "<br>";
    echo "Cargo: " . $funcionario["cargo"]. "<br>";
    echo "Salário: R$ " . $funcionario["salario"] . "<br> <br>";
     $soma_salarios += $funcionario ["salario"];
}

echo "quantidade de funcionario : ". $quantidade;
echo"<br>";
echo "A soma dos salarios é :". $soma_salarios;

?>