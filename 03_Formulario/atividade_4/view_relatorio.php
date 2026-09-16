<?php

///$nome = $_POST['Nome'];
//$nota01 = $_POST['nota01'];
//$nota02 = $_POST['nota02'];
//$nota03 = $_POST['nota03'];

//$media = ($nota01 + $nota02 + $nota03) / 3;

//if ($media >= 10){
//    $nota_final = 10;
//}

?>

<!DOCTYPE html>

<html lang="pt_br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Calculo da Média</title>

    </head>

    <body>

        <p><b>Nome do Aluno : <b><?= $nome ?></p>
        <p><b>Nomta 01 : <b><?= $nota01 ?></p>
        <p><b>Nomta 02 : <b><?= $nota02 ?></p>
        <p><b>Nomta 03 : <b><?= $nota03 ?></p>
        <p><b>Média : <b><?= $media ?></p>

        <?php if($media >= 7): ?>
            <p>Aprovado!</p>
        <?php else: ?>
            <p>Reprovado</p>
        <?php endif ?>

        <?php if($media == 10): ?>
            <p>Você atingiu a nota MÁXIMA !!! </p>   
        <?php endif ?>
       

    </body>

</html>


