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

            if($donnees==null){

                $req=$bdd->prepare("INSERT INTO clients (civilite,nom,prenom,email,date_naissance,tel1) VALUES (:civilite,:nom,:prenom,:email,:dateNaissance,:tel1)");
                $req->execute(array(
                 'civilite'=>$_POST['civilite'],
                 'nom'=>$_POST['nom'],
                 'prenom'=>$_POST['prenom'],
                 'email'=>$_POST['email'],
                 'dateNaissance'=>$_POST['dateNaissance'],
                 'tel1'=>$_POST['tel1']
             ));

                $data = array(
                 'texte'=> "Nous vous contacterons par mail, pour vous informer de la validation de votre inscription.",
                 'message'=> "Demande Envoyée"
             );

                echo json_encode($data);
            }else{
                $data = array(
                    'texte'=> "",
                    'message'=> "Echec Demande : email existant"
                );

                echo json_encode($data);
            }

        }

        //modification
        elseif(isset($_POST['update']))
        {
            /*$req=$bdd->prepare('UPDATE clients SET civilite=:civilite, nom=:nom, prenom=:prenom, date_naissance=:date_naissance, login=:login, mot_De_Passe=:motdepasse, email=:email, tel1=:tel1, tel2=:tel2, tel_Parents=:tel3,date_Sortie=:dateSortie, possede_Code=:possedeCode, id_CatPermis=:idCatPermis, etat=:etat WHERE id=:id');
            $req->execute(array(
                'id'=>$_POST['id'],
                'civilite'=>$_POST['civilite'],
                'nom'=>$_POST['nom'],
                'prenom'=>$_POST['prenom'],
                'date_naissance'=>$_POST['date_naissance'],
                'login'=>$_POST['login'],
                'motdepasse'=>$_POST['motdepasse'],
                'email'=>$_POST['email'],
                'tel1'=>$_POST['tel1'],
                'tel2'=>$_POST['tel2'],
                'tel3'=>$_POST['tel3'],
                'dateSortie'=>$_POST['dateSortie'],
                'possedeCode'=>$_POST['possedeCode'],
                'idCatPermis'=>$_POST['idCatPermis'],
                'etat'=>'inscrit'
            ));*/

            $req=$bdd->prepare('UPDATE clients SET etat=:etat WHERE id_Clients=:id');
            $req->execute(array(
                'id'=>$_POST['id'],
                'etat'=>'inscrit'
            ));

            $data = array(
                'notification'=> "$.toast({heading: 'Success',text: 'Opération de modification effectuée avec succes',icon: 'success',position: 'top-right'})",
                'id'=> "#demandeinscription"
            );
            echo json_encode($data);
        }

        //suppression
        elseif(isset($_POST['delete']))
        {
            $req=$bdd->prepare('DELETE FROM clients  WHERE id_Clients=:id');
            $req->execute(array(
                'id'=>$_POST['id']
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
        header('location: ../index.php');
    }
