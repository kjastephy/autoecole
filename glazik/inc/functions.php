<!-- traitement des fonctions -->
<?php

function sendMail($email,$object,$contenu){

	$header="MIME-Version: 1.0\r\n";
	$header.='From:"Glazik Auto"<support@glazikautoecole.com>'."\n";
	$header.='Content-Type:text/html; charset="uft-8"'."\n";
	$header.='Content-Transfer-Encoding: 8bit';

	$message="
	<html>
	<body>
	<div align='center'>
	<img src='http://www.primfx.com/mailing/banniere.png'/>
	<br />
	{$contenu}
	<br />
	<img src='http://www.primfx.com/mailing/separation.png'/>
	</div>
	</body>
	</html>
	";

	mail($email, $object, $message, $header);

}

?>