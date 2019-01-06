
<?php

session_start();

function saveDocument()
{
	include('../inc/db.php'); // Appel fichier connexion bdd

	$table1=['cni','justificatifdomicile','permis','photo'];
	$table2=['Carte National d\'Identité','Justificatif Domicile','Permis','Photo'];

	for ($i=0; $i < 4; $i++) { 

		$inputName=$table1[$i];
		$description=$table2[$i];

		if (isset($_FILES["{$inputName}"]) AND $_FILES["{$inputName}"]['error']== 0)
		{
			// Testons si le fichier n'est pas trop gros
			if ($_FILES["{$inputName}"]['size'] <= 1000000000)
			{
				// Testons si l'extension est autorisée
				$infosfichier =pathinfo($_FILES["{$inputName}"]['name']);
				$extension_upload = $infosfichier['extension'];
				$extensions_autorisees = array('jpg', 'jpeg', 'gif','png','pdf');
				if (in_array($extension_upload,
					$extensions_autorisees))
				{
					if ($extension_upload=='pdf') {
						$name=Genere_Password(30).basename($_FILES["{$inputName}"]['name']);
				// On peut valider le fichier et le stocker définitivement
						move_uploaded_file($_FILES["{$inputName}"]['tmp_name'], '../document/'.$name);
					}else{
						$name = "data:image/png;base64,".base64_encode(file_get_contents($_FILES["{$inputName}"]['tmp_name']));
					}

					var_dump($_FILES["{$inputName}"]['tmp_name']);
					var_dump($name);

					$req=$bdd->prepare("INSERT INTO document (client,chemin,description) VALUES (:client,:chemin,:description)");
					$req->execute(array(
						'client'=>$_SESSION['mail'],
						'chemin'=>$name,
						'description'=>$description
					));

				}
			}
		}
	}
}

if(true)
{        
//ajout
	saveDocument();
	header('location: ../index.php');
}
else
{
//echo json_encode("bad");
	header('location: ../index.php');
}
