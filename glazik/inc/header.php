    <?php  session_start(); 
    $error = isset($_GET['error']) ? $_GET['error'] : '';
    ?>


  <!--<?php setcookie($_POST['login'], time() + 365*24*3600, null, null, false, true);
  $error = isset($_GET['error']) ? $_GET['error'] : ''; 
  ?> -->
  
  <!DOCTYPE html>
  <html>

  <head>
    <!-- Site made with Mobirise Website Builder v4.8.7, https://mobirise.com -->
    <meta charset="UTF-8">
    <meta http-equiv="content-type" content="text/html;charset=utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="generator" content="Mobirise v4.8.7, mobirise.com">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <link rel="shortcut icon" href="assets/images/logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
    <link rel="stylesheet" href="assets/tether/tether.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="assets/gdpr-plugin/gdpr-styles.css">
    <link rel="stylesheet" href="assets/dropdown/css/style.css">
    <link rel="stylesheet" href="assets/animatecss/animate.min.css">
    <link rel="stylesheet" href="assets/socicon/css/styles.css">
    <link rel="stylesheet" href="assets/theme/css/style.css">
    <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

    <script src="" async defer></script>


    <section class="menu cid-ra1C1pRxzb" once="menu" id="menu2-19">

      <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">

        <button class="navbar-toggler navbar-toggler-center" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

          <div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>

          </div>

        </button>

        <div class="menu-logo">
          <div class="navbar-brand">
            <span class="navbar-logo">
              <a href="index.php">
                <img src="assets/images/logo2.png" alt="Mobirise" title="" style="height: 3.8rem;">
              </a>
            </span>

          </div>

        </div>

        <div class="collapse navbar-collapse d-flex justify-content-center" id="navbarSupportedContent">

          <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
            <li class="nav-item">
              <a class="nav-link link text-black display-4" href="index.php#header2-3">
              Accueil</a>
            </li>

            <li class="nav-item">
              <a class="nav-link link text-black display-4" href="index.php#counters2-7">
              Présentation</a>
            </li>

            <li class="nav-item">
              <a class="nav-link link text-black display-4" href="permis.php#content5-1r">
              Permis</a>
            </li>

            <li class="nav-item">
              <a class="nav-link link text-black display-4" href="index.php#map1-a">
              Contacts</a>
            </li>

            <li class="nav-item">
              <a class="nav-link link text-black display-4" href="faq.php#content5-13" aria-expanded="false">FAQ</a>
            </li> 
            
            <?php
            if (isset($_SESSION['logged']) && $_SESSION['type']=="client") { // Quand il y'a session (Compte Utilisateur / Déconnexion)
            ?><li class="nav-item">
              <a class="nav-link link text-black display-4" href="myaccount_clients.php" aria-expanded="false">Envoyer Document</a>
            </li>
            <?php } ?>

            <!-- Inserer element css pour centrer -->
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

          </ul>

          <!-- Bouton de Connexion / Inscription / Deconnexion -->

          <div class="navbar-buttons mbr-section-btn">

            <?php 

          if(!isset($_SESSION['logged'])){ // Quand il n'y'a pas de session (Connexion / Inscription)

          ?>

          <a class="btn btn-sm btn-primary display-4" role="button" data-toggle="modal" data-target="#connexionMODAL"><span class="mbri-user mbr-iconfont mbr-iconfont-btn" style="font-size: 15px;"></span>Connexion<br></a> 

          <div class="modal fade" id="connexionMODAL" data-backdrop="false" role="document">

            <div class="modal-dialog">

              <div class="modal-content">

                <div class="modal-header">

                  <h5 class="modal-title" id="exampleModalLabel">Connexion</h5>

                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><span aria-hidden="true">x</span></button>

                </div> <!-- ferme modal header -->

                <form id="authentification" class="form-horizontal" action="JavaScript:authentification()">

                  <div class="modal-body">

                    <div class="form-group">
                      <h6>Login</h6>
                      <input type="texte" class="form-control" name="login">
                    </div>

                    <div class="form-group">
                      <h6>Mot de Passe</h6>
                      <input type="password" class="form-control" name="mdp">
                      <a href="recup_mdp.php" style="text-align: center;"><h6><u><i>Mot de Passe Oublié ?</i></u></h6></a>
                      <br>
                    </div>

                    <div class="form-group">

                      <h6 id="Myerror" align="center"></h6> <!-- ligne login/mdp.captcha error -->

                    </div> <!-- ferme 3eme div form-group -->

                    <div align="center" class="g-recaptcha" name="g-recaptcha" data-sitekey="6Lf_IIUUAAAAALBn1Plzu9kDFFSVmaWbALfcUGR5">

                    </div>

                  </div> <!-- ferme modal body -->

                  <div class="modal-footer">

                    <br>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>

                    <button type="submit" class="btn btn-primary" value="Valider" name="submitpost">Connexion</button>

                  </div> <!-- ferme modal footer -->

                </form> <!-- ferme formulaire -->

              </div> <!-- ferme modal content -->

            </div> <!-- ferme modal dialogue -->

          </div> <!-- ferme modal fade -->

          <a class="btn btn-sm btn-primary display-4" href="inscription.php#content5-1g"><span class="mbri-edit mbr-iconfont mbr-iconfont-btn" style="font-size: 15px;"></span>Inscription</a>

          <?php

            } else  if (isset($_SESSION['logged'])) { // Quand il y'a session (Compte Utilisateur / Déconnexion)
            ?>
            <a class="btn btn-sm btn-primary display-4" href="myaccount_clients.php"><span class="mbri-user mbr-iconfont mbr-iconfont-btn" style="font-size: 18px;"></span> <?php echo $_SESSION['nom'] ?></a>
            

            <a class="btn btn-sm btn-primary display-4" href="inc/deconnexion.php"><span class="mbri-logout mbr-iconfont mbr-iconfont-btn" style="font-size: 15px;"></span>Déconnexion<br></a>   

            <script type="text/javascript">
              let date = new date();
              let jour = date.getDate();
              let mois = date.getMonth() + 1;
              let annee = date.getFullYear();

              document.write("<div>Nous sommes le "+jour+"/"+mois+"/"+annee+"</div>");

            </script>  

            <?php

          } 

          ?>

        </div> <!-- ferme navbar-buttons -->

      </div> <!-- ferme navbar-collapse -->

    </nav>
  </section>



  <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>

  <script type="text/javascript">

        /**
        *
        */
        function authentification()
        {
          alert("Connexion");
          //Demande d'inscription
          $.ajax({
            method:'POST',
            url:'inc/authentification.php',
            data: $("#authentification").serialize(),
            dataType:'json'
          })

         //Redirection
         .done(function(data)
         {

          //Vérifie si l'utilisateur est un administrateur ou un client
          if(data=="admin"){
            $(location).attr("href", "../glazik/dashboard.php");
          }else if(data=="client"){
            $(location).attr("href", "../glazik/");
          }else{
            $("#Myerror").html(data);
          }

        })

         .fail(function( jqXHR, textStatus ) 
         {
          alert("Le serveur n'a pas pu charger les données veuillez réessayer plus tard.");
        });

       }



       let errorMsg='<?PHP echo $error;?>';
       let numError = parseInt(errorMsg);

       switch (numError){
        case 1:
        $(document).ready(function() {
          $('#connexionMODAL').modal('show')
        });
        document.getElementById("Myerror").innerHTML = "Veuillez saisir un login valide";
        break;
        case 2:
        $(document).ready(function() {
          $('#connexionMODAL').modal('show')
        });
        document.getElementById("Myerror").innerHTML = "Votre mot de passe n'est pas valide";
        break;
        case 3:
        $(document).ready(function() {
          $('#connexionMODAL').modal('show')
        });
        document.getElementById("Myerror").innerHTML = "Veuillez saisir les informations demandée";
        break;
        case 4:
        $(document).ready(function() {
          $('#connexionMODAL').modal('show')
        });
        document.getElementById("Myerror").innerHTML = "Captcha invalide";
        break;
        case 5:
        $(document).ready(function() {
          $('#connexionMODAL').modal('show')
        });
        document.getElementById("Myerror").innerHTML = "Captcha non rempli";
        break;
      }
    </script>
