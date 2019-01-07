<?php

//delete.php

if(isset($_POST["id"]))
{

require_once 'inc/db.php'; // Appel fichier connexion bdd

$query = "
DELETE from events WHERE id=:id
";
$statement = $bdd->prepare($query);
$statement->execute(
	array(
		'id' => $_POST['id']
	)
);
}

?>