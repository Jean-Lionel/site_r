<?php
session_start();
require_once("pages/headerAdmin.php");
require_once("pages/connect.php");

$domaine=$pdo->query("Select * from type_domaine");
$domaine->execute();
if(!empty($_FILES))
{
    $filename=$_FILES['pic']['name'];
    $file_type=$_FILES['pic']['type'];
    $extension=strrchr($filename,'.');
    $tmp_name=$_FILES['pic']['tmp_name'];
    $destination_file='Files/'.$filename;
    $authorized_ext=['.jpg','jpeg','.png'];
    if(in_array($extension,$authorized_ext))
    {
        if(move_uploaded_file($tmp_name,$destination_file))
        {
            echo "Fichier bien envoye";
        }
    }
    else{
        echo "Seuls les extensions '.jpg','jpeg','.png' sont autorises";
    }
}
if(isset($_POST['add']))
{
  extract($_POST);
  $domaines=$pdo->prepare("INSERT into type_domaine values('',:domaine)");
  $domaines->bindParam(":domaine",$dom);
  $domaines->execute();
  header("Location:domaine.php");
}
if(isset($_POST['add_domaine']))
{
    extract($_POST);
    $dom_insert=$pdo->prepare("INSERT into domaine values('',:descr,:media,:Sous_dom,:dom_id)");
    $descr=htmlspecialchars($descr);
    $dom_insert->bindParam(":descr",$descr);
    $dom_insert->bindParam(":media",$destination_file);
    $dom_insert->bindParam(":dom_id",$choose_do);
    $dom_insert->bindParam(":Sous_dom",$su_domaine);
    $dom_insert->execute();
}
if(isset($_POST['edit_domaine']))
{
    extract($_POST);
    $dom_up=$pdo->prepare("UPDATE domaine set descr=:descr,media_pic=:media,Sous_dom=:sudo where domaine_typ=:id ");
    $descr=htmlspecialchars($descr);
    $dom_up->bindParam(":descr",$descr);
    $dom_up->bindParam(":media",$destination_file);
    $dom_up->bindParam(":id",$choose_do);
    $dom_up->bindParam(":sudo",$su_domaine);
    $dom_up->execute();
}
?>
<form action="" method="POST" enctype="multipart/form-data">
<div class="row container">
        <div class="col-lg-5 col-sm-3">
            <h5 class=" text-info mt-5">Ajouter Domaine</h5>
            <div class="form-group mt-5">
                <label for="" class='text-info'>Domaine</label>
                <input type="text" name='dom' class='col-lg-7 form-control  col-sm-12'>
            </div>
            <div class="form-group">
                <input type="submit" name='add' value="Ajouter" class='btn btn-info col-lg-7 col-sm-12'>
            </div>
        </div>
        <div class="col-lg-7 col-sm-6">
            <h5 class="text-center text-info mt-3"></h5>
            <div class="form-group">
                <label for="" class="text-info">Domaine</label>
                <select name="choose_do" id="" class='form-control'>
                <option value="">--------</option>
                    <?php while($res=$domaine->fetch()): ?>
                        <option value="<?= $res['id'] ?>"><?= $res['name'] ?></option>
                    <?php endwhile ?>
                </select>
            </div>
            <div class="form-group">
                <label for="" class="text-info">Description</label>
                <textarea name="descr" id="" cols="30" rows="5" class='form-control'></textarea>
            </div>
            <div class="form-group">
                <input type="file" name='pic'  class='form-control'>
            </div>
            <div class="form-group">
                <label for=""  class="text-info">Sous Domaine</label>
                <input type="text" name='su_domaine'  class='form-control' placeholder="Mettez les Sous-domaines separe par des ;">
            </div>
            <div class="form-group">
                <input type="submit" name='add_domaine' value="Decrire Domaine" class='btn btn-info col-lg-5'>
                <input type="submit" name='edit_domaine' value="Modifier Domaine" class='btn btn-success col-lg-5'>
            </div>
        </div>
    </div>
</form>