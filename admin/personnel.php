<?php
require_once("pages/headerAdmin.php");
require_once("pages/connect.php");
require_once("pages/image.php");

checked_connect_user();


if(!empty($_FILES)){
    $destination_file = upload_image($_FILES);
    if(isset($_POST['valid']))
    {
    // var_dump($_POST);
        extract($_POST);
        $perso=$pdo->prepare("INSERT INTO `personnel`(`nom`, `fonction`, `link_twitter`, `link_facebook`, `link_gmail`, `pic_path`) VALUES (:nom,:fonction,:link_twitter,:link_facebook,:link_gmail,:pic_path)");

        $perso->execute([
         ":nom"=> $nom,
         ":fonction"=>$fonction,
         ":link_twitter"=>$link_twitter,
         ":link_facebook"=>$link_facebook,
         ":link_gmail"=>$link_gmail,
         ":pic_path"=>$destination_file
     ]);

        header("Location:personnel.php");

        exit;
    }
}



$listPers=$pdo->query("SELECT * from personnel limit 0,6");
$listPers->execute();
$data=$listPers->fetchAll();

if(isset($_GET['ident']) )
{
    extract($_GET);
    $card=$pdo->prepare("SELECT * from personnel where id=:id");
    $card->bindParam(":id",$ident);
    $card->execute();
    $oneCard=$card->fetch();
}
if( isset($_GET['mod']))
{
    extract($_GET);
    $card=$pdo->prepare("SELECT * from personnel where id=:id");
    $card->bindParam(":id",$mod);
    $card->execute();
    $oneCard=$card->fetch();
}

?>
<div class="row">

    <div class="col-lg-4 ml-4">
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-group mt-3">
                <label for="" class="text-info">Name:</label>
                <input type="text" class="form-control" name="nom" <?php if(isset($oneCard)):?> value="<?=$oneCard['nom']?>"<?php else:?>value=" "<?php endif ?>>
            </div>
            <div class="form-group">
                <label for="" class="text-info">Fonction:</label>
                <input type="text" class="form-control" name="fonction" <?php if(isset($oneCard)):?> value="<?=$oneCard['fonction']?>"<?php else:?>value=" "<?php endif ?>>
            </div>
            <div class="container row col-lg-12">
                <?php if(isset($oneCard))?>
                <div class="form-group">
                    <label for="" class="text-info">Lien Facebok</label>
                    <input type="text" class="form-control" name='link_facebook' <?php if(isset($oneCard['link_facebook'])):?> value="<?=$oneCard['link_facebook']?>"<?php else:?>value=" "<?php endif ?>>
                </div>
                <div class="form-group">
                    <label for="" class="text-info ">Lien Twitter</label>
                    <input type="text" class="form-control col-lg-12" name='link_twitter' <?php if(isset($oneCard['link_twitter'])):?> value="<?=$oneCard['link_twitter']?>"<?php else:?>value=" "<?php endif ?>>
                </div>
                <div class="form-group">
                    <label for="" class="text-info">Lien Gmail</label>
                    <input type="text" class="form-control col-lg-12" name='link_gmail'<?php if(isset($oneCard['link_gmail'])):?> value="<?=$oneCard['link_gmail']?>"<?php else:?>value=" "<?php endif ?>>
                </div>
            </div>
            <div class="form-group">
                <label for="" class="text-info">Picture</label>
                <input type="file" class="form-control" name='image'>
            </div>
            <div class="row form-group">
                <input type="submit" class="form-control btn btn-success col-lg-6" value="Ajouter Personnel" name="valid">
                <?php if(isset($_GET['mod'])):?> <input type="submit" class="form-control col-lg-6 btn btn-warning" value="Mofifier Personnel" name="update"> <?php endif ?>
            </div>
        </form>
    </div>

    <div class="col-lg-3 mt-4">
        <table class="table-stripped">
            <?php if(isset($data)):?>
                <tr class="table table-dark">
                    <td>Numero</td>
                    <td>Name</td>
                    <td colspan='2'>Action</td>
                </tr>
                <?php foreach($data as $k=>$val): ?>
                    <tr>
                        <td>
                            <ol>
                                <li><?=$k+1?></li>
                            </ol>
                        </td>
                        <td width="120"><?= $data[$k]['nom']?></td>
                        <td width="80"><a href="personnel.php?ident=<?php echo $data[$k]['id']?>">Afficher</a></td>
                        <td width="80"><a href="pages/del.php?mod=<?php echo  $data[$k]['id']?>">Supprimer</a></td>
                    </tr>
                <?php endforeach ?>
            <?php endif ?>
        </table>
    </div>
    <div class="col-lg-4 mt-4">
        <?php if(isset($_GET['ident'])):?>
            <div class="card" style="width: 18rem;">
                <img src="<?= $oneCard['pic_path']?>" class="card-img-top" alt="..." width="300" height="250">
                <div class="card-body">
                    <p class="alert-danger text-center">Name:
                        <h5 class="text-info text-center"><?= $oneCard['nom']?></h5>
                    </p>
                    <p class="alert-danger text-center">Fonction:
                        <h5 class="text-info mt-3 text-center"><?= $oneCard['fonction']?></h5>
                    </p>

                </div>
            </div>
        <?php endif ?>
    </div>
</div>
