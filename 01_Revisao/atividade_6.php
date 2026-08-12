<?php

$aluno = [
    "Rafael" => 8.0,
    "Pedro" => 7.0,
    "Thiago" => 2.0,
    "Isabela" => 10.0,
    "Davi" => 6.0
];

$media = 0;

foreach ($aluno as $nome => $nota ){
    echo" O aluno $nome, tirou a nota $media <br>";
    $media += $nota;
}

$media = $media / 6 ;
echo " a media da turma é $media";

?>