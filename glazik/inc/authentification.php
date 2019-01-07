
<?php

require '../recaptcha/autoload.php';
require_once 'db.php'; // Appel fichier connexion bdd


//if(isset($_POST['submitpost'])) {
/*if(isset($_POST['g-recaptcha-response'])) 
{
  $recaptcha = new \ReCaptcha\ReCaptcha('6Lf_IIUUAAAAALemMmYoFIhPrjQ7J_Hc3gri3xrI');
  $resp = $recaptcha->verify($_POST['g-recaptcha-response']);

  if ($resp->isSuccess()) 
  {//Captcha Valide*/



    if(isset($_POST['mdp']) && isset($_POST['login']))
    {
      $req = $bdd->prepare('SELECT * FROM membres WHERE login= :login');

      $req->execute(['login' => $_POST['login']]);

      $resultat = $req->fetch();

      if(!empty($resultat) && password_verify($_POST['mdp'], $resultat->mdp))
      {
        session_start();
        $_SESSION['id']=$resultat->id;
        $_SESSION['type']=$resultat->type;
        $_SESSION['nom']=$resultat->nom;
        $_SESSION['prenom']=$resultat->prenom;
        $_SESSION['mail']=$resultat->mail;
        $_SESSION['mdp']=$resultat->mdp;
        $_SESSION['logged'] = true; // Si l'utilisateur est connecter
        $_SESSION['login'] = $resultat->login; 

        if(isset($_POST['connexionAuto']) && $_POST['connexionAuto']=="oui")
        {
          setcookie('mail',$_POST['mail'],time() + 365*24*3600,null,null,false,true);
          setcookie('login',$_POST['login'],time() + 365*24*3600,null,null,false,true);
          setcookie('mdp',$_POST['mdp'],time() + 365*24*3600,null,null,false,true);
        }

        //détermine le type d'utilisateur
        if($resultat->type=="admin")
        {
          echo json_encode("admin");
          //header('location: ../dashboard.php');
        }
        else
        {
          echo json_encode("client");
          //header('location: ../index.php');
        }

      }
      else
      {
        echo json_encode("Vous avez saisi des informations incorrectes");
      } 
    }
    else
    {
      echo json_encode("Veuillez saisir tous les champs");
    }


 /* }
  else
  {
    echo json_encode("ReCaptcha invalide");
  }
}
else
{
  echo json_encode("Veuillez cocher le ReCaptcha2");
}
}
else
{
  echo json_encode("Veuillez cocher le ReCaptcha1");
}*/