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
<form method="POST">
    
    <input name="titulo">
     <label>Compositor</label>
     <select name="autor_id">
       
        <option value="1">Cartola</option>     
        <option value="2">Tim Maia</option>
        <option value="3">Djavan</option>
    </select>
     
     <label>Midia</label>
     <select name="midia_id">
       
        <option value="1">CD</option>
        <option value="2">DVD</option>
        <option value="3">VINIL</option>
        
    </select>
    <input type="submit" name="salvar" value="Confirme">
    
</form>
   