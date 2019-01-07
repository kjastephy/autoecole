<?php

require_once 'inc/db.php'; // Appel fichier connexion bdd


$data = array();

$query = "SELECT * FROM events ORDER BY id";

$statement = $bdd->prepare($query);

$statement->execute();

$result = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($result as $row)
{
	$data[] = array(
		'id'   => $row["id"],
		'title'   => $row["title"],
		'start'   => $row["start_event"],
		'end'   => $row["end_event"]
	);
}

echo json_encode($data);

?>