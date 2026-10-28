<?php

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $data = $_POST['data'];
    $qtd = $_POST['qtd'];
    //ctg = categoria do veiculo
    $ctg = $_POST['ctg'];
    $seguro_total = $_POST['seguro_total'];
    $gps = $_POST['gps'];
    $cadeirinha_infantil = $_POST['cadeirinha_infantil'];
    $valor_total = 0;


     if($ctg == "grande"){
        $ctg = 250;
    }
    elseif($ctg == "intermediario"){
        $ctg = 150;
    }
    else{
        $ctg = 100;
    }

    function calcularSubtotal($ctg, $qtd) {
        $valor_total = $ctg * $qtd;

        return $valor_total;
    
    }
    function calcularPercentual($qtd, $valor_total){


        if ($qtd >= 15){
           return $valor_total = $valor_total - ($valor_total * 0.2);
        }
        elseif($qtd >=7){
           return $valor_total = $valor_total - ($valor_total * 0.1);
        }
        else{
           return $valor_total = $valor_total;
        }
    }
        



    if($seguro_total == "sim"){
        $valor_total = $valor_total + (40 * $qtd);
        }

    if($gps == "sim"){
        $valor_total = $valor_total + (15 * $qtd);
        }

    if($cadeirinha_infantil == "sim"){
        $valor_total = $valor_total + (20 * $qtd);
        }

    $valor_total = calcularSubtotal($ctg, $qtd);

    echo $valor_total;

    require_once "view_relatorio.php";


?>

