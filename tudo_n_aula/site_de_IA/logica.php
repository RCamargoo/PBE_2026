<?php
/*
 * LÓGICA DA COMPRA
 * 1) Recebe os dados do formulário   2) Valida   3) Calcula   4) Mostra o resumo
 */
require_once "dados.php";

// Só aceita acesso vindo do formulário (POST). Se alguém abrir direto, volta ao formulário.
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: view.php");
    exit;
}

// Função que lê um campo do POST e remove espaços extras no começo/fim.
function campo($nome, $padrao = "") {
    return trim((string)($_POST[$nome] ?? $padrao));
}

// ---------- 1) RECEBENDO OS DADOS ----------
$nome       = campo("nome");
$email      = campo("email");
$telefone   = campo("telefone");
$idade      = (int)campo("idade");
$filme      = campo("filme");
$data       = campo("data");
$horario    = campo("horario");
$sala       = campo("sala");
$formato    = campo("formato", "2D");
// Normaliza os assentos: "f12, f13" vira a lista ["F12", "F13"].
// preg_split separa por vírgula, ponto e vírgula ou espaço; array_filter remove itens vazios.
$listaAssentos = array_filter(array_map("trim", preg_split("/[,;\s]+/", strtoupper(campo("assento")))));
$assento = implode(", ", $listaAssentos); // texto limpo que aparece no resumo
$tipo       = campo("tipo", "Inteira");
$quantidade = (int)campo("quantidade", "1");
$pagamento  = campo("pagamento");
$observacao = campo("observacao");
$termos     = isset($_POST["termos"]); // checkbox: existe no POST só se estiver marcado

// ---------- 2) VALIDAÇÃO ----------
// O HTML já valida, mas o usuário pode burlar o navegador. Por isso o PHP confere de novo.
$erros = [];

if ($nome === "") $erros[] = "Informe seu nome completo.";
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $erros[] = "Informe um e-mail válido.";
if ($idade < 1 || $idade > 120) $erros[] = "Informe uma idade válida.";

// Procura o filme na lista pelo título (array_column pega só os títulos).
$posicao = array_search($filme, array_column($filmes, "titulo"), true);
if ($posicao === false) {
    $erros[] = "Selecione um filme válido.";
} elseif ($idade < $filmes[$posicao]["idade"]) {
    // Regra simples de classificação (sem considerar menor acompanhado).
    $erros[] = "Este filme é indicado para maiores de " . $filmes[$posicao]["idade"] . " anos.";
}

if ($data === "" || $data < date("Y-m-d")) $erros[] = "Escolha uma data a partir de hoje.";
if (!in_array($horario, $horarios, true))   $erros[] = "Escolha um horário válido.";
if (!in_array($sala, $salas, true))         $erros[] = "Escolha uma sala válida.";
if (!in_array($formato, $formatos, true))   $erros[] = "Escolha um formato válido.";
if (!isset($precos[$tipo]))                 $erros[] = "Escolha um tipo de ingresso válido.";
if ($quantidade < 1 || $quantidade > 10)    $erros[] = "A quantidade deve ficar entre 1 e 10.";
// ---------- Validação dos assentos (só se o cliente informou algum) ----------
if (!empty($listaAssentos)) {

    // 1) Cada assento precisa existir na sala: letra da fileira + número de 1 a 20.
    foreach ($listaAssentos as $a) {
        $formatoOk = preg_match("/^([A-Z])(\d{1,2})$/", $a, $m);   // ex.: F12 => $m[1]="F", $m[2]="12"
        if (!$formatoOk || !in_array($m[1], $fileiras, true) || (int)$m[2] < 1 || (int)$m[2] > $assentosPorFileira) {
            $erros[] = "Assento \"$a\" inválido. Use fileiras {$fileiras[0]} a " . end($fileiras)
                     . " e números de 1 a $assentosPorFileira (ex.: F12).";
        }
    }

    // 2) A quantidade de assentos precisa ser igual à quantidade de ingressos.
    if (count($listaAssentos) !== $quantidade) {
        $erros[] = "Você comprou $quantidade ingresso(s), mas informou " . count($listaAssentos) . " assento(s).";
    }

    // 3) Não pode repetir o mesmo assento na mesma compra.
    if (count(array_unique($listaAssentos)) !== count($listaAssentos)) {
        $erros[] = "Há assentos repetidos. Informe um assento diferente para cada ingresso.";
    }
}
if (!in_array($pagamento, $pagamentos, true)) $erros[] = "Escolha uma forma de pagamento.";
if (!$termos) $erros[] = "É necessário aceitar os termos da compra.";

// ---------- 3) CÁLCULOS ----------
function calcularTotal($tipo, $quantidade, $precos) {
    return ($precos[$tipo] ?? 0) * $quantidade;   // preço unitário × quantidade
}
function calcularDesconto($total, $pagamento, $descontoPix) {
    return ($pagamento === "Pix") ? $total * $descontoPix : 0;  // só Pix tem desconto
}

$total      = calcularTotal($tipo, $quantidade, $precos);
$desconto   = calcularDesconto($total, $pagamento, $descontoPix);
$totalFinal = $total - $desconto;

// ---------- 4) MOSTRA O RESUMO (ou os erros) ----------
require_once "view_relatorio.php";
?>