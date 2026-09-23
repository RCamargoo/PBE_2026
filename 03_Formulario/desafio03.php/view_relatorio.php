<?php

require_once "logica.php";

$nome = $_POST["nome"];
$idade = $_POST["idade"];
$filme = $_POST["filme"];
$tipo = $_POST["tipo"];
$quantidade = $_POST["quantidade"];
$pagamento = $_POST["pagamento"];

$total = calcularTotal($tipo, $quantidade);

$desconto = calcularDesconto($total, $pagamento);

$totalFinal = $total - $desconto;

$filmes = [
    "Homem-Aranha: Um Novo Dia",
    "A Odisseia",
    "No Limite da Justiça",
    "Resident Evil",
    "One Piece – O Filme",
    "Vingadores: Ultimato Encore",
    "Minha Melhor Amiga",
    "Coração Selvagem",
    "Digger"
];

?>

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

    <h2>Cliente:</h2>

    <p>Nome: <?php echo $nome; ?></p>

    <p>Idade: <?php echo $idade; ?></p>

    <h2>Compra:</h2>

    <p>Filme: <?php echo $filme; ?></p>

    <p>Tipo: <?php echo $tipo; ?></p>

    <p>Quantidade: <?php echo $quantidade; ?></p>

    <p>Pagamento: <?php echo $pagamento; ?></p>

    <h3>Filmes disponíveis:</h3>

    <?php

    foreach ($filmes as $filmeDisponivel) {

        echo "<p>$filmeDisponivel</p>";

    }

    ?>

    <h3>Valores</h3>

    <p>
        Valor da compra:
        R$ <?php echo number_format($total, 2, ",", "."); ?>
    </p>

    <p>
        Desconto:
        R$ <?php echo number_format($desconto, 2, ",", "."); ?>
    </p>

    <p>
        <strong>
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

    <br>

    <a href="view.php" style="color: red ;">Clique aqui para Voltar</a>


</body>

</html>