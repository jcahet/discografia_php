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
    
    public function deleta($id) {
        
        $musica = new Musica();
        $musica->delete($id);
        
    }
    
    public function updateControle() {
        
        $musica = new Musica();
        $titulo = $_GET['titulo'];
        $autor_id = $_GET['autor_id'];
        $midia_id = $_GET['midia_id'];
        $id = $_POST['id'];
        
        $musica->setTitulo($titulo);
        $musica->setAutor_id($autor_id);
        $musica->setAutor_id($midia_id);
        $musica->update($id);
        
    }
}
