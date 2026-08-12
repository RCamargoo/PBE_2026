<?php

$idade = "16";
$acompanhante_M18 = true;

if ($idade >= 18){
    echo "Pode entrar!";
}

elseif ($idade > 13 && $idade <=17 && $acompanhante_M18 == true){
    echo "Pode entrar porém com aconpanhante!";
}


else{
    echo "Não pode entrar";
}

?>