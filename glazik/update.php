<?php

//update.php

require_once 'inc/db.php'; // Appel fichier connexion bdd

if(isset($_POST["id"]))
{
	$query = "
	UPDATE events 
	SET title=:title, start_event=:start_event, end_event=:end_event 
	WHERE id=:id
	";
	$statement = $bdd->prepare($query);
	$statement->execute(
		array(
			'title'  => $_POST['title'],
			'start_event' => date("Y-m-d H:m:s",$_POST['start']),
			'end_event' => date("Y-m-d H:m:s",$_POST['end']),
			'id'   => $_POST['id']
		)
	);
}

?>