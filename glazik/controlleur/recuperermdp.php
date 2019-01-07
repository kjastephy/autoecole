<?php

    require_once '../inc/db.php'; // Appel fichier connexion bdd

    if($_SESSION['type']=="admin")
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
                //sendMail($_POST['email'],"Recupération mot de passe","Bonjour {$_POST['nom']}, <br> Vous avez effectué une demande d'inscription sur notre site. Nous traiterons votre demande dans un bref délais.<br>Cordialement,<br><br><br>NB: Merci de ne pas repondre à ce mail","");

                $data = array(
                    'texte'=> "Nous vous contacterons par mail, pour vous donnez les informations sur votre compte.",
                    'message'=> "Demande Envoyée"
                );

                echo json_encode($data);
            }

        }
    }
    else
    {
        $data = array(
            'texte'=> "",
            'message'=> ""
        );

        echo json_encode($data);
        //header('location: ../index.php');
    }
