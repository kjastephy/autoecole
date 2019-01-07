<?php

    require_once '../inc/db.php'; // Appel fichier connexion bdd

    if($_SESSION['type']=="admin")
    {        

        //ajout
        if (isset($_POST['add']) && isset($_POST['icon']) && isset($_POST['lien']) && isset($_POST['titre']) && isset($_POST['texte'])) 
        {
            $req=$bdd->prepare('INSERT INTO accueil_prix (icon,lien,titre,texte) VALUES (:icon,:lien,:titre,:texte)');
            $req->execute(array(
                'icon'=>$_POST['icon'],
                'lien'=>$_POST['lien'],
                'titre'=>$_POST['titre'],
                'texte'=>$_POST['texte']
            ));

            $data = array(
                'notification'=> "$.toast({heading: 'Success',text: 'Opération d\'ajout effectuée avec succes',icon: 'success',position: 'top-right'})",
                'id'=> "#prix"
            );
            echo json_encode($data);
        }

        //modification
        elseif(isset($_POST['update']) && isset($_POST['icon']) && isset($_POST['lien']) && isset($_POST['titre']) && isset($_POST['texte']))
        {
            $req=$bdd->prepare('UPDATE accueil_prix SET icon=:icon,lien=:lien,titre=:titre,texte=:texte WHERE id=:id');
            $req->execute(array(
                'id'=>$_POST['id'],
                'icon'=>$_POST['icon'],
                'lien'=>$_POST['lien'],
                'titre'=>$_POST['titre'],
                'texte'=>$_POST['texte']
            ));


            $data = array(
                'notification'=> "$.toast({heading: 'Success',text: 'Opération de modification effectuée avec succes',icon: 'success',position: 'top-right'})",
                'id'=> "#prix"
            );
            echo json_encode($data);
        }

        //Suppression
        elseif(isset($_POST['delete']))
        {
            $req=$bdd->prepare('DELETE FROM accueil_prix WHERE id=:id');
            $req->execute(array(
                'id'=>$_POST['id']
            ));


            $data = array(
                'notification'=> "$.toast({heading: 'Success',text: 'Opération de suppression effectuée avec succes',icon: 'success',position: 'top-right'})",
                'id'=> "#prix"
            );
            echo json_encode($data);
        }
    }
    else
    {
        header('location: ../index.php');
    }
