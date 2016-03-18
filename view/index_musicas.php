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
            <td>1</td>
            <td><?php echo $value->nome?></td>
            <td><?php echo $value->autorId?></td>
        </tr>
        <?php
        }
            ?> 
    </table>
    
    
</div>