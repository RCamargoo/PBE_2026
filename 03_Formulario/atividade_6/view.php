<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Compra de ingresso</title>

    </head>

    <body>

        <h1>Compra de ingressos </h1>

        <form action="logica.php" method="POST">

            <label for=""><h3>Nome: </h3></label>
            <input type="text" name="nome" require >
            <br>

            <label for=""><h3>Filme: </h3></label>
            <input type="text" name="nome_filme" >
            <br>

            <label for=""><h3>Quantidade de ingressos: </h3></label>
            <input type="number" name="quantidade">
            <br>

            <h3>Tipo de ingresso:</h3>

                <input type="radio" name="tipo_ingresso" id="inteira" value="Inteira">
                <label for="inteira">Inteira</label>
                <br>
                <input type="radio" name="tipo_ingresso" id="meia" value="Meia-entrada" checked>
                <label for="meia">Meia-entrada</label>

                <br><br>

            <button type="submit">Comprar ingressos</button>

        </form> 
    
    </body>

</html>