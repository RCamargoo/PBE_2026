<?php

$n1 = $_POST['numero1'];
$n2 = $_POST['numero2'];
$operacao = $_POST['operacao'];

if ($operacao == "a") {
    echo $n1 + $n2;
}
elseif ($operacao == "s") {
    echo $n1 - $n2;
}
elseif ($operacao == "m") {
    echo $n1 * $n2;
}
elseif ($operacao == "d") {
    if ($n2 == 0) {
        echo "Não é possível dividir por zero.";
        
    } else {
        echo $n1 / $n2;
    }
}

?>