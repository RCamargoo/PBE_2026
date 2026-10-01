<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Resumo da compra | CinePrime</title>
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
    </nav>
    <a class="btn btn-small" href="view.php">Nova compra</a>
  </div>
</header>

<main class="section">
  <div class="container report">

<?php if (!empty($erros)): ?>
    <!-- ===== TELA DE ERRO: aparece se alguma validação do logica.php falhou ===== -->
    <div class="success error">!</div>
    <span class="eyebrow">Atenção</span>
    <h1>Não foi possível concluir</h1>
    <p class="report-intro">Corrija os pontos abaixo e tente novamente.</p>

    <div class="alert">
      <ul>
        <?php foreach ($erros as $erro): ?>
          <li><?= htmlspecialchars($erro) ?></li>
        <?php endforeach; ?>
      </ul>
    </div>

    <div class="report-actions">
      <!-- history.back() volta ao formulário mantendo o que foi digitado -->
      <a class="btn" href="javascript:history.back()">← Voltar e corrigir</a>
    </div>

<?php else: ?>
    <!-- ===== TELA DE SUCESSO ===== -->
    <div class="success">✓</div>
    <span class="eyebrow">Compra concluída</span>
    <h1>Relatorio da sua compra</h1>
    <p class="report-intro">Confira abaixo todos os dados informados.</p>

    <div class="report-grid">

      <section class="report-box">
        <h2>Cliente</h2>
        <!-- htmlspecialchars: nunca imprima dados do usuário sem ele -->
        <p><b>Nome:</b> <?= htmlspecialchars($nome) ?></p>
        <p><b>E-mail:</b> <?= htmlspecialchars($email) ?></p>
        <p><b>Telefone:</b> <?= htmlspecialchars($telefone ?: "Não informado") ?></p>
        <p><b>Idade:</b> <?= $idade ?> anos</p>
      </section>

      <section class="report-box">
        <h2>Sessão</h2>
        <p><b>Filme:</b> <?= htmlspecialchars($filme) ?></p>
        <!-- strtotime + date convertem 2026-10-05 para 05/10/2026 -->
        <p><b>Data:</b> <?= date("d/m/Y", strtotime($data)) ?></p>
        <p><b>Horário:</b> <?= htmlspecialchars($horario) ?></p>
        <p><b>Sala:</b> <?= htmlspecialchars($sala) ?></p>
        <p><b>Formato:</b> <?= htmlspecialchars($formato) ?></p>
        <p><b>Assento:</b> <?= htmlspecialchars($assento ?: "Não informado") ?></p>
      </section>

      <section class="report-box price-box">
        <h2>Pagamento</h2>
        <p><b>Ingresso:</b> <?= htmlspecialchars($tipo) ?></p>
        <p><b>Quantidade:</b> <?= $quantidade ?></p>
        <p><b>Pagamento:</b> <?= htmlspecialchars($pagamento) ?></p>

        <div class="price-row"><span>Subtotal</span><strong>R$ <?= dinheiro($total) ?></strong></div>
        <!-- A linha de desconto só aparece quando existe desconto (Pix) -->
        <?php if ($desconto > 0): ?>
          <div class="price-row discount"><span>Desconto Pix</span><strong>- R$ <?= dinheiro($desconto) ?></strong></div>
        <?php endif; ?>
        <div class="price-total"><span>Total</span><strong>R$ <?= dinheiro($totalFinal) ?></strong></div>
      </section>

    </div>

    <?php if ($observacao !== ""): ?>
      <p class="report-note"><b>Observação:</b> <?= htmlspecialchars($observacao) ?></p>
    <?php endif; ?>

    <div class="report-actions">
      <a class="btn" href="view.php">Fazer nova compra</a>
      <a class="btn btn-outline" href="index.php">Voltar ao início</a>
    </div>
<?php endif; ?>

  </div>
</main>

<footer>
  <div class="container footer">
    <div class="logo"><span>CP</span> CinePrime</div>
    <p>Obrigado por escolher o CinePrime! 🍿</p>
  </div>
</footer>

</body>
</html>