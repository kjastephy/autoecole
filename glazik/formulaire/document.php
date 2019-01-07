 <?php 

 //include('../inc/db.php');

 $req = $bdd->prepare("SELECT * FROM document where client=:client");

 $req->execute([
    'client'=>$value['email']
]);

 $data = $req->fetchAll(PDO::FETCH_ASSOC);

 foreach ($data as $documentdata){

    $action_form="JavaScript:operationDocument('#form{$documentdata['id']}doc','controlleur/document.php','#{$documentdata['id']}doc');";


    ?>
    <label for=""><?php echo $documentdata['description'];?></label>

    <form id="form<?php echo $documentdata['id'];?>doc" class="form" method="post" action="<?php echo $action_form;?>">

        <!--contenu du formulaire-->
        <input type="text" hidden="true" id="option" class="form-control" name="update" value="update" >

        <input type="text" hidden="true" id="id" class="form-control" name="id" value="<?php echo $documentdata['id'];?>" >

        <iframe src="<?php echo 'document/'.$documentdata['chemin']; ?>" frameborder="0"></iframe>

        <div class="form-actions right">
            <a target="_blank" href="<?php echo 'document/'.$documentdata['chemin']; ?>"><button type="button" class="btn btn-secondary">
                <i class="fa fa-check-square-o"></i> Aperçu
            </button></a>
            <button type="submit" class="btn btn-secondary">
                <i class="fa fa-check-square-o"></i> Supprimer
            </button>
        </div>

    </form>

    <?php
}
?>