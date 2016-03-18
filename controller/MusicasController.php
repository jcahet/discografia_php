<?php
include '../model/Musica.php';
class Musicascontroller {
    public function listar() {
        
        $musica = new Musica();
        return $musica->listarTodaAsMusicas();
        
    }
}
