<?php

//puxando do view

$nome = $_POST['Nome'];
$salario_bruto = $_POST['salario_bruto'];
$horas_extras = $_POST['horas_extras'];
$beneficios = $_POST['beneficios'];
$descontos = $_POST['descontos'];

//contas do salario

$valor_hora = $salario_bruto / 160;

$valor_da_hora_extra = $valor_hora * 1.5;

$total_horas_extras = $horas_extras * $valor_da_hora_extra;

$salario_bruto_sem_descontos = $salario_bruto + $total_horas_extras + $beneficios;


//calculo dos impostos 

if ($salario_bruto >= 5000){
    $imposto = $salario_bruto * 0.10;
}
elseif ($salario_bruto >= 3000 && $salario_bruto < 5000){
    $imposto = $salario_bruto * 0.05;
}
else {
    $imposto = $salario_bruto * 0;
}

// salario liquido

$salario_liquido = ($salario_bruto + $total_horas_extras + $beneficios) - $descontos;

echo "Nome: $nome <br>";
echo "Salario bruto: $salario_bruto <br>"; 
echo "Salario bruto + total de horas extras + beneficio: $salario_bruto_sem_descontos <br>";
echo "Descontos: $descontos <br>";
echo "Imposto: $imposto <br>";
echo "Sálario líquido: $salario_liquido <br>";

// status

if ($salario_liquido >= 4000){
    echo "Status: Bem remunerado";
}
else {
    echo "Status: Medio";
}



?>