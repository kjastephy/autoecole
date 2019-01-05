<?php
date_default_timezone_set('UTC');

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


function sendMail($email,$object,$contenu,$type){

	$header="MIME-Version: 1.0\r\n";
	$header.='From:"Glazik Auto"<support@glazikautoecole.com>'."\n";
	$header.='Content-Type:text/html; charset="uft-8"'."\n";
	$header.='Content-Transfer-Encoding: 8bit';

	$message="
	<html>
	<body>
	<div align='center'>
	<br />
	{$contenu}
	<br />
	<img src='http://www.primfx.com/mailing/separation.png'/>
	</div>
	</body>
	</html>
	";

	mail($email, $object, $message, $header);

	return $message;
}


/***********************************/
/*     Génère un mot de passe      */
/***********************************/
// $size : longueur du mot passe voulue
function Genere_Password($size)
{
    // Initialisation des caractères utilisables
	$characters = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, "a", "b", "c", "d", "e", "f", "g", "h", "i", "j", "k", "l", "m", "n", "o", "p", "q", "r", "s", "t", "u", "v", "w", "x", "y", "z");

	$password="";

	for($i=0;$i<$size;$i++)
	{
		$password .= ($i%2) ? strtoupper($characters[array_rand($characters)]) : $characters[array_rand($characters)];
	}
	
	return $password;
}


?>