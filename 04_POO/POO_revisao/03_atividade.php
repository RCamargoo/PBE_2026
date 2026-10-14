<?php

class Filme{

    private $titulo;
    private $genero;
    private $duracao;
    private $assistido;

    public function __construct($titulo, $genero, $duracao){

        $this->titulo = $titulo;
        $this->genero = $genero;
        $this->duracao = $duracao;
        $this->assistido = false;
    }

    public function marcar_como_assistido(){
        $this->assistido = true;
    ;}

    public function exibir_informacoes(){
        echo "Título:  $this->titulo <br>";
        echo "Gênero:  $this->genero <br>";
        echo "Duração:  $this->duracao  minutos<br>";
    }

    public function foi_assistido(){
        if($this->assistido == true){
            return "Filme já assistido";
        }
        else{
            return "Filme ainda não assistido";
        }
    }

}

$filme1 = new Filme("Vingadores", "Ação", 180);
$filme2 = new Filme("Homem arnha", "Aventura", 180);

$filme1->marcar_como_assistido();

$filme1->exibir_informacoes();
echo $filme1->foi_assistido();

echo "<br><br>";

$filme2->exibir_informacoes();
echo $filme2->foi_assistido();

?>