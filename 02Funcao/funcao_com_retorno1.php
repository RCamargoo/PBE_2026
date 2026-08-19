<?php


function VerificarMaioridade($idade){

        if ($idade >= 18){
            return "maior idade ";
     }

        else{
            return " menor idade ";
      }
}

$idade1 = 15;
$idade2 = 25;
$idade3 = 28;

    $maior = VerificarMaioridade($idade1);
        echo " jorge - ";
        echo $maior;
        echo "<br>";

     $maior = VerificarMaioridade($idade2);
        echo " Rafael - ";
        echo $maior;
        echo "<br>";

     $maior = VerificarMaioridade($idade1);
        echo " João - ";
        echo $maior;
        echo "<br>";


?>