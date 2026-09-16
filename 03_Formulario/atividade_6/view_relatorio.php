<!DOCTYPE html>

<html lang="pt_br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Cinema</title>

    </head>

    <body>

        <h1> Compra Ingressos </h1>

        <p><b>Nome : <b><?= $nome ?></p>
        <p><b>Nome do filme : <b><?= $nome_filme ?></p>
        <p><b>Quantidade : <b><?= $quantidade ?></p>
        <p><b>Tipo ingresso : <b><?= $tipo_ingresso ?></p>
        <p><b>Total : <b><?= $total ?></p>

        <?php if($quantidade >= 10): ?>
            <h2>Parabéms você ganhou um desconto de 10%</h2>
        <?php endif ?>

    </body>

</html> 