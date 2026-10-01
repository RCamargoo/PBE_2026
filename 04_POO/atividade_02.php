<?php

class banco{

    //atributos 
    public $titular;
    public $numero;
    public $saldo;
    public $tipo;

        function deposito($saldo){

            $this->saldo = $this->saldo+ $valor;
            echo "O saldo aumentou par $this->saldo";
        }

        function sacar($valor){

            $this->saldo = $this->saldo - $valor;
            echo " O saldo resultou em $this->saldo";
        }

        function consultar_saldo(){

            echo " O valor do saldo é de $this->saldo";
        }
}

$banco1 = new banco();

$banco1->titular = "Rafael de Camargo Bricoleri";
$banco1->numero = 1232343232;
$banco1->saldo = 1000;
$banco1->tipo = "corrente";

echo "Titular:" . $banco1->titular . "<br>";
echo "Número: " . $banco1->numero . "<br>";
echo "Saldo: R$ " . $banco1->saldo . "<br>";
echo "Tipo: " . $banco1->tipo . "<br>";

echo "<br><br><br>";

$banco2 = new banco();

$banco2->titular = "Pedro";
$banco2->numero = 123234567456;
$banco2->saldo = 102;
$banco2->tipo = "Conjuntante";

echo "Titular:" . $banco2->titular . "<br>";
echo "Número: " . $banco2->numero . "<br>";
echo "Saldo: R$ " . $banco2->saldo . "<br>";
echo "Tipo: " . $banco2->tipo . "<br>";


?>