<?php

    require_once '../inc/db.php'; // Appel fichier connexion bdd

    if($_SESSION['type']=="admin")
    {        
        //ajout
        if (isset($_POST['objet']) && isset($_POST['email']) && isset($_POST['message'])) 
        {
            sendMail($_POST['email'],$_POST['objet'],$_POST['message'],"");
            echo json_encode("good");
        }
    }
    else
    {
        echo json_encode("bad");
        //header('location: ../index.php');
    }
