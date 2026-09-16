<!DOCTYPE html>

<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Atividade 01</title>

    </head>

    <body>

        <h1>Cadastro de Usuário</h1>

        <form action="logica.php" method="POST">

            <label for=""><h3>Nome :</h3></label>
            <input type="text" name="Nome">
            <br>

            <label for=""><h3>Email :</h3></label>
            <input type="email" name="Email">
            <br>

            <label for=""><h3>Senha :</h3></label>
            <input type="password" name="Senha">
            <br><br>

            <button type="submit">Cadastrar</button>
            <button type="reset">Limpar</button>

        </form> 
    
    </body>

</html>