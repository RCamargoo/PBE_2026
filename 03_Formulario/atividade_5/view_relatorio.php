<!DOCTYPE html>

<html lang="pt_br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Calculo do IMC</title>

    </head>

    <body>

        <h1> Resultado do IMC </h1>

        <p><b>Nome : <b><?= $nome ?></p>
        <p><b>Peso : <b><?= $peso ?>(kg)</p>
        <p><b>Altura : <b><?= $altura ?>(m)</p>
        <p><b>Resultado do IMC : <b><?= $imc ?></p>

        <?php if($imc < 18.5): ?>
            <p>Abaixo do peso</p>

        <?php elseif($imc <= 24.9): ?>
            <p>Peso normal</p>

        <?php elseif($imc <= 29.9): ?>
            <p>Sobrepeso</p>

        <?php else: ?>
            <p>Obesidade</p>
        <?php endif ?>

    </body>

</html> 