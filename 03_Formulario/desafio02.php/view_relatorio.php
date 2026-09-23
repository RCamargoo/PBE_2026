<!DOCTYPE html>

<html lang="pt_br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Document</title>

    </head>

    <body>

        <h1>Resumo da Compra</h1>

        <h2>Nome:  <?= $nome ?> <h2>

        <table border=1>

            <thead>

                <tr>

                    <th>Produto</th>
                    <th>Preço</th>
                    <th>Quantidade</th>
                    <th>Subtotal</th>
    
                </tr>

            </thead>
            <tbody>
                
                <?php foreach ($produtos as $produto): ?>

                    <tr>

                        <td><?= $produto['produto'] ?></td>
                        <td><?= $produto['preco'] ?></td>
                        <td><?= $produto['quantidade'] ?></td>
                        <td><?= $produto['subtotal'] ?></td>
    
                    </tr>

                <?php endforeach ?>
            
            </tbody>

        </table>

        <br>

        <p><b>Desconto: </b> <?= $valor_desconto ?></p>

        <?php if($desconto > 0): ?>
            <h3>Parabéns você ganhou um desconto!!!</h3>

        <?php endif ?>

        <p><h2>Total da Compra: <h2><?= $total ?></p>

    </body>

</html>