<?php

require_once "Turma.php";

//criando  professor
$professor = new Professor("Leonardo Envagelista", "Leonardo.envagelista@gmail.com", "programação");

//criar turma
$turma = new Turma("INFO", $professor);

// criar alunos
$aluno1 = new Aluno("Rafael de Camargo", "rafael.bricoleri@gmail.com", "B456");

$aluno1->adicionarNotas(8);
$aluno1->adicionarNotas(9);
$aluno1->adicionarNotas(10);

$aluno2 = new Aluno("Thiago Donizetti", "Thiago.donizetti@gmail.com", "A876");

$aluno2->adicionarNotas(0);
$aluno2->adicionarNotas(5);
$aluno2->adicionarNotas(10);

$aluno3 = new Aluno("Pedro Henrique", "pedro.henrique@gmail.com", "C482");

$aluno3->adicionarNotas(8);
$aluno3->adicionarNotas(2);
$aluno3->adicionarNotas(5);


$turma->adicionarAluno($aluno1);
$turma->adicionarAluno($aluno2);
$turma->adicionarAluno($aluno3);

//exibir resumo da turma 
$turma->exibirDadosTurma();

//exibir lista de aluno
$turma->listaAlunos();

echo "<h4> Polimorfismo </h4>";
// Mostrando o polimorfismo funcionando
$pessoas = [$professor, $aluno1, $aluno2, $aluno3];
foreach($pessoas as $pessoa){
    $pessoa->exibirDadosPessoa();
    echo "<hr>";

}
?>