<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">

        <title>POO com PHP</title>

    </head>

    <body>

        <form action="logica.php" method="POST">

            <label for="">Nome: </label>
            <input type="text" name="nome">
            <br><br>

            <label for="turma">Turma:</label>

            <select name="turma" id="turma">

                <option value="">Selecione uma turma</option>
                <option value="1A">1º </option>
                <option value="2A">2º </option>
                <option value="3A">3º </option>

            </select>
            <br><br>

            <label for="">Nota 1: </label>
            <input type="number" name="nota1" min="0" max="10" step="0.1">
            <br><br>

            <label for="">Nota 2: </label>
            <input type="number" name="nota2" min="0" max="10" step="0.1">
            <br><br>

            <label for="">Nota 3: </label>
            <input type="number" name="nota3" min="0" max="10" step="0.1">
            <br><br>

            <label for="">Numero de Faltas: </label>
            <input type="number" name="faltas" min="0" max="80">
            <br><br>

            <button type="submit"> gerar boletim </button>

        </form>
        
    </body>
 
</html>