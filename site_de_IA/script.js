/*
 * SCRIPT DO CINEPRIME
 * Contém duas funções independentes:
 *  A) filtros do catálogo (filmes.php)
 *  B) resumo ao vivo do pedido (view.php)
 * Cada bloco só roda se os elementos existirem na página.
 */

/* ============ A) FILTROS DO CATÁLOGO ============ */
const campoBusca  = document.getElementById("busca");
const filtroGen   = document.getElementById("filtro-genero");
const filtroIdade = document.getElementById("filtro-idade");

if (campoBusca) {
  const cards    = document.querySelectorAll(".catalog-card");
  const vazio    = document.getElementById("vazio");
  const contador = document.getElementById("contador");

  function filtrar() {
    const texto  = campoBusca.value.toLowerCase().trim();
    const genero = filtroGen.value;               // já está em minúsculas
    const idade  = parseInt(filtroIdade.value) || 99; // sem filtro = aceita todas

    let visiveis = 0;
    cards.forEach(card => {
      const okTitulo = card.dataset.titulo.includes(texto);
      const okGenero = genero === "" || card.dataset.generos.includes(genero);
      const okIdade  = parseInt(card.dataset.idade) <= idade;

      const mostrar = okTitulo && okGenero && okIdade;
      card.hidden = !mostrar;      // esconde ou mostra o card
      if (mostrar) visiveis++;
    });

    vazio.hidden = visiveis > 0;   // mostra aviso se não sobrou nenhum
    contador.textContent = visiveis + (visiveis === 1 ? " filme encontrado." : " filmes encontrados.");
  }

  // Refaz o filtro a cada digitação ou mudança de seleção.
  [campoBusca, filtroGen, filtroIdade].forEach(el => {
    el.addEventListener("input", filtrar);
    el.addEventListener("change", filtrar);
  });
}

/* ============ B) RESUMO AO VIVO DO PEDIDO ============ */
const formCompra = document.getElementById("form-compra");

if (formCompra) {
  const selFilme = document.getElementById("filme");
  const selTipo  = document.getElementById("tipo");
  const inpQtd   = document.getElementById("quantidade");
  const selPag   = document.getElementById("pagamento");

  // Formata número como moeda brasileira: 27 => "27,00"
  const brl = v => v.toLocaleString("pt-BR", { minimumFractionDigits: 2, maximumFractionDigits: 2 });

  function atualizarResumo() {
    // Garante quantidade entre 1 e 10, mesmo que digitem algo inválido.
    const qtd = Math.min(10, Math.max(1, parseInt(inpQtd.value) || 1));
    const tipo = selTipo.value;
    const subtotal = (PRECOS[tipo] || 0) * qtd;
    const desconto = selPag.value === "Pix" ? subtotal * DESCONTO_PIX : 0;

    document.getElementById("sum-filme").textContent    = selFilme.value || "—";
    document.getElementById("sum-tipo").textContent     = qtd + "x " + tipo;
    document.getElementById("sum-subtotal").textContent = "R$ " + brl(subtotal);
    document.getElementById("sum-desc").textContent     = "- R$ " + brl(desconto);
    document.getElementById("sum-total").textContent    = "R$ " + brl(subtotal - desconto);

    // Esconde a linha de desconto quando não é Pix.
    document.querySelector(".summary-line.discount").style.display = desconto > 0 ? "flex" : "none";
  }

  [selFilme, selTipo, inpQtd, selPag].forEach(el => {
    el.addEventListener("input", atualizarResumo);
    el.addEventListener("change", atualizarResumo);
  });

  atualizarResumo(); // calcula uma vez ao abrir a página
}