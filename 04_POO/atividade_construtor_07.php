<?php

class banco{

    public $titular;
    public $saldo;

    function __construct($titular, $saldo) {

        $this->titular = $titular;
        $this->saldo = $saldo;

    }

    public function depositar($valor){
        $this->saldo = $this->saldo + $valor;
        echo "Depositado: $valor <br>";
    }

    public function sacar($valor){
        $this->saldo = $this->saldo - $valor;
        echo "Sacado: $valor <br>";
    }

    public function exibir_saldo(){
        echo "O saldo desse momento é de : $this->saldo <br>";
    }

}

$conta1 = new banco("Rafael", 100);

$conta1->exibir_saldo();
$conta1->sacar(10);
$conta1->depositar(30);
$conta1->exibir_saldo();

echo "<br><br>";

$conta2 = new banco("Thiago", 10);

$conta2->exibir_saldo();
$conta2->sacar(100);
$conta2->depositar(10);
$conta2->exibir_saldo();


?>