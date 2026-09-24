<!DOCTYPE html>

<html lang="pt_br">

    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>Cinema</title>

    </head>

        <body style="background-color: #1c1919ff; color: white; text-align: center; ">  
            
            <h1 style="color: red ;">--CinePrime--</h1>

            <img width="30%" src="02.png">

            <hr>

            <h1>🎟️--Compra de Ingressos--🎟️</h1>
    
            <form action="Logica.php" method="POST">

            <hr>


            <h3>Filmes:</h3>

            <table border="1" cellpadding="10" style="margin: auto; text-align: center;">


                    <tr>

                        <td>

                            <img src="https://ingresso-a.akamaihd.net/prd/img/movie/homem-aranha-um-novo-dia/257f9c31-7c31-4bfd-b903-2b398f4830dc.webp" width="150" height="200">
                            <h3>Homem-Aranha: Um Novo Dia</h3>

                        </td>

                        <td>

                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNM9EI3NBiosfIL-g-UbIVQqHH_QcKddFtK5BEhSCPKI-JzoP-mPHrNck&s=10" width="150" height="200">
                            <h3>A Odisseia</h3>

                        </td>

                        <td>

                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScMeV1yb9QrzBOiCa9DZSh-2Wh4lUtWxWdxJIltzOV6w&s=10" width="150" height="200">
                            <h3>No Limite da Justiça</h3>

                        </td>

                    </tr>
                    <tr>

                        <td>

                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzEOImqRxZob9Kwc0LfjRAWqO1hQ1W4Ik4tze7DseSiCno1oxy-rFVsw0&s=10" width="150" height="200">
                            <h3>Resident Evil</h3>

                        </td>

                        <td>

                            <img src="https://ingresso-a.akamaihd.net/b2b/production/uploads/articles-content/d33a6aa9-840a-41b9-be3f-2f60485b70c0.jpg" width="150" height="200">
                            <h3>One Piece – O Filme</h3>

                        </td>

                        <td>

                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZuyEHSKWDIH4po2YjPUOYoeoLI6TlLPBRxZP5hkJegA&s" width="150" height="200">
                            <h3>Vingadores: Ultimato Encore </h3>

                        </td>

                    </tr>

                    <tr>

                        <td>

                            <img src="data:image/jpeg;base64,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" width="150" height="200">
                            <h3>Minha Melhor Amiga</h3>

                        </td>

                        <td>

                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7EETs_YEDB2JyEw1-3bRu2Xd_GESOgXsI9XQ1l7QkdKO3gM_Hl0hbAByd&s=10" width="150" height="200">
                            <h3>Coração Selvagem</h3>

                        </td>

                        <td>

                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIErJ8-3wbeKvGhS51XMpTZ9N75zA6FSjLYj9Omn0y1G9qrDgLgLD7PD4&s=10" width="150" height="200">
                            <h3>Digger</h3>

                        </td>

                    </tr>

                </table>
                <br>

            <select name="filme">
                <option >Homem-Aranha: Um Novo Dia</option>
                <option >A Odisseia</option>
                <option>No Limite da Justiça</option>
                <option>Resident Evil</option>
                <option>One Piece – O Filme</option>
                <option>Vingadores: Ultimato Encore (Relançamento)</option>
                <option>Minha Melhor Amiga</option>
                <option>Coração Selvagem</option>
                <option>Digger</option>

            </select>
            <br>

            <h3>Seu Nome:</h3>
            <input type="text" name="nome" placeholder="Nome..." minlength="3" maxlength="255" required>
            <br>

            <h3>Idade:</h3>
            <input type="number" name="idade" min="18" min="17" max="100"  placeholder="123..." required>
            <br>

            <h3>Tipo:</h3>
            <select name="tipo">
                <option value="Inteira">Inteira - R$ 30</option>
                <option value="Meia">Meia - R$ 15</option>
            </select>
            <br>

            <h3>Quantidade:</h3>
            <input type="number" name="quantidade" min="1" max="200"  placeholder="1 - 200..." required>
            <br><br>

            <input type="checkbox" id="termos" name="termos" required >li e aceito os termos e condições<br>
			<input type="checkbox" id="notificacoes" name="notificacoes">Aceita receber notificações<br>

       

            <h3>Forma de pagamento:</h3>
                <select name="pagamento">
                <option>Dinheiro</option>
                <option>Cartão</option>
                <option>Pix</option>
            </select>
            <br><br>

            <button style="color: red ;" type="submit">Comprar</button>

        </form>

    </body>

</html>