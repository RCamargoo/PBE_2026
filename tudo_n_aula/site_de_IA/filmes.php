<?php
require_once "dados.php";

// Monta a lista de gêneros automaticamente a partir dos filmes.
// "Ação • Aventura" vira ["Ação", "Aventura"]; array_unique remove repetidos.
$generos = [];
foreach ($filmes as $f) {
    foreach (explode(" • ", $f["categoria"]) as $g) { $generos[] = $g; }
}
$generos = array_unique($generos);
sort($generos); // ordem alfabética
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>Filmes | CinePrime</title>
<link rel="stylesheet" href="style.css">
</head>
<body>

<header class="header">
  <div class="container nav">
    <a class="logo" href="index.php"><span>CP</span> CinePrime</a>
    <nav>
      <a href="index.php">Início</a>
      <a class="active" href="filmes.php">Filmes</a>
      <a href="view.php">Ingressos</a>
      <a href="index.php#vantagens">Benefícios</a>
    </nav>
    <a class="btn btn-small" href="view.php">Comprar ingresso</a>
  </div>
</header>

<section class="page-banner">
  <div class="container">
    <span class="eyebrow">Programação</span>
    <h1>Filmes em cartaz</h1>
    <p>Confira os títulos disponíveis no CinePrime e escolha sua próxima sessão.</p>
  </div>
</section>

<main class="section">
  <div class="container">

    <!-- ============ FILTROS ============
         Funcionam com JavaScript (script.js): não recarregam a página. -->
    <div class="filter-bar">
      <input type="text" id="busca" placeholder="🔎  Buscar filme pelo nome...">

      <select id="filtro-genero">
        <option value="">Todos os gêneros</option>
        <?php foreach ($generos as $g): ?>
          <option value="<?= htmlspecialchars(mb_strtolower($g)) ?>"><?= htmlspecialchars($g) ?></option>
        <?php endforeach; ?>
      </select>

      <select id="filtro-idade">
        <option value="">Qualquer classificação</option>
        <option value="10">Até 10 anos</option>
        <option value="12">Até 12 anos</option>
        <option value="14">Até 14 anos</option>
        <option value="16">Até 16 anos</option>
      </select>
    </div>

    <!-- Dica explicativa para o usuário -->
    <p class="hint">💡 Dica: digite parte do nome ou combine os filtros. <span id="contador"><?= count($filmes) ?> filmes encontrados.</span></p>

    <!-- ============ CARDS ============
         Cada card guarda dados em atributos data-* para o JavaScript filtrar. -->
    <div class="catalog-grid" id="catalogo">
      <?php foreach ($filmes as $f): ?>
        <article class="catalog-card"
                 data-titulo="<?= htmlspecialchars(mb_strtolower($f["titulo"])) ?>"
                 data-generos="<?= htmlspecialchars(mb_strtolower($f["categoria"])) ?>"
                 data-idade="<?= $f["idade"] ?>">
          <div class="catalog-poster">
            <img src="<?= htmlspecialchars($f["imagem"]) ?>"
                 alt="Pôster de <?= htmlspecialchars($f["titulo"]) ?>"
                 loading="lazy" referrerpolicy="no-referrer">
            <b><?= $f["idade"] ?> anos</b>
          </div>
          <div class="catalog-body">
            <span class="tag"><?= htmlspecialchars($f["categoria"]) ?></span>
            <h3><?= htmlspecialchars($f["titulo"]) ?></h3>
            <p>⏱ <?= $f["duracao"] ?> &nbsp;•&nbsp; 2D</p>
            <div class="session-row">
              <span>Hoje</span>
              <!-- Leva o título para o formulário já selecionado -->
              <a href="view.php?filme=<?= urlencode($f["titulo"]) ?>">Ver sessões →</a>
            </div>
          </div>
        </article>
      <?php endforeach; ?>
    </div>

    <!-- Mensagem exibida quando nenhum filme combina com os filtros -->
    <div class="empty-state" id="vazio" hidden>
      <span>🎬</span>
      <h3>Nenhum filme encontrado</h3>
      <p>Tente outro nome ou limpe os filtros.</p>
    </div>

  </div>
</main>

<footer>
  <div class="container footer">
    <div class="logo"><span>CP</span> CinePrime</div>
    <p>© 2026 CinePrime</p>
    <a href="view.php">Comprar ingresso</a>
  </div>
</footer>

<!-- JavaScript no final da página: o HTML já existe quando ele roda -->
<script src="script.js"></script>
</body>
</html>