<?php

require_once("pages/headerAdmin.php");
require_once("pages/connect.php");

$devis=$pdo->prepare("SELECT * from devis  ORDER BY id DESC LIMIT  10");
$devis->execute();

if(isset($_GET['id']))
{
    $id=intval($_GET['id']);
    $email=$pdo->prepare("SELECT mail from devis where id=:id");
    $email->bindParam(":id",$id);
    $email->execute();
    $res=$email->fetch();
}

if(isset($_POST['contact']) and !empty($_POST['destinataire']) and !empty($_POST['message']))
{
    extract($_POST);
    $objet="Prise de Contact";
    $entêtes = "From: 'Inscription' <info@btpgeotech.com>\n"; 
    $entêtes .= "Reply-To: 'Inscription' <chrisirak95@gmail.com>\n"; 
    $entêtes .= "X-Priority: 1\n"; 
    $destinataire=filter_var($destinataire,FILTER_VALIDATE_EMAIL);
    $bEnvoie = mail($destinataire,$objet,$message,$entêtes); 
    $reply=$pdo->prepare("INSERT INTO devis_reply values('',:mail,:msg)");
    $reply->bindParam(":mail",$destinataire);
    $reply->bindParam(":msg",$message);
    $reply->execute();

    header("Location:devis.php"); 
    $msg="Message Bien Envoye";  
}


?>
<h3 class="text-center mt-3 text-info">Gestion Devis</h3>
<?php if(isset($msg)): ?>
	<div class="alert alert-danger">
		<?= $msg ?>
	</div>
<?php  endif ?>
<div class="row container">
    <div class="container">
        <table class="table col-md-12">
    <tr >
        <td  class="text-info">Name</td>
        <td  class="text-info" >Email</td>
        <td  class="text-info">Message</td>
        <td  class="text-info">Phone</td>
        <td  class="text-info">Date</td>
        <td  class="text-info">Action</td>
    </tr>
    <?php foreach($one=$devis->fetchAll() as $k=>$val):?>
        <tr class="table-stripped">
            <td><?=($one[$k]['name']) ?></td>

            <td><a href="mailto:<?=($one[$k]['mail']) ?>"><?=($one[$k]['mail']) ?></a></td>
            <td><?=($one[$k]['message']) ?></td>
            <td><?=($one[$k]['phone']) ?></td>
            <td><?=($one[$k]['created_at']) ?></td>
            <td><!-- <a href="devis.php?id=<?=$one[$k]['id']?>" class="btn btn-success">Contacter</a> -->
                <a href="mailto:<?=($one[$k]['mail']) ?>" class="btn btn-sm btn-secondary">Contacter</a>
            </td>
        </tr>
    <?php endforeach ?>
    <!--  -->
</table>
    </div>

</div>

