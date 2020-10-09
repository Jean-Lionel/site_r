<?php

require_once("pages/headerAdmin.php");
require_once("pages/connect.php");
checked_connect_user();

$select=$pdo->query("SELECT * from admin");
$select->execute();

if(isset($_POST['add']) and !empty($_POST['adname']) and !empty($_POST['adpass']))
{
    extract($_POST);
    $admin=$pdo->prepare("INSERT into admin values('',:log,:pass,:create)");
    $admin->bindParam(":log",$adname);
    $pass=sha1($adpass);
    $admin->bindParam(":pass",$pass);
    $today=date('Y-m-d');
    $admin->bindParam(":create",$today);
    $admin->execute(); 
    header("Location:gallery.php");
}
if(isset($_POST['change']) AND !empty(($_POST['change'])))
{
    extract($_POST);
    $nombre=intval($number);
    $number=$pdo->prepare("UPDATE slider set nbr_img = :nbre");
    $number->bindParam(":nbre",$nombre);
    $number->execute();
}
if(isset($_POST['conf']) )
{
    if(!empty($_FILES))
        {
            $filename=$_FILES['pic']['name'];
            $file_type=$_FILES['pic']['type'];
            $extension=strrchr($filename,'.');
            $tmp_name=$_FILES['pic']['tmp_name'];
            $destination_file='Slides/'.$filename;
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
       extract($_POST);
       $slide=$pdo->prepare("INSERT INTO slider (url_image,libelle) values (:path,:lib)");
       $slide->bindParam(":path",$destination_file);
       $slide->bindParam(":lib",$lib);
       $slide->execute();
}
?>
<div class="container-fluid">
    <h3 class="text-center text-info">Gestion Admin</h3>
    <form action="" method="POST">
        <div class="col-lg-12 col-md-12">
            <div class="form-group">
            <label for=""  class="text-info">Admin</label>
                <input type="text" class="form-control" name="adname">
            </div>
            <div class="form-group">
                <label for=""  class="text-info">Password</label>
                <input type="text" class="form-control" name="adpass">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control btn btn-info" value="Ajouter Nouveau" name='add'>
            </div>
            <table class="col-lg-12 table-bordered">
                <tr class="table ">
                    <td  class="text-info">Name</td>
                    <td  class="text-info">Created Date</td>
                    <td  class="text-info">Action</td>
                </tr>
                <?php while($res=$select->fetch()):?>
                <tr class="table table-stripped">
                    <td><?=$res['login'] ?></td>
                    <td><?=$res['created_at'] ?></td>
                    <td><a href="pages/del.php?ide=<?=$res['id'] ?>" class='btn btn-danger'>Effacer</a></td>
                </tr>
                <?php endwhile ?>
            </table>
            </form>
        </div>
        </div>

