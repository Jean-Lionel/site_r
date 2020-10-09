<?php
require_once("pages/headerAdmin.php");
require_once("pages/connect.php");
require_once("pages/image.php");


if(isset($_POST['send'])){

    $response = upload_image($_FILES);


    $sql = "INSERT INTO reference(description, picture, reference, nom_projet, client_name) VALUES (:description, :picture, :reference, :nom_projet, :client_name)";

    $pdo_query = $pdo->prepare($sql);

    extract($_POST);

    if($pdo_query->execute([
        ':description' => $description,
        ':picture' => $response,  
        ':reference' => $reference, 
        ':nom_projet' => $nom_projet, 
        ':client_name' => $client_name

    ])){

        echo "Enregistrement Reussi";
    }else{

    die('Echec d\'Enregistrement');
    }


}



?>
<form action="" enctype="multipart/form-data" method="POST">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 form-group">
                <label for="" class="text-info">Categorie Reference</label>
                <select class="form-control" name='reference'>
                    <option value="">-------------</option>
                    <option value="BATIMENT">Batiments</option>
                    <option value="ROUTE">Routes</option>
                    <option value="HYDRAULIQUE">Hydrauliques</option>
                </select>
            </div>
            <div class="form-group  col-md-6">
                <label for="" class="text-info">Selectonner les Images</label>
                <input name='image' type="file" class='form-control'/>
            </div>
        </div>
        <div class="form-group col-md-6">
            <label for="" class="text-info">Nom du Projet</label>
            <input name="nom_projet" type='text' class='form-control col-lg-12'/>
        </div>
        <div class="form-group col-md-6">
            <label for="" class="text-info">Nom du Client</label>
            <input name="client_name" type='text' class='form-control col-lg-12'/>
        </div>
        <div class="form-group">
            <label for="" class="text-info">Decrivez votre Projet</label>
            <textarea name="description" id="" rows="7" class="col-lg-12 form-control"></textarea>
        </div>
        <div class="form-group">
            <input type="submit" name='send' class='form-control btn btn-success col-lg-12' value="Enregitré">
        </div>
    </div>
</form>



</body>
</html>