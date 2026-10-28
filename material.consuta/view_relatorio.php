
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório CinePrime</title>
</head>

<body style="background-color: #1c1919; color: white; text-align: center;">

    <h1 style="color: red;">--CinePrime--</h1>

    <img width="20%" src="02.png">

    <hr>

    <h1>🎟️ Relatório da Compra 🎟️</h1>

    <h2 style="color: red;">Dados do Cliente e da Compra</h2>

    <table border="1" cellpadding="12"
        style="margin: auto; text-align: center; border-collapse: collapse; width: 70%;">

        <tr style="background-color: #8b0000;">
            <th>Informação</th>
            <th>Dados</th>
        </tr>

        <tr>
            <td>Nome do cliente</td>
            <td><?php echo $nome; ?></td>
        </tr>

        <tr>
            <td>Idade</td>
            <td><?php echo $idade; ?> anos</td>
        </tr>

        <tr>
            <td>Filme escolhido</td>
            <td><?php echo $filme; ?></td>
        </tr>

        <tr>
            <td>Tipo de ingresso</td>
            <td><?php echo ucfirst($tipo); ?></td>
        </tr>

        <tr>
            <td>Quantidade</td>
            <td><?php echo $quantidade; ?></td>
        </tr>

        <tr>
            <td>Forma de pagamento</td>
            <td><?php echo $pagamento; ?></td>
        </tr>

        <tr>
            <td>Valor da compra</td>
            <td>
                R$ <?php echo number_format($total, 2, ",", "."); ?>
            </td>
        </tr>

        <tr>
            <td>Desconto</td>
            <td style="color: lightgreen;">
                R$ <?php echo number_format($desconto, 2, ",", "."); ?>
            </td>
        </tr>

        <tr style="background-color: #8b0000;">
            <th>Total a pagar</th>
            <th>
                R$ <?php echo number_format($totalFinal, 2, ",", "."); ?>
            </th>
        </tr>

    </table>

    <br>

    <h2 style="color: red;">Filmes disponíveis</h2>

    <table border="1" cellpadding="10"
        style="margin: auto; border-collapse: collapse;">

        <tr style="background-color: #8b0000;">
            <th>Número</th>
            <th>Nome do filme</th>
        </tr>

        <?php

        $numero = 1;

        foreach ($filmes as $filme_disponivel) {
            echo "<tr>";
            echo "<td>$numero</td>";
            echo "<td>$filme_disponivel</td>";
            echo "</tr>";

            $numero++;
        }

        ?>

    </table>

    <br>

    <?php

    if ($quantidade >= 5) {
        echo "<h3 style='color: yellow;'>Você comprou 5 ou mais ingressos!</h3>";
    } else {
        echo "<h3 style='color: lightgreen;'>Compra realizada com sucesso!</h3>";
    }

    ?>

    <h1 style="color: red;">Boa sessão! 🍿</h1>

    <br>

    <a href="view.php" style="color: red;">
        Voltar para a compra
    </a>

</body>

</html>
