
<?php

class Paciente{

    private $idade;
    private $nome;
    private $peso;
    private $altura;

    public function __construct($idade, $peso, $altura, $nome){

        $this->idade = $idade;
        $this->peso = $peso;
        $this->altura = $altura;
        $this->nome = $nome;
    }

    public function calcular_imc(){

        $imc = $this->peso / ($this->altura * $this->altura);
        return $imc;
    }

    public function classificar($imc){

        if ($imc < 18.5){
            return "Baixo peso";
        }
        elseif ($imc < 25){
            return "Normal";
        }
        else{
            return "Sobrepeso";
        }
    }
}

$paciente1 = new Paciente(10, 100, 1.60, "João");
$paciente2 = new Paciente(30, 90, 2.00, "Felipe");

$imc1 = $paciente1->calcular_imc();
$imc2 = $paciente2->calcular_imc();

echo "Paciente: João <br>";
echo "IMC: $imc1 <br>";
echo $paciente1->classificar($imc1);

echo "<br><br>";

echo "Paciente: Felipe<br>";
echo "IMC: $imc2 <br>";
echo  $paciente2->classificar($imc2);

?>
