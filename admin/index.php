<?php

    require_once("pages/connect.php");

    checked_connect_user();
    if(!empty($_FILES))
    {
        $filename=$_FILES['art_pic']['name'];
        $file_type=$_FILES['art_pic']['type'];
        $extension=strrchr($filename,'.');
        $tmp_name=$_FILES['art_pic']['tmp_name'];
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
    $Listing=$pdo->query("Select * from article ORDER BY idart DESC LIMIT 10");        
    if(isset($_POST['valid']) AND !empty($_POST['name_art']) AND !empty($_POST['art_suj']))
    {
        // var_dump($_POST);
        extract($_POST);
        $insert=$pdo->prepare("Insert into article (name,descr,created_at,media) values(:name,:descr,:create,:media)");
        $insert->bindParam(":name",$name_art);
        $insert->bindParam(":descr",$art_suj);
        $today=date('Y-m-d');
        $insert->bindParam(":create",$today);
        $insert->bindParam(":media",$destination_file);
        $insert->execute();
        header("Location:index.php");
    }

    if(isset($_GET['edit']))
    {
        $id=$_GET['edit'];
        $select=$pdo->prepare("SELECT name,descr,media from article where idart=:id");
        $select->bindParam(":id",$id);
        $select->execute();
        $value=$select->fetch();
    }
    if(isset($_POST['aJour']))
    {
        $id=$_GET['edit'];
        extract($_POST);
        $insert=$pdo->prepare("UPDATE article SET name=:name,descr=:descr,created_at=:create,media=:media where idart=:id)");
        $today=date('Y-m-d');
        $insert->execute(array(
            ':name'=>$name_art,
            ':descr'=>$art_suj,
            ':create'=>$today,
            ':media'=>$destination_file,
            ':id'=>$id
        ));
        $insert->execute();
    }

    ?>
    <?php require_once("pages/headerAdmin.php");?>
    
    <div class="row container">
        <div class='col-md-12'>
            <form action="" enctype="multipart/form-data" method="POST">
                <div class="form-group">
                    <label for="" class="text-info">Nom Article:</label>
                    <input type="text" class="form-control" name="name_art" <?php if(isset($value)):?>value=<?php echo $value['name']?><?php endif?>>
                </div>
                <div class="form-group">
                    <label for=""  class="text-info">Sujet:</label>
                    <textarea  id="" cols="30" rows="10" class="form-control" name="art_suj"><?php if(isset($value)):?><?php echo $value['descr']?><?php endif?>
                </textarea>
            </div>
            <div class="form-group">
                <label for=""  class="text-info">Picture:</label>
                <input type="file" class="form-control" name="art_pic" <?php if(isset($value)):?>value='<?php echo $value['media']?>'<?php endif?>>
            </div>
            <div class="form-group">
                <input type="submit" class="form-control btn btn-primary col-lg-6" name="valid">
                <?php if(isset($value)):?>
                    <input type="submit" class="form-control btn btn-success col-lg-5" name="aJour" value="Editer">
                <?php endif ?>
            </div>
        </form>
    </div>
    <div class='col-md-12'>

        <h3 class="text-center text-info mb-5">Listes Articles</h3>


        <table class="table table-bordered table-hover">
            <?php while( $data=$Listing->fetch()):?>
                <tr>
                    <td> <?php echo substr($data['name'], 0,200) ?></td>
                    <td>

                       <a href="pages/del.php?id=<?php echo $data['idart'] ?>" id='erase' class='btn btn-danger'>Effacer</a>
                       

                   </td>

                   <td>
                       <a href='index.php?edit=<?php echo $data['idart'] ?>' class='btn btn-success' name='edit'>Editer</a>
                   </td>
               </tr>

           <?php endwhile ?>

       </table>
   </div>

</div>
<script>
    let erase=document.querySelectorAll("#erase");
    erase.addEventListener('click',function(event){
        var rps=window.confirm('Voulez-vous vraiment Supprimer');
        if(rps===false)
        {
            event.preventDefault();
        }
    });
</script>
</body>
</html>
