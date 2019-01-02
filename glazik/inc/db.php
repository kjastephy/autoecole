<?php

try
{
		// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=pw_autoecole;charset=utf8','root', '');
	$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$bdd->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
	
}
catch(Exception $e)
{
		// En cas d'erreur, on affiche un message et on arrête tout
	die('Erreur : '.$e->getMessage());
}

?>