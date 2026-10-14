<?php
// Carrega os dados compartilhados (filmes, preços etc.).
require_once "dados.php";

// A página inicial mostra apenas os 4 primeiros filmes (destaques).
// array_slice(array, início, quantidade) recorta um pedaço da lista.
$destaques = array_slice($filmes, 0, 4);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>CinePrime | Cinema</title>
<!-- CSS: todo o visual do site fica em style.css -->
<link rel="stylesheet" href="style.css">
</head>
<body>

<!-- ============ CABEÇALHO / MENU ============ -->
<header class="header">
  <div class="container nav">
    <a class="logo" href="index.php"><span>CP</span> CinePrime</a>
    <nav>
      <!-- A classe "active" destaca a página em que o usuário está -->
      <a class="active" href="index.php">Início</a>
      <a href="filmes.php">Filmes</a>
      <a href="view.php">Ingressos</a>
      <a href="#vantagens">Benefícios</a>
    </nav>
    <a class="btn btn-small" href="view.php">Comprar ingresso</a>
  </div>
</header>

<main>

<!-- ============ HERO (primeira dobra da página) ============ -->
<section class="hero">
  <div class="container hero-content">
    <div class="hero-text">
      <span class="eyebrow">A experiência começa aqui</span>
      <h1>Seu próximo filme começa no <strong>CinePrime.</strong></h1>
      <p>Encontre os melhores filmes, escolha seu horário e garanta seu ingresso de forma rápida e segura.</p>
      <div class="hero-actions">
        <a class="btn" href="filmes.php">Ver filmes em cartaz</a>
        <a class="btn btn-outline" href="view.php">Comprar ingresso</a>
      </div>
      <!-- Os números são calculados pelo PHP: se você adicionar um filme, atualiza sozinho -->
      <div class="stats">
        <div><strong><?= count($filmes) ?></strong><small>Filmes em cartaz</small></div>
        <div><strong><?= count($salas) ?></strong><small>Salas disponíveis</small></div>
        <div><strong>100%</strong><small>Experiência digital</small></div>
      </div>
    </div>
    <div class="hero-card">
      <div class="ticket-icon">🎟️</div>
      <span class="eyebrow">Ingressos</span>
      <h3>Escolha seu lugar.</h3>
      <p>Garanta sua sessão antes que os melhores lugares acabem.</p>
      <a href="view.php">Reservar agora →</a>
    </div>
  </div>
</section>

<!-- ============ FILMES EM DESTAQUE ============ -->
<section class="section">
  <div class="container">
    <div class="section-head">
      <div><span class="eyebrow">Programação</span><h2>Filmes em destaque</h2></div>
      <a href="filmes.php" class="link">Ver catálogo completo →</a>
    </div>

    <div class="movie-grid">
      <!-- foreach percorre a lista e cria um card HTML para cada filme -->
      <?php foreach ($destaques as $filme): ?>
        <article class="movie-card">
          <div class="poster">
            <!-- htmlspecialchars protege contra caracteres especiais/HTML malicioso -->
            <img src="<?= htmlspecialchars($filme["imagem"]) ?>"
                 alt="Pôster de <?= htmlspecialchars($filme["titulo"]) ?>"
                 loading="lazy" referrerpolicy="no-referrer">
            <span class="age"><?= $filme["idade"] ?> anos</span>
          </div>
          <div class="movie-info">
            <span class="tag"><?= htmlspecialchars($filme["categoria"]) ?></span>
            <h3><?= htmlspecialchars($filme["titulo"]) ?></h3>
            <p><?= $filme["duracao"] ?> • 2D</p>
            <!-- urlencode transforma o título em texto seguro para a URL.
                 O view.php lê esse valor e já deixa o filme selecionado. -->
            <a href="view.php?filme=<?= urlencode($filme["titulo"]) ?>" class="movie-link">Comprar ingresso →</a>
          </div>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ COMO FUNCIONA (explicação para o usuário) ============ -->
<section class="light-section" id="como-funciona">
  <div class="container">
    <div class="section-head">
      <div><span class="eyebrow">Passo a passo</span><h2>Como funciona</h2></div>
    </div>
    <div class="steps">
      <div class="step"><b>1</b><h3>Escolha o filme</h3><p>Navegue pelo catálogo, use a busca e os filtros de gênero e classificação.</p></div>
      <div class="step"><b>2</b><h3>Monte seu pedido</h3><p>Selecione data, horário, sala, tipo de ingresso e quantidade. O total aparece ao vivo.</p></div>
      <div class="step"><b>3</b><h3>Pague do seu jeito</h3><p>Pix, cartão ou dinheiro. No Pix você ganha 10% de desconto automaticamente.</p></div>
      <div class="step"><b>4</b><h3>Confira o resumo</h3><p>Ao final, você vê todos os dados da compra organizados em uma única tela.</p></div>
    </div>
  </div>
</section>

<!-- ============ BENEFÍCIOS ============ -->
<section class="section" id="vantagens">
  <div class="container">
    <div class="section-head"><div><span class="eyebrow">CinePrime</span><h2>Uma experiência completa</h2></div></div>
    <div class="benefit-grid">
      <div class="benefit"><span>📱</span><h3>Compra online</h3><p>Escolha filme, sessão e quantidade sem precisar enfrentar filas.</p></div>
      <div class="benefit"><span>💳</span><h3>Pagamento fácil</h3><p>Escolha entre Pix, cartão ou dinheiro e veja o desconto antes de finalizar.</p></div>
      <div class="benefit"><span>🍿</span><h3>Seu momento de lazer</h3><p>Organize sua sessão e aproveite o cinema com quem você gosta.</p></div>
      <div class="benefit"><span>🔒</span><h3>Dados organizados</h3><p>Suas informações ficam apresentadas de forma clara no resumo da compra.</p></div>
    </div>
  </div>
</section>

</main>

<footer>
  <div class="container footer">
    <div class="logo"><span>CP</span> CinePrime</div>
    <p>© 2026 CinePrime • Uma experiência de cinema.</p>
    <a href="view.php">Comprar ingresso</a>
  </div>
</footer>

</body>
</html>