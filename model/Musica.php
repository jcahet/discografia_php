<?php

include '../conexao/Conexao.php';
class Musica {
    public $nome;
    public $autorId;
    public $autor;
    
    public function listarTodaAsMusicas(){
       $sql ="SELECT * FROM musicas";    
       $query = Conexao::prepare($sql);
       $query->execute();
       return $query->fetchAll();
    }
}
