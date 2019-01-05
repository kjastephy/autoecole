<?php

    require_once '../inc/db.php'; // Appel fichier connexion bdd

    if(true)
    {        
        //ajout
        if (isset($_POST['id'])) 
        {
            $req=$bdd->prepare('UPDATE email SET lu=:lu WHERE id=:id');
            $req->execute(array(
                'id'=>$_POST['id'],
                'lu'=>'Lu'
            ));

        }
    }
    else
    {
        header('location: ../index.php');
    }
