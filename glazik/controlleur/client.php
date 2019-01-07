<?php

    require_once '../inc/db.php'; // Appel fichier connexion bdd

    if($_SESSION['type']=="admin")
    {        

        //ajout
        if (isset($_POST['add']) && isset($_POST['civilite']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['dateNaissance']) && isset($_POST['tel1']) && isset($_POST['permis']) && isset($_POST['code'])) 
        {
            $req=$bdd->prepare("SELECT email FROM clients WHERE email=:email");
            $req->execute(array(
                'email'=>$_POST['email']
            ));

            $donnees=$req->fetch();

            if($donnees==null)
            {

                $req=$bdd->prepare("INSERT INTO clients (civilite,nom,prenom,email,date_naissance,tel1,id_CatPermis,possede_Code) VALUES (:civilite,:nom,:prenom,:email,:dateNaissance,:tel1,:permis,:code)");
                $req->execute(array(
                 'civilite'=>$_POST['civilite'],
                 'nom'=>$_POST['nom'],
                 'prenom'=>$_POST['prenom'],
                 'email'=>$_POST['email'],
                 'dateNaissance'=>$_POST['dateNaissance'],
                 'permis'=>$_POST['permis'],
                 'code'=>$_POST['code'],
                 'tel1'=>$_POST['tel1']
             ));

                sendMail($_POST['email'],"Demande d'inscription","Bonjour {$_POST['nom']}, <br> Vous avez effectué une demande d'inscription sur notre site. Nous traiterons votre demande dans un bref délais.<br>Cordialement,<br><br><br>NB: Merci de ne pas repondre à ce mail","");

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

        //modification
        elseif(isset($_POST['update']) && isset($_POST['civilite']) && isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['dateNaissance']) && isset($_POST['tel1']) && isset($_POST['permis']) && isset($_POST['code']))
        {
            if (isset($_POST['changemdp'])) {

                $mdpSansHash=Genere_Password(10);
                $loginUser=$_POST['email'];

                $req=$bdd->prepare('UPDATE clients SET mot_De_Passe=:mdp,civilite=:civilite,nom=:nom,prenom=:prenom,email=:email,date_naissance=:date_naissance,tel1=:tel1,id_CatPermis=:permis,possede_Code=:code WHERE id_Clients=:id');
                $req->execute(array(
                    'id'=>$_POST['id'],
                    'mdp'=>password_hash($mdpSansHash,PASSWORD_DEFAULT),
                    'civilite'=>$_POST['civilite'],
                    'nom'=>$_POST['nom'],
                    'prenom'=>$_POST['prenom'],
                    'email'=>$_POST['email'],
                    'date_naissance'=>$_POST['dateNaissance'],
                    'permis'=>$_POST['permis'],
                    'code'=>$_POST['code'],
                    'tel1'=>$_POST['tel1']
                ));

                $req=$bdd->prepare("UPDATE membres set login=:login, mail=:mail, mdp=:mdp, nom=:nom, prenom=:prenom where mail=:mail");


                $req->execute(array(
                 'login'=>$loginUser,
                 'nom'=>$_POST['nom'],
                 'prenom'=>$_POST['prenom'],
                 'mail'=>$_POST['email'],
                 'mdp'=>password_hash($mdpSansHash,PASSWORD_DEFAULT)
             ));

                sendMail($_POST['email'],"Confirmation d'inscription","Bonjour {$_POST['nom']}, <br> Votre demande d'inscription a été confirmée vous trouverez ci-dessous vos accès.<br>login: {$loginUser}<br>mot de passe: {$mdpSansHash}<br>Cordialement,<br><br><br>NB: Merci de ne pas repondre à ce mail","");


                $data = array(
                    'notification'=> "$.toast({heading: 'Success',text: 'Opération de modification effectuée avec succes',icon: 'success',position: 'top-right'})",
                    'id'=> "#demandeinscription"
                );
                echo json_encode($data);
            } else {

                $loginUser=$_POST['email'];

                $req=$bdd->prepare('UPDATE clients SET civilite=:civilite,nom=:nom,prenom=:prenom,email=:email,date_naissance=:date_naissance,tel1=:tel1,id_CatPermis=:permis,possede_Code=:code WHERE id_Clients=:id');
                $req->execute(array(
                    'id'=>$_POST['id'],
                    'civilite'=>$_POST['civilite'],
                    'nom'=>$_POST['nom'],
                    'prenom'=>$_POST['prenom'],
                    'email'=>$_POST['email'],
                    'date_naissance'=>$_POST['dateNaissance'],
                    'permis'=>$_POST['permis'],
                    'code'=>$_POST['code'],
                    'tel1'=>$_POST['tel1']
                ));

                $req=$bdd->prepare("UPDATE membres set login:login, mail:mail, nom:nom, prenom:prenom where mail=:mail");


                $req->execute(array(
                   'login'=>$loginUser,
                   'nom'=>$_POST['nom'],
                   'prenom'=>$_POST['prenom'],
                   'mail'=>$_POST['email']
               ));

                $data = array(
                    'notification'=> "$.toast({heading: 'Success',text: 'Opération de modification effectuée avec succes',icon: 'success',position: 'top-right'})",
                    'id'=> "#demandeinscription"
                );
                echo json_encode($data);
            }
            
        }

        //suppression
        elseif(isset($_POST['delete']))
        {
            $req=$bdd->prepare('DELETE FROM clients  WHERE id_Clients=:id');
            $req->execute(array(
                'id'=>$_POST['id']
            ));

            $req=$bdd->prepare('DELETE FROM membres  WHERE mail=:mail');
            $req->execute(array(
                'mail'=>$_POST['email']
            ));

            $data = array(
                'notification'=> "$.toast({heading: 'Success',text: 'Opération de suppression effectuée avec succes',icon: 'success',position: 'top-right'})",
                'id'=> "#demandeinscription"
            );
            echo json_encode($data);
        }
    }
    else
    {
        echo json_encode("redirection");
        //header('location: ../index.php');
    }
