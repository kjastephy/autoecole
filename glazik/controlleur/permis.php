<?php

    require_once '../inc/db.php'; // Appel fichier connexion bdd

    if(true)
    {        

    	//ajout
    	if (isset($_POST['add']) && isset($_POST['icon']) && isset($_POST['titre']) && isset($_POST['texte'])) 
    	{
    		$req=$bdd->prepare("INSERT INTO {$_POST['table']} (icon,titre,texte) VALUES (:icon,:titre,:texte)");
    		$req->execute(array(
    			'icon'=>$_POST['icon'],
                'titre'=>$_POST['titre'],
                'texte'=>$_POST['texte']
            ));

    		$data = array(
    			'notification'=> "$.toast({heading: 'Success',text: 'Opération d\'ajout effectuée avec succes',icon: 'success',position: 'top-right'})",
    			'id'=> "#{$_POST['table']}"
    		);

    		echo json_encode($data);
    	}

    	//modification
    	elseif(isset($_POST['update']) && isset($_POST['icon']) && isset($_POST['titre'])  && isset($_POST['texte']))
    	{
    		$req=$bdd->prepare("UPDATE {$_POST['table']} SET icon=:icon,titre=:titre,texte=:texte WHERE id=:id");
    		$req->execute(array(
    			'id'=>$_POST['id'],
    			'icon'=>$_POST['icon'],
                'titre'=>$_POST['titre'],
                'texte'=>$_POST['texte']
            ));

    		$data = array(
    			'notification'=> "$.toast({heading: 'Success',text: 'Opération de modification effectuée avec succes',icon: 'success',position: 'top-right'})",
    			'id'=> "#{$_POST['table']}"
    		);
    		echo json_encode($data);
    	}

    	//suppression
    	elseif(isset($_POST['delete']))
    	{
    		$req=$bdd->prepare("DELETE FROM {$_POST['table']} WHERE id=:id");
    		$req->execute(array(
    			'id'=>$_POST['id']
    		));
    		
    		$data = array(
    			'notification'=> "$.toast({heading: 'Success',text: 'Opération de suppression effectuée avec succes',icon: 'success',position: 'top-right'})",
    			'id'=> "#{$_POST['table']}"
    		);
    		echo json_encode($data);
    	}
    }
    else
    {
        $data = array(
            'notification'=> "",
            'id'=> ""
        );

        echo json_encode($data);

    	//header('location: ../index.php');
    }
