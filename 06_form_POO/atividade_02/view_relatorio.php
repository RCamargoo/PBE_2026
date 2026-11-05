<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <title>Relatório</title>

    </head>

    <body>
        
        <h1>Produto Cadastrado</h1>

        <p>Nome: <?= $aluno->getNome() ?></p>
        <p>Nome: <?= $aluno->getTurma() ?></p>

        <table border="1">

            <tr>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Média</th>
            </tr>

            <tr>
                <td><?= $aluno->getNota1() ?></td>
                <td><?= $aluno->getNota2() ?></td>
                <td><?= $aluno->getNota3() ?></td>
                <td><?= number_format($aluno->calcularMedia(), 1, ',', '.') ?></td>
            </tr>

        </table>


        <p>Nome: <?= $aluno->getFaltas() ?></p>
        <p>Nome: <?= number_format($aluno->calcularFrequencia(), 1, ',', '.')  ?> % </p>
        <h2>Situação: <?= $aluno->situacao()  ?></h2>


        <?php if ($aluno->situacao() == "Aprovado"): ?>

            <p>Parabéns, continue assim!</p>

        <?php  else: ?>

            <p>Atenção: procure o professor para saber os próximos passos.</p>

        <?php endif ?>

        <a href="view.php"> Cadastrar </a>

    </body>

</html> 