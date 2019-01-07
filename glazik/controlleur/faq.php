<?php

    require_once '../inc/db.php'; // Appel fichier connexion bdd

    if($_SESSION['type']=="admin")
    {        

    	//ajout
    	if (isset($_POST['add']) && isset($_POST['question']) && isset($_POST['reponse'])) 
    	{
    		$req=$bdd->prepare('INSERT INTO faq (question,reponse) VALUES (:question,:reponse)');
    		$req->execute(array(
    			'question'=>$_POST['question'],
    			'reponse'=>$_POST['reponse']
    		));

    		$data = array(
    			'notification'=> "$.toast({heading: 'Success',text: 'Opération d\'ajout effectuée avec succes',icon: 'success',position: 'top-right'})",
    			'id'=> "#faq"
    		);

    		echo json_encode($data);
    	}

    	//modification
    	elseif(isset($_POST['update']) && isset($_POST['question']) && isset($_POST['reponse']))
    	{
    		$req=$bdd->prepare('UPDATE faq SET question=:question,reponse=:reponse WHERE id=:id');
    		$req->execute(array(
    			'id'=>$_POST['id'],
    			'question'=>$_POST['question'],
    			'reponse'=>$_POST['reponse']
    		));

    		$data = array(
    			'notification'=> "$.toast({heading: 'Success',text: 'Opération de modification effectuée avec succes',icon: 'success',position: 'top-right'})",
    			'id'=> "#faq"
    		);
    		echo json_encode($data);
    	}

    	//suppression
    	elseif(isset($_POST['delete']))
    	{
    		$req=$bdd->prepare('DELETE FROM faq  WHERE id=:id');
    		$req->execute(array(
    			'id'=>$_POST['id']
    		));
    		
    		$data = array(
    			'notification'=> "$.toast({heading: 'Success',text: 'Opération de suppression effectuée avec succes',icon: 'success',position: 'top-right'})",
    			'id'=> "#faq"
    		);
    		echo json_encode($data);
    	}
    }
    else
    {
    	header('location: ../index.php');
    }
