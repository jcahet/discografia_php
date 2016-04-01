<?php
include '../style/template.php';
include '../controller/MusicasController.php';

?>
<?php
$musicaControl = new Musicascontroller();

if (isset($_POST['salvar'])){
    $musicaControl->inserir();
}else{
    
}
?>
<div class="col-sm-4 col-sm-offset-1">
    <div class="col-sm-12"
         style="margin-top: 100px; "
         >
        <h3>Cadastre uma Música</h3>
    </div>
</div>    
<div class="col-sm-4">
    <form method="POST">

        <label>Título da Música</label>
        <input required="true" class="form-control" name="titulo">
         <label>Compositor</label>
         <select class="form-control" name="autor_id">

             <option class="form-control" value="1">Cartola</option>     
             <option class="form-control" value="2">Tim Maia</option>
             <option class="form-control" value="3">Djavan</option>
         </select>

         <label>Midia</label>
         <select class="form-control" name="midia_id">

            <option class="form-control" value="1">CD</option>
            <option class="form-control" value="2">DVD</option>
            <option class="form-control" value="3">VINIL</option>

         </select>
         <input class="form-control btn-danger" type="submit" name="salvar" value="Confirme">

    </form>
</div>