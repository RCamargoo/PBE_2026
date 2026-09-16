<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculando IMC</title>

    </head>

    <body>

        <h1>Calculando IMC</h1>

        <form action="logica.php" method="POST">

            <label for=""><h3>Nome: </h3></label>
            <input type="text" name="nome" require >
            <br>

            <label for=""><h3>Peso (Kg): </h3></label>
            <input type="number" name="peso" require step = "0.1">
            <br>

            <label for=""><h3>Altura (M): </h3></label>
            <input type="number" name="altura"  require step = "0.01">
            <br><br>

            <button type="submit">Calcular Média</button>

        </form> 
    
    </body>

</html>