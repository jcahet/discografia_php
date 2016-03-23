<?php 
include '../style/template.php';
include '../controller/UsuarioController.php';
$controller = new Musicascontroller();
$musicas = $controller->listar();
?>

<h2>Lista de Musicas</h2>

<div class="col-sm-10 col-sm-offset-1">
    <h2>Lista de Musicas</h2>
    <table class="table table-striped">
        <tr>
            <td>id</td>
            <td>nome</td>
            <td>autor_id</td>
        
        </tr>
        
        <?php
        
        foreach ($usuario as $value){
           
       ?>
        <tr>
            <td><?php echo $value->id ?></td>
            <td><?php echo $value->email?></td>
            <td><?php echo $value->senha?></td>
        </tr>
        <?php
        }
            ?> 
    </table>
    
    
</div>