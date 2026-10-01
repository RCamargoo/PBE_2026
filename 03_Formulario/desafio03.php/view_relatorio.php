<!DOCTYPE html>

<html lang="pt-br">

<head>

    <meta charset="UTF-8">

    <title>Relatório</title>

</head>

<body style="background-color: #1c1919ff; color: white; text-align: center; ">


    <h1 style="color: red ;">--CinePrime--</h1>

    <img width="30%" src="02.png">

    <h1>Relatório da Compra</h1>

    <h2 style="color: red ;">Cliente:</h2>

    <p>Nome: <?php echo $nome; ?></p>

    <p>Idade: <?php echo $idade; ?></p>

    <h3 style="color: red ;">Compra:</h3>

    <p>Filme: <?php echo $filme; ?></p>

    <h3 style="color: red ;">Tipo:</h3>

    <p><?php echo $tipo; ?></p>

    <h3 style="color: red ;">Quantidade:</h3>

    <p> <?php echo $quantidade; ?></p>

    <h3 style="color: red ;">Pagamento:</h3>

    <p><?php echo $pagamento; ?></p>

    <h3>Filmes disponíveis:</h3>

    <?php

    foreach ($filmes as $filmeDisponivel) {

        echo "<p>$filmeDisponivel</p>";

    }

    ?>

    <h3 style="color: red ;">Valores</h3>

    <p style="color: red ;">
        Valor da compra:
        R$ <?php echo number_format($total, 2, ",", "."); ?>
    </p>

    <p style="color: #ff0000ff ;">
        Desconto:
        R$ <?php echo number_format($desconto, 2, ",", "."); ?>
    </p>

    <p>
        <strong style="color: red ;">
            <h2>Total:</h2>
            R$ <?php echo number_format($totalFinal, 2, ",", "."); ?>
        </strong>
    </p>

    <?php

    if ($quantidade >= 5) {

        echo "<p>Você comprou 5 ou mais ingressos.</p>";

    } else {

        echo "<p>Compra realizada com sucesso!</p>";

    }

    ?>
    
    <h1 style="color: red ;">Boa sessão 🍿</h1>

    

    <br>

    <a href="view.php" style="color: red ;">Clique aqui para Voltar</a>


</body>

</html>