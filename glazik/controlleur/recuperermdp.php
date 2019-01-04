<?php

    require_once '../inc/db.php'; // Appel fichier connexion bdd

    if(true)
    {        
        //ajout
        if (isset($_POST['recup_log_mdp']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['date_naissance']) && isset($_POST['tel1'])) 
        {
            $req=$bdd->prepare("SELECT email FROM clients WHERE email=:email");
            $req->execute(array(
                'email'=>$_POST['email']
            ));

            $donnees=$req->fetch();

            if($donnees==null){

                $data = array(
                    'texte'=> "",
                    'message'=> "Echec Demande"
                );

                echo json_encode($data);
            }
            else
            {
                $data = array(
                    'texte'=> "Nous vous contacterons par mail, pour vous donnez les informations sur votre compte.",
                    'message'=> "Demande Envoyée"
                );

                echo json_encode($data);

                //envoie email
            }

        }
    }
    else
    {
        header('location: ../index.php');
    }
