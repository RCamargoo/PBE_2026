
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CinePrime</title>
</head>

<body style="background-color: #1c1919; color: white; text-align: center;">

    <h1 style="color: red;">--CinePrime--</h1>

    <img width="20%" src="02.png">

    <hr>

    <h1>🎟️ Compra de Ingressos 🎟️</h1>

    <form action="logica.php" method="POST">

        <hr>

        <h3>Filmes disponíveis:</h3>

        <table border="1" cellpadding="10"
            style="margin: auto; text-align: center; border-collapse: collapse;">

            <tr>
                <td>
                    <img src="https://ingresso-a.akamaihd.net/prd/img/movie/homem-aranha-um-novo-dia/257f9c31-7c31-4bfd-b903-2b398f4830dc.webp"
                        width="120" height="160">
                    <h4>Homem-Aranha: Um Novo Dia</h4>
                </td>

                <td>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNM9EI3NBiosfIL-g-UbIVQqHH_QcKddFtK5BEhSCPKI-JzoP-mPHrNck&s=10"
                        width="120" height="160">
                    <h4>A Odisseia</h4>
                </td>

                <td>
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScMeV1yb9QrzBOiCa9DZSh-2Wh4lUtWxWdxJIltzOV6w&s=10"
                        width="120" height="160">
                    <h4>No Limite da Justiça</h4>
                </td>
            </tr>

            <tr>
                <td><h4>Resident Evil</h4></td>
                <td><h4>One Piece – O Filme</h4></td>
                <td><h4>Vingadores: Ultimato Encore</h4></td>
            </tr>

            <tr>
                <td><h4>Minha Melhor Amiga</h4></td>
                <td><h4>Coração Selvagem</h4></td>
                <td><h4>Digger</h4></td>
            </tr>

        </table>

        <hr>

        <h3>Filme:</h3>

        <select name="filme" required>
            <option value="Homem-Aranha: Um Novo Dia">Homem-Aranha: Um Novo Dia</option>
            <option value="A Odisseia">A Odisseia</option>
            <option value="No Limite da Justiça">No Limite da Justiça</option>
            <option value="Resident Evil">Resident Evil</option>
            <option value="One Piece – O Filme">One Piece – O Filme</option>
            <option value="Vingadores: Ultimato Encore">Vingadores: Ultimato Encore</option>
            <option value="Minha Melhor Amiga">Minha Melhor Amiga</option>
            <option value="Coração Selvagem">Coração Selvagem</option>
            <option value="Digger">Digger</option>
        </select>

        <h3>Seu nome:</h3>

        <input type="text" name="nome" placeholder="Digite seu nome..."
            minlength="3" maxlength="255" required>

        <h3>Idade:</h3>

        <input type="number" name="idade" min="18" max="100"
            placeholder="Digite sua idade..." required>

        <h3>Tipo de ingresso:</h3>

        <select name="tipo" required>
            <option value="inteira">Inteira - R$ 30,00</option>
            <option value="meia">Meia - R$ 15,00</option>
        </select>

        <h3>Quantidade:</h3>

        <input type="number" name="quantidade" min="1" max="200"
            placeholder="1 a 200" required>

        <br><br>

        <input type="checkbox" name="termos" required>
        Li e aceito os termos e condições

        <br>

        <input type="checkbox" name="notificacoes" value="sim">
        Aceito receber notificações

        <h3>Forma de pagamento:</h3>

        <select name="pagamento" required>
            <option value="Dinheiro">Dinheiro</option>
            <option value="Cartão">Cartão</option>
            <option value="Pix">Pix</option>
        </select>

        <br><br>

        <button type="submit" style="color: red;">
            Comprar
        </button>

    </form>

</body>

</html>
