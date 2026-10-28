<!DOCTYPE html>
<html lang="pt-br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Sistema de Contrato de Locação</title>

    </head>

    <body>

        <h1>Locadora  de Veículos</h1>

        <h2>Dados do Cliente</h2>

        <form action="logica.php" method="POST">

            <label for="">Nome do cliente: </label><br>
            <input  type="text" name="nome" placeholder="Ex: Maria Silva" required>
            <br><br>

            <label for="">Email do cliente: </label><br>
            <input  type="email" name="email" placeholder="Ex: maria.silva@gmail.com" required>
            <br><br>

            <h2>Dados da Locação</h2>

            <label for=""><b>Data de retirada: </b></label><br>
            <input  type="date" name="data" required>
            <br><br>

            <label for=""><b>Quantidade de dias: </b></label><br>
            <input  type="nunber" name="qtd" placeholder="Ex: 123..." required>
            <br><br>

            <label for=""><b>Categoria do veículo:</b></label>
            <br>

                <select name="ctg" required>
        
                    <option name="">Selecione...</option>
                    <option name="grande">Grande - R$ 250,00/Dia</option>
                    <option name="intermediario">Intermediario - R$150/Dia</option>
                    <option name="pequeno">Pequeno - R$100/Dia</option>

                </select >
                <br><br>

                <h2>Adicionais</h2>
                <label><b>Seguro total (R$ 40,00/dia):</b></label><br>
                <input type="radio" name="seguro_total" id="sim" value="sim">
                <label for="sim">Sim</label>

                <input type="radio" name="seguro_total" id="nao" value="não" checked>
                <label for="nao">Não</label><br><br>


                <label><b>GPS (R$ 15,00/dia):</b></label><br>
                <input type="radio" name="gps" id="sim" value="sim">
                <label for="sim">Sim</label>

                <input type="radio" name="gps" id="nao" value="não" checked>
                <label for="nao">Não</label><br><br>


                <label><b>Cadeirinha infantil (R$ 20,00/dia):</b></label><br>
                <input type="radio" name="cadeirinha_infantil" id="sim" value="sim">
                <label for="sim">Sim</label>
                <br><br>

                <input type="radio" name="cadeirinha_infantil" id="nao" value="não" checked>
                <label for="nao">Não</label><br><br>
                <br><br>

                <button type="submit">Gerar Contrato</button>

        </form>

    </body>

</html>