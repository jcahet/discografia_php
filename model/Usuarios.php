<?php

class Usuarios {
  
    public $id;
    public $email;
    public $senha;
    
    public function listarUsuarios(){
        $sql = "SELECT * FROM usuarios";
         $query = Conexao::prepare($sql);
       $query->execute();
       return $query->fetchAll();
        
    }
}
