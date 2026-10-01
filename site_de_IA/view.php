<?php
require_once "dados.php";

// Se o usuário veio de "Comprar ingresso" de um filme, a URL tem ?filme=Título.
// $_GET lê esse valor; "?? ''" evita erro se ele não existir.
$filmeEscolhido = $_GET["filme"] ?? "";

// Data mínima do campo de data = hoje (impede escolher datas passadas).
$hoje = date("Y-m-d");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Ingressos | CinePrime</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
  <div class="container nav">
    <a class="logo" href="index.php"><span>CP</span> CinePrime</a>
    <nav>
      <a href="index.php">Início</a>
      <a href="filmes.php">Filmes</a>
      <a class="active" href="view.php">Ingressos</a>
      <a href="index.php#vantagens">Benefícios</a>
    </nav>
    <a class="btn btn-small" href="filmes.php">Ver filmes</a>
  </div>
</header>

<section class="page-banner">
  <div class="container">
    <span class="eyebrow">Compra de ingressos</span>
    <h1>Reserve sua sessão</h1>
    <p>Preencha os dados abaixo para montar seu pedido. Os campos com * são obrigatórios.</p>
  </div>
</section>

<main class="section">
  <div class="container purchase-layout">

    <!-- FORMULÁRIO: envia os dados para logica.php via POST (não aparecem na URL) -->
    <form class="form-card" id="form-compra" action="logica.php" method="POST">

      <!-- ===== 01 • DADOS DO CLIENTE ===== -->
      <div class="form-title">
        <div><span class="eyebrow">01 • Seus dados</span><h2>Informações do cliente</h2></div>
        <span class="required">* Obrigatório</span>
      </div>
      <div class="form-grid">
        <!-- O atributo "name" é o nome que o PHP usa: $_POST["nome"] -->
        <label>Nome completo *
          <input type="text" name="nome" placeholder="Digite seu nome" required>
        </label>
        <label>E-mail *
          <input type="email" name="email" placeholder="seuemail@email.com" required>
        </label>
        <label>Telefone
          <input type="tel" name="telefone" placeholder="(00) 00000-0000">
        </label>
        <label>Idade *
          <input type="number" name="idade" min="1" max="120" placeholder="Sua idade" required>
          <small class="field-hint">Usada para conferir a classificação indicativa do filme.</small>
        </label>
      </div>

      <!-- ===== 02 • SESSÃO ===== -->
      <div class="form-title second">
        <div><span class="eyebrow">02 • Sessão</span><h2>Escolha seu filme</h2></div>
      </div>
      <div class="form-grid">
        <label>Filme *
          <select name="filme" id="filme" required>
            <option value="">Selecione um filme</option>
            <?php foreach ($filmes as $f): ?>
              <!-- "selected" marca o filme que veio pela URL -->
              <option value="<?= htmlspecialchars($f["titulo"]) ?>"
                <?= ($f["titulo"] === $filmeEscolhido) ? "selected" : "" ?>>
                <?= htmlspecialchars($f["titulo"]) ?> (<?= $f["idade"] ?> anos)
              </option>
            <?php endforeach; ?>
          </select>
        </label>
        <label>Data da sessão *
          <input type="date" name="data" min="<?= $hoje ?>" required>
        </label>
        <label>Horário *
          <select name="horario" required>
            <option value="">Escolha um horário</option>
            <?php foreach ($horarios as $h): ?><option><?= $h ?></option><?php endforeach; ?>
          </select>
        </label>
        <label>Sala *
          <select name="sala" required>
            <?php foreach ($salas as $s): ?><option><?= $s ?></option><?php endforeach; ?>
          </select>
        </label>
        <label>Formato
          <select name="formato">
            <?php foreach ($formatos as $fm): ?><option><?= $fm ?></option><?php endforeach; ?>
          </select>
        </label>
       <label>Assento
        <input type="text" name="assento" placeholder="Ex.: F12 ou F12, F13">
          <!-- Explicação para o cliente sobre como preencher -->
        <small class="field-hint">
         Cada sala tem <?= $capacidadeSala ?> assentos (fileiras <?= $fileiras[0] ?> a <?= end($fileiras) ?>,
         números 1 a <?= $assentosPorFileira ?>). Informe um assento por ingresso, separados por vírgula.
        </small>
      </label>
      </div>

      <!-- ===== 03 • INGRESSOS E PAGAMENTO ===== -->
      <div class="form-title second">
        <div><span class="eyebrow">03 • Ingressos</span><h2>Quantidade e categoria</h2></div>
      </div>
      <div class="form-grid">
        <label>Tipo de ingresso *
          <select name="tipo" id="tipo" required>
            <?php foreach ($precos as $nomeTipo => $valor): ?>
              <option value="<?= $nomeTipo ?>"><?= $nomeTipo ?> — R$ <?= dinheiro($valor) ?></option>
            <?php endforeach; ?>
          </select>
        </label>
        <label>Quantidade *
          <input type="number" name="quantidade" id="quantidade" min="1" max="10" value="1" required>
        </label>
        <label>Forma de pagamento *
          <select name="pagamento" id="pagamento" required>
            <option value="Pix">Pix — <?= $descontoPix * 100 ?>% de desconto</option>
            <option value="Cartão">Cartão</option>
            <option value="Dinheiro">Dinheiro</option>
          </select>
        </label>
        <label>Observação
          <input type="text" name="observacao" placeholder="Alguma observação?">
        </label>
      </div>

      <div class="checks">
        <label><input type="checkbox" name="termos" required> Li e aceito os termos da compra *</label>
        <label><input type="checkbox" name="notificacoes"> Quero receber novidades e promoções do CinePrime.</label>
      </div>

      <button class="btn full" type="submit">Continuar para o resumo →</button>
    </form>

    <!-- ===== RESUMO AO VIVO (atualizado pelo script.js) ===== -->
    <aside class="summary-card">
      <span class="eyebrow">CinePrime</span>
      <h2>Seu pedido</h2>

      <div class="summary-line"><span>Filme</span><strong id="sum-filme">—</strong></div>
      <div class="summary-line"><span id="sum-tipo">1x Inteira</span><strong id="sum-subtotal">R$ 30,00</strong></div>
      <div class="summary-line discount"><span>Desconto Pix</span><strong id="sum-desc">- R$ 3,00</strong></div>
      <hr>
      <div class="price-total"><span>Total</span><strong id="sum-total">R$ 27,00</strong></div>

      <p>O valor é calculado automaticamente conforme o tipo, a quantidade e a forma de pagamento.</p>
      <div class="secure">🔒 Compra organizada e segura</div>
    </aside>

  </div>
</main>

<footer>
  <div class="container footer">
    <div class="logo"><span>CP</span> CinePrime</div>
    <p>© 2026 CinePrime</p>
    <a href="index.php">Voltar ao início</a>
  </div>
</footer>

<!-- Passa os preços do PHP para o JavaScript (json_encode converte array em JSON) -->
<script>
  const PRECOS = <?= json_encode($precos) ?>;
  const DESCONTO_PIX = <?= $descontoPix ?>;
</script>
<script src="script.js"></script>
</body>
</html>