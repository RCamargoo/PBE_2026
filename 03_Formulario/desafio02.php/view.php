<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Compra</title>

    </head>

    <body>

        <h1>Carrinho de compras</h1>

        <br>

        <h2>Dados do Cliente</h2>

        <form action="logica.php" method="POST">

            <label for=""><h3>Nome: </h3></label>
            <input type="text" name="nome" require >
            <br>

            <h1>Produto 1</h1>

            <label for=""><h4>Nome do produto: </h4></label>
            <input type="text" name="nome_produto1" >

            <label for=""><h4>Preço: </h4></label>
            <input type="number" name="preco1">

            <label for=""><h4>Quantidade: </h4></label>
            <input type="number" name="quantidade1">

            <h1>Produto 2</h1>

            <label for=""><h4>Nome do produto: </h4></label>
            <input type="text" name="nome_produto2" >

            <label for=""><h4>Preço: </h4></label>
            <input type="number" name="preco2">

            <label for=""><h4>Quantidade: </h4></label>
            <input type="number" name="quantidade2">

            <h1>Produto 3</h1>

            <label for=""><h4>Nome do produto: </h4></label>
            <input type="text" name="nome_produto3" >

            <label for=""><h4>Preço: </h4></label>
            <input type="number" name="preco3">

            <label for=""><h4>Quantidade: </h4></label>
            <input type="number" name="quantidade3">

            <br><br>

            <button type="submit">Finalizar Compra</button>

        </form> 
    
    </body>

</html>