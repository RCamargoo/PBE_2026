<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">

        <title>PowerFit</title>

    </head>

    <body>

        <h1>Matrícula na Academia PowerFit</h1>

        <form action="logica.php" method="POST">

            <h2>Dados do Aluno</h2>

            <label for="nome">Nome:</label><br>
            <input type="text" id="nome" name="nome" required>
            <br><br>

            <label for="peso">Peso (kg):</label><br>
            <input type="number" id="peso" name="peso" step="0.1" required>
            <br><br>

            <label for="altura">Altura (m):</label><br>
            <input type="number" id="altura" name="altura" step="0.01" required>
            <br><br>

            <h2>Dados da Matrícula</h2>

            <label for="plano">Plano:</label><br>
            <select id="plano" name="plano" required>
                <option value="">Selecione...</option>
                <option value="Básico">Básico - R$ 80,00</option>
                <option value="Plus">Plus - R$ 120,00</option>
                <option value="Premium">Premium - R$ 180,00</option>
            </select>
            <br><br>

            <label for="mes">Quantidade de meses:</label><br>
            <input type="number" id="meses" name="meses" min="1" max="12" required>
            <br><br>

            <h2>Modalidades Extras</h2>

            <input type="checkbox" name="modalidades[]" value="Natação">
            Natação - R$ 60,00
            <br>

            <input type="checkbox" name="modalidades[]" value="Funcional">
            Funcional - R$ 40,00
            <br>

            <input type="checkbox" name="modalidades[]" value="Lutas">
            Lutas - R$ 50,00
            <br><br>

            <button type="submit">Gerar Matrícula</button>

        </form>

    </body>

</html>