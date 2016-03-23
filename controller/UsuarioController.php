<?php
include '../model/Usuarios.php';
class UsuarioController {
    public function listarUsuario() {
        
        $usuario= new Usuarios() ;
        return $usuario->listarUsuario();
 }
}
