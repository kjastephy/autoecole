
<?php
    require_once 'db.php'; // Appel fichier connexion bdd

    if(isset($_POST['mdp']) && isset($_POST['login']))
    {        
      $req = $bdd->prepare('SELECT * FROM Membres WHERE login= :login');

      $req->execute(['login' => $_POST['login']]);

      $resultat = $req->fetch();

      if(!empty($resultat) && password_verify($_POST['mdp'], $resultat->mdp))
      {
        session_start();
        $_SESSION['id']=$resultat->id;
        $_SESSION['nom']=$resultat->nom;
        $_SESSION['prenom']=$resultat->prenom;
        $_SESSION['mail']=$resultat->mail;
        $_SESSION['mdp']=$resultat->mdp;

        if(isset($_POST['connexionAuto']) && $_POST['connexionAuto']=="oui")
        {
          setcookie('mail',$_POST['mail'],time() + 365*24*3600,null,null,false,true);
          setcookie('login',$_POST['login'],time() + 365*24*3600,null,null,false,true);
          setcookie('mdp',$_POST['mdp'],time() + 365*24*3600,null,null,false,true);
        }
        header('location: ../dashboard.php');
      }
      else
      {
        header('location: ../index.php');
      } 
    }
    else
    {
      header('location: ../index.php');
    }