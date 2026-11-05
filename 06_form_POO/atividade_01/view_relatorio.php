<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <title>Relatório</title>

    </head>

    <body>
        
        <h1>Produto Cadastrado</h1>

        <p>Nome: <?= $produto->getNome() ?></p>
        <p>Quantidade: <?= $produto->getQuantidade() ?></p>
        <p>Preço: <?= $produto->getPreco() ?></p>
        <p>Total: R$ <?= number_format($produto->calcularTotal(), 2, ',', '.') ?></p>
        <p>Desconto : <?= $produto->calcularDesconto() ?> %</p>
        <p>Total com desconto: <?= number_format($produto->calcularTotalComDesconto(), 2, ',', '.') ?></p>

        <?php if($quantidade < 5): ?>
            <h3>Dica comprando 10 unidades ou mais você ganha um desconto de 10%</h3>
        <?php else: ?>
            <h3>Parabéns! Você ganhou 10% de Desconto.</h3>
        <?php endif ?>

        <a href="view.php"> Cadastrar </a>

    </body>

</html> 