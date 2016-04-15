<?php

include '../conexao/Conexao.php';
class Musica {
    private $titulo;
    private $midia_id;
    private $autor_id;
    private $id;
    
    function getTitulo() {
        return $this->titulo;
    }

    function getMidia_id() {
        return $this->midia_id;
    }

    function getAutor_id() {
        return $this->autor_id;
    }

    function getId() {
        return $this->id;
    }

    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    function setMidia_id($midia_id) {
        $this->midia_id = $midia_id;
    }

    function setAutor_id($autor_id) {
        $this->autor_id = $autor_id;
    }

    function setId($id) {
        $this->id = $id;
    }

    
    public function salvar(){
      $sql = "INSERt INTO"
              . " musicas"
              . " (titulo, autor_id, midia_id)"
              . " values (:titulo, :autor_id, :midia_id)";
      $query = Conexao::prepare($sql);
      $query->bindValue(":titulo", $this->getTitulo());
      $query->bindValue(":autor_id", $this->getAutor_id());
      $query->bindValue(":midia_id", $this->getMidia_id());
      $query->execute();
    }
    public function listarTodaAsMusicas(){
       $sql ="select musica.*, autor.nome from musicas "
               . "musica inner join "
               . "autores autor on (autor.id = musica.autor_id) "
               . "order by musica.id desc";    
       $query = Conexao::prepare($sql);
       $query->execute();
       return $query->fetchAll();
    }
    
    public function delete($id){
        $sql ="delete from musicas where id = :id";
        $query = Conexao::prepare($sql);
        $query-> bindValue(":id", $id);
        $query->execute();
    }
    
    public function update($id){
        $sql ="update musicas"
                . "set titulo= :titulo, autor_id= :autor_id, midia_id = :midia_id"
                . "where id = :id";
        $query = Conexao::prepare($sql);
        $query->bindValue(":titulo",$this->getTitulo());
        $query->bindValue(":autor_id", $this->getAutor_id());
        $query->bindValue("midia_id", $this->getMidia_id());
        $query->bindValue(":id",$id);
        $query->execute();
    }
}
