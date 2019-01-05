<?php

    require_once '../inc/db.php'; // Appel fichier connexion bdd

    if(true)
    {        
        //ajout
        if (isset($_POST['id'])) 
        {
            $req=$bdd->prepare('DELETE FROM email WHERE id=:id');
            $req->execute(array(
                'id'=>$_POST['id']
            ));
            echo json_encode("good");
        }
    }
    else
    {
        echo json_encode("bad");
        //header('location: ../index.php');
    }
