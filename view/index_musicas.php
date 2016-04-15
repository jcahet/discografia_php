<?php 
include '../style/template.php';
include '../controller/MusicasController.php';
$controller = new Musicascontroller();
$musicas = $controller->listar();
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $controller->deleta($id);
    header('location: index_musicas.php');
}
?>


<div class="col-sm-10 col-sm-offset-1">
    <a href="cadastro_musica.php" class="btn btn-success pull-right btn-xs">Adicionar</a>
    <h2>Lista de Musicas</h2>
    <table class="table table-striped">
        <tr>
            <td>id</td>
            <td>Nome</td>
            <td>Autor</td>
            <td>Ações</td>
        
        </tr>
        
        <?php
        
        foreach ($musicas as $value){
           
       ?>
        <tr>
            <td><?php echo $value->id?></td>
            <td><?php echo $value->titulo?></td>
            <td><?php echo $value->nome?></td>
            <td><?php echo "<a href='editar_musica.php?acao=atualizar&id=".$value->id."'>Editar</a>"?> |
               <?php echo "<a href='index_musicas.php?acao=atualizar&id=".$value->id."'>Deletar</a></td>" ?>
        </tr>
        <?php
        }
            ?> 
    </table>
    
    
</div>