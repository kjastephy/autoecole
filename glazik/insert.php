<?php


require_once 'inc/db.php'; // Appel fichier connexion bdd

if(isset($_POST["title"]))
{
	$query = "
	INSERT INTO events 
	(title, start_event, end_event) 
	VALUES (:title, :start_event, :end_event)
	";
	$statement = $bdd->prepare($query);
	$statement->execute(
		array(
			'title'  => $_POST['title'],
			'start_event' => date("Y-m-d H:m:s",$_POST['start']),
			'end_event' => date("Y-m-d H:m:s",$_POST['end'])
		)
	);
}


?>
