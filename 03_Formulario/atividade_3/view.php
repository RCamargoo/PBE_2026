<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atividade 01</title>

    </head>

    <body>

        <h1>Calculadora</h1>

        <form action="logica.php" method="POST">

            <label for=""><h3>Número 1 :</h3></label>
            <input type="number" name="numero1">
            
            <br><br>

            <label for=""><h3>Número 2 :</h3></label>
            <input type="number" name="numero2">
            
            <br><br>

            <h3>Operação :<h3>
            <select name="operacao" required>

                <option value="">Selecione uma operação</option>
                <option value="a">Adição(+)</option>
                <option value="s">Subtração(-)</option>
                <option value="m">Multiplicação(*)</option>
                <option value="d">Divisão(/)</option>

            </select>
            
            <br><br>

            <button type="submit">Calcular</button>
            <button type="reset">Limpar</button>

        </form> 
    
    </body>

</html>