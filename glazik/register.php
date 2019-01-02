<!-- Inscription Nouveau Client pour BackEnd, Secretaire -->

<?php


	//if(!empty($_POST) AND !empty($_POST['login']) AND !empty($_POST['mdp']) AND !empty($_POST['mail'])){

		require_once 'inc/db.php';

		/*$req = $bdd->prepare('SELECT * FROM Membres WHERE login = ?');
		$req->exec([$_POST['login']]);
		$user = $req->fetch();

		if(user){
			die('Cet Utilisateur existe déjà');
		}

		$req = $bdd->prepare('SELECT * FROM Membres WHERE mail = ?');
		$req->exec([$_POST['mail']]);
		$user2 = $req->fetch();

		if(user2){
			die('Ce mail existe déjà');
		}

		if(!user && !user2){
		*/

			$req = $bdd->prepare("INSERT INTO Membres(login, mdp, mail) VALUES(?, ?, ?)");

			$mdp = password_hash($_POST['mdp'], PASSWORD_BCRYPT);

			$req->execute(array($_POST['login'], $mdp, $_POST['mail']));

			die('Le compte à bien était crée.');

		//}


	//} else {
		//die("Ils manques des saisies de saisie.");
	//}
		

?>