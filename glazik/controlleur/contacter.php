<?php

    require_once '../inc/db.php'; // Appel fichier connexion bdd

    if(true)
    {        

        //ajout
        if (isset($_POST['add']) && isset($_POST['civilite']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['dateNaissance']) && isset($_POST['tel1'])) 
        {
            $req=$bdd->prepare("SELECT email FROM clients WHERE email=:email");
            $req->execute(array(
                'email'=>$_POST['email']
            ));

            $donnees=$req->fetch();

            if($donnees==null)
            {

                $req=$bdd->prepare("INSERT INTO clients (civilite,nom,prenom,email,date_naissance,tel1) VALUES (:civilite,:nom,:prenom,:email,:dateNaissance,:tel1)");
                $req->execute(array(
                   'civilite'=>$_POST['civilite'],
                   'nom'=>$_POST['nom'],
                   'prenom'=>$_POST['prenom'],
                   'email'=>$_POST['email'],
                   'dateNaissance'=>$_POST['dateNaissance'],
                   'tel1'=>$_POST['tel1']
               ));

                sendMail($_POST['email'],"Demande d'inscription","Bonjour {$_POST['nom']}, <br> Vous avez effectué une demande d'inscription sur notre site. Nous traiterons votre demande dans un bref délais.<br>Cordialement,<br><br><br>NB: Merci de ne pas repondre à ce mail");

                $data = array(
                   'texte'=> "Nous vous contacterons par mail, pour vous informer de la validation de votre inscription.",
                   'message'=> "Demande Envoyée"
               );

                echo json_encode($data);
            }
            else
            {
                $data = array(
                    'texte'=> "",
                    'message'=> "Echec Demande : email existant"
                );

                echo json_encode($data);
            }

        }

    }
    else
    {
        echo json_encode("redirection");
        //header('location: ../index.php');
    }
