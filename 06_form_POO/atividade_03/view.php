
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Funcionário</title>
</head>

<body>

    <h1>Gerar Holerite</h1>

    <form action="logica.php" method="POST">

        <label>Nome:</label>
        <input type="text" name="nome" required>
        <br><br>

        <label>Cargo:</label>
        <select name="cargo" required>
            <option value="">Selecione</option>
            <option value="Auxiliar">Auxiliar</option>
            <option value="Técnico">Técnico</option>
            <option value="Analista">Analista</option>
        </select>
        <br><br>

        <label>Horas extras:</label>
        <input type="number" name="horasExtras" min="0" required>
        <br><br>

        <label>Utiliza vale-transporte?</label>
        <br>

        <input type="radio" name="valeTransporte" value="Sim" required>
        Sim

        <input type="radio" name="valeTransporte" value="Não">
        Não

        <br><br>

        <button type="submit">Gerar Holerite</button>

    </form>

</body>
</html>
