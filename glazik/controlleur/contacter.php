<?php

    require_once '../inc/db.php'; // Appel fichier connexion bdd

    if($_SESSION['type']=="admin")
    {        

        //ajout
        if (isset($_POST['telephone']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['objet']) && isset($_POST['message'])) 
        {

            $message=sendMail("progweb2019@gmail.com",$_POST['objet'],$_POST['message'],"");


            $req=$bdd->prepare("INSERT INTO email (lu,email,nom,prenom,objet,contenu)
             VALUES (:lu,:email,:nom,:prenom,:objet,:contenu)");
            $req->execute(array(
                'lu'=>'Non lu',
                'email'=>$_POST['email'],
                'nom'=>$_POST['nom'],
                'prenom'=>$_POST['prenom'],
                'objet'=>$_POST['objet'],
                'contenu'=>$message
            ));

            $data = array(
                'texte'=> "Votre demande d'information a été envoyée",
                'message'=> "good"
            );

            echo json_encode($data);
        }
        else
        {
            $data = array(
                'texte'=> "",
                'message'=> "bad"
            );

            echo json_encode($data);
        }

    }
    else
    {
        echo json_encode("redirection");
        //header('location: ../index.php');
    }
