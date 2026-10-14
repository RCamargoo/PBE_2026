<?php
/*
 * ARQUIVO DE DADOS
 * Aqui ficam as informações do cinema. Para adicionar um filme, preço
 * ou sala, basta editar este arquivo: todas as páginas se atualizam.
 * Páginas usam: require_once "dados.php";
 */

// Cada filme é um array associativo (chave => valor).
// "idade" é um NÚMERO, para podermos comparar com a idade do cliente.


// ---------- CAPACIDADE DAS SALAS ----------
// Cada sala tem 10 fileiras (A até J) com 20 cadeiras cada = 200 assentos.
$fileiras           = range("A", "J");   // ["A","B","C",...,"J"]
$assentosPorFileira = 20;                // cadeiras em cada fileira
$capacidadeSala     = count($fileiras) * $assentosPorFileira;  // 10 x 20 = 200


$filmes = [
    ["titulo"=>"Homem-Aranha: Um Novo Dia","categoria"=>"Ação • Aventura","duracao"=>"2h 18min","idade"=>12,"imagem"=>"https://ingresso-a.akamaihd.net/prd/img/movie/homem-aranha-um-novo-dia/257f9c31-7c31-4bfd-b903-2b398f4830dc.webp"],
    ["titulo"=>"A Odisseia","categoria"=>"Aventura • Drama","duracao"=>"2h 35min","idade"=>14,"imagem"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTNM9EI3NBiosfIL-g-UbIVQqHH_QcKddFtK5BEhSCPKI-JzoP-mPHrNck&s=10"],
    ["titulo"=>"No Limite da Justiça","categoria"=>"Ação • Suspense","duracao"=>"1h 58min","idade"=>16,"imagem"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcScMeV1yb9QrzBOiCa9DZSh-2Wh4lUtWxWdxJIltzOV6w&s=10"],
    ["titulo"=>"Resident Evil","categoria"=>"Terror • Ação","duracao"=>"1h 47min","idade"=>16,"imagem"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSzEOImqRxZob9Kwc0LfjRAWqO1hQ1W4Ik4tze7DseSiCno1oxy-rFVsw0&s=10"],
    ["titulo"=>"One Piece – O Filme","categoria"=>"Anime • Aventura","duracao"=>"2h 05min","idade"=>12,"imagem"=>"https://ingresso-a.akamaihd.net/b2b/production/uploads/articles-content/d33a6aa9-840a-41b9-be3f-2f60485b70c0.jpg"],
    ["titulo"=>"Vingadores: Ultimato Encore","categoria"=>"Ação • Ficção","duracao"=>"3h 01min","idade"=>12,"imagem"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRZuyEHSKWDIH4po2YjPUOYoeoLI6TlLPBRxZP5hkJegA&s"],
    ["titulo"=>"Minha Melhor Amiga","categoria"=>"Comédia • Drama","duracao"=>"1h 52min","idade"=>10,"imagem"=>"https://dm0fzqdup5a0q.cloudfront.net/wp-content/uploads/2025/12/23171516/noticia-completa-3.jpg"],
    ["titulo"=>"Coração Selvagem","categoria"=>"Romance • Drama","duracao"=>"2h 02min","idade"=>14,"imagem"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7EETs_YEDB2JyEw1-3bRu2Xd_GESOgXsI9XQ1l7QkdKO3gM_Hl0hbAByd&s=10"],
    ["titulo"=>"Digger","categoria"=>"Drama • Ação","duracao"=>"1h 49min","idade"=>16,"imagem"=>"https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRIErJ8-3wbeKvGhS51XMpTZ9N75zA6FSjLYj9Omn0y1G9qrDgLgLD7PD4&s=10"],
];

// Tabela de preços: tipo do ingresso => valor em reais.
$precos = ["Inteira" => 30, "Meia" => 15];

// Desconto aplicado ao pagar com Pix (0.10 = 10%).
$descontoPix = 0.10;

// Opções usadas nos <select> do formulário E na validação do servidor.
$horarios   = ["13:30", "15:45", "18:00", "20:30", "22:00"];
$salas      = ["Sala 01 • Prime", "Sala 02 • Confort", "Sala 03 • 3D", "Sala 04 • VIP"];
$formatos   = ["2D", "3D", "IMAX"];
$pagamentos = ["Pix", "Cartão", "Dinheiro"];

// Função auxiliar: formata número como dinheiro brasileiro (ex.: 1234.5 => "1.234,50").
function dinheiro($valor) {
    return number_format($valor, 2, ",", ".");
}
?>