<?php

class livro{

    //atributos 
    public $titulo;
    public $autor;
    public $paginas;
    public $ap; // $ap => ano de publicação

    public function __construct ($titulo, $autor, $paginas, $ap){

        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->paginas = $paginas;
        $this->ap = $ap;

    }

    public function exibir_detalhes(){
        echo "Titulo : $this->titulo, autor: $this->autor Pagina : $this->paginas, Ano de publicação: $this->ap";
        echo " <hr>";
    }

}

$livro = new livro("programação", "Leonardo", 200, 2026);
$livro->exibir_detalhes();
$livro = new livro("banco de Dados", "Rafael", 300, 2026);
$livro->exibir_detalhes();


?>