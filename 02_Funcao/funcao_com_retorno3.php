<?php


function analisaNumero($numero) {
    
        $dobro = $numero * 2;
        $triplo = $numero * 3 ;
        $quadrado =  $numero * $numero;

    return [

        "numero" => $numero,
        "dobro" => $dobro,
        "triplo" => $triplo,
        "quadrado" => $quadrado
    
    ];

}

    $resultado = analisaNumero (10);
    echo  "Numero = ". $resultado["numero"]. "<br>";
    echo  "dobro = ". $resultado["dobro"]. "<br>";
    echo  "triplo = ". $resultado["triplo"]. "<br>";
    echo  "quadrado = ". $resultado["quadrado"]. "<br>";
    
    


?>