<?php
include '../model/Musica.php';
class Musicascontroller {
    public function listar() {
        
        $musica = new Musica();
        return $musica->listarTodaAsMusicas();
        
    }
    
    public function inserir(){
        $musica = new Musica();
        $titulo = $_POST['titulo'];
        $autor_id = $_POST['autor_id'];
        $midia_id = $_POST['midia_id'];
        
        
        $musica->setTitulo($titulo);
        $musica->setMidia_id($midia_id);
        $musica->setAutor_id($autor_id);
        $musica->salvar();
    }
}
