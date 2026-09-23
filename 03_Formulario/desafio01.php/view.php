<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Salario</title>

    </head>

    <body>

        <h1>Calculadora de salário Líquido</h1>

        <form action="logica.php" method="POST">

            <label for=""><h3>Nome do Funcionário: </h3></label>
            <input type="text" name="Nome">
            <br>

            <label for=""><h3>Salario Bruto:</h3></label>
            <input type="number" name="salario_bruto">
            <br>

            <label for=""><h3>Horas Extras: </h3></label>
            <input type="number" name="horas_extras">
            <br><br>

            <label for=""><h3>Benefícios :</h3></label>
            <input type="number" name="beneficios">
            <br><br>

            <label for=""><h3>Descontos :</h3></label>
            <input type="number" name="descontos">
            <br><br>

            <button type="submit">Calcular Salário</button>

        </form> 
    
    </body>

</html>