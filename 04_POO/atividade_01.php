<?php

class celular{

    //atributos 
    public $marca;
    public $modelo;
    public $cor;
    public $bateria;
    public $ligado;

        //metodo
        function ligar(){

            $this->ligado = ture;
            echo " O celular foi Ligado <br>";
        }

        function desliga(){

            $this->ligado = false;
            echo " O celular foi desligado";
        }

        function user($consumir){

            $this->bateria = $this->bateria - $consumir;
            if($this->bateria < 0){
                $this->bateria = 0; 
            }

            echo "A bateri foi consumida em $consumir <br>";
            echo "A bateria no momento está em $this->bateria <br>";

        }

        function carregar($carga){

            $this->bateria = $this->bateria + $carga;
            if($this->bateria > 100){
                $this->bateria = 100;
            }

            echo "A bateria  foi carregada em $carga  ";
            echo "Aumentando a bateria para $this->bateria ";
        }


}

//AGORA É O OBJETO:

$celular1 = new celular();

//definindo atributos:

$celular1->marca = "samsung";
$celular1->modelo = "Galaxy S";
$celular1->cor = "Branco";
$celular1->bateria = 70;
$celular1->ligado = true;

echo "marca: $celular1->marca <br>";
echo "Modelo: $celular1->modelo <br>";
echo "Cor: $celular1->cor <br>";
echo "Bateria: $celular1->bateria <br>";
echo "Ligado: $celular1->ligado <br>";

$celular1-> carregar(30);
$celular1-> user(20);

echo "<br><br><br>";

$celular2 = new celular();

$celular2->marca = "Motorola";
$celular2->modelo = "G9";
$celular2->cor = "Preto";
$celular2->bateria = 0;
$celular2->ligado = true;

echo "marca: $celular2->marca <br>";
echo "Modelo: $celular2->modelo <br>";
echo "Cor: $celular2->cor <br>";
echo "Bateria: $celular2->bateria <br>";
echo "Ligado: $celular2->ligado <br>";

$celular2-> carregar(100);
$celular2-> user(3);
$celular2-> desliga(false);

?>