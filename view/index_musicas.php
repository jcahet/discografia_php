<?php 
include '../style/template.php';
include '../controller/MusicasController.php';
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
        
        foreach ($musicas as $value){
           
       ?>
        <tr>
            <td><?php ?></td>
            <td><?php echo $value->titulo?></td>
            <td><?php echo $value->autor_id?></td>
        </tr>
        <?php
        }
            ?> 
    </table>
    
    
</div>