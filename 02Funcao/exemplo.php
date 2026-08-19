<?php


$frequencia1 = 100;
$nota1 = 10;

$frequencia2 = 20;
$nota2 = 10;

$frequencia3 = 100;
$nota3 = 6;

echo "<br>";
echo "Leo  ";

if ($frequencia1 < 75){
    echo "você não passa por falta de frequência !";
}

elseif($nota1 >= 9 ){
    echo "aprovado";
}

elseif($nota1 < 5 ){
    echo "recuperação";
}

else{
    echo "reprovado";
}

echo "<br>";
echo "rafael  ";

if ($frequencia2 < 75){
    echo "você não passa por falta de frequência !";
}

elseif($nota2 >= 9 ){
    echo "aprovado";
}

elseif($nota2 < 5 ){
    echo "recuperação";
}

else{
    echo "reprovado";
}

echo "<br>";
echo "Gabriel  ";

if ($frequencia3 < 75){
    echo "você não passa por falta de frequência !";
}

elseif($nota3 >= 9 ){
    echo "aprovado";
}

elseif($nota3 >= 5  ){
    echo "recuperação";
}

else{
    echo "reprovado  ";
}

?>