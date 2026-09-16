<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Calculadora de Média</title>

    </head>

    <body>

        <h1>Calculadora de salário Líquido</h1>

        <form action="logica.php" method="POST">

            <label for=""><h3>Nome do Aluno: </h3></label>
            <input type="text" name="nome" require >
            <br>

            <label for=""><h3>Nota 01: </h3></label>
            <input type="number" name="nota01" require step = "0.01">
            <br>

            <label for=""><h3>Nota 02: </h3></label>
            <input type="number" name="nota02"  require step = "0.01">
            <br><br>

            <label for=""><h3>Nota 03</h3></label>
            <input type="number" name="nota03"  require step = "0.01">
            <br><br>

            <button type="submit">Calcular Média</button>

        </form> 
    
    </body>

</html>