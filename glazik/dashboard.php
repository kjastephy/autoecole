<?php 
session_start();
?>

<!DOCTYPE html>
<html class="loading" lang="fr" data-textdirection="ltr">

<!-- pour les notification-->
<?php $toaster= isset($_GET['toast'])? $_GET['toast'] : "" ?>

<!-- fixed-top-->
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <title>Glazik</title>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="assetsDashboard/assets/toaster/src/jquery.toast.css">
  <link rel="stylesheet" href="assetsDashboard/assets/css/jquery.notify.css"/>
  <link rel="apple-touch-icon" href="assetsDashboard/assets/images/ico/apple-icon-120.png">
  <link rel="shortcut icon" type="image/x-icon" href="assetsDashboard/assets/images/ico/favicon.ico">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- BEGIN VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/css/vendors.min.css">
  <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/vendors/css/extensions/unslider.css">
  <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/vendors/css/weather-icons/climacons.min.css">

  <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/fonts/meteocons/style.min.css">

  <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/vendors/css/charts/morris.css">

  <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/vendors/css/tables/datatable/datatables.min.css">

  <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/vendors/css/tables/jsgrid/jsgrid-theme.min.css">
  <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/vendors/css/tables/jsgrid/jsgrid.min.css">

  <!-- END VENDOR CSS-->

  <!-- BEGIN STACK CSS-->
  <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/css/app.min.css">
  <!-- END STACK CSS-->
  <!-- BEGIN Page Level CSS-->
  <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/css/core/menu/menu-types/vertical-menu-modern.css">
  <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/css/core/colors/palette-gradient.min.css">
  <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/fonts/simple-line-icons/style.min.css">
  <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/css/core/colors/palette-gradient.min.css">
  <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/css/pages/timeline.min.css">
  <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/css/plugins/forms/validation/form-validation.css">
  <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/css/plugins/forms/switch.min.css">
  <!-- END Page Level CSS-->
  <!-- BEGIN Custom CSS-->
  <link rel="stylesheet" type="text/css" href="assetsDashboard/assets/css/style.css">
  <!-- END Custom CSS-->
</head>





<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

  <!-- fixed-top header-->

  <nav style="height: 20px" class="header-navbar navbar-expand-md navbar navbar-with-menu fixed-top navbar-semi-dark navbar-shadow">
    <div class="navbar-wrapper">
      <div class="navbar-header">
        <ul class="nav navbar-nav flex-row position-relative">
          <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
          <li class="nav-item mr-auto"><a class="navbar-brand" href=""><img class="brand-logo" alt="Auto" src="assetsDashboard/assets/images/logo/rti_logo.png">
            <h2 class="brand-text">GLAZIK</h2></a></li>
            <li class="nav-item d-none d-md-block nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="toggle-icon ft-toggle-right font-medium-3 white" data-ticon="ft-toggle-right"></i></a></li>
            <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="fa fa-ellipsis-v"></i></a></li>
          </ul>
        </div>

        <div class="navbar-container content">
          <div class="collapse navbar-collapse" id="navbar-mobile">

            <!--Logo-->
            <ul class="nav navbar-nav" style="display: flex;align-items: center;justify-content: center; ">
              <a><img class="brand-logo" alt="stack admin logo" src="assetsDashboard/assets/images/logo/logo_ekip.png"></a>
            </ul>
            <!--Fin Logo--> 

            <ul class="nav navbar-nav mr-auto float-left">

              <!--Menu déroulant-->
              <li class="dropdown nav-item mega-dropdown" style="display: flex;align-items: center; "><a class="dropdown-toggle nav-link" href="#" data-toggle="dropdown"></a>
                <ul class="mega-dropdown-menu dropdown-menu row">

                  <li class="col-md-4">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="fa fa-newspaper-o"></i>AUTO ECOLE GLAZIK</h6>
                    <div id="mega-menu-carousel-example">
                      <div><img class="rounded img-fluid mb-1" src="assetsDashboard/assets/images/logo/rti_logo_grand.png" alt="First slide"><a class="news-title mb-0" href="#"></a>
                        <p class="news-content"><span class="font-small-2">GLAZIK France</span></p>
                      </div>
                    </div>
                  </li>

                  <li class="col-md-8">
                    <h6 class="dropdown-menu-header text-uppercase mb-1"><i class="fa fa-envelope-o"></i> Contactez nous</h6>
                    <form class="form form-horizontal" method="post" action="WelcomeController@postInfo" novalidate>
                      <input type="text" hidden="true" id="option" class="form-control" name="sendMaid" value="sendMaid">
                      <div class="form-body">
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label" for="inputName1">Nom</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <input class="form-control" type="text" id="inputName1" placeholder="<?php echo strtoupper($_SESSION['nom'].'.'.$_SESSION['prenom'])?>" name="nom" required>
                              <div class="form-control-position pl-1"><i class="fa fa-user-o"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label" for="inputEmail1">Email</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <input class="form-control" type="email" id="inputEmail1" placeholder="<?php echo strtolower($_SESSION['nom'].' '.$_SESSION['prenom'])?>@example.com" name="mail" required>
                              <div class="form-control-position pl-1"><i class="fa fa-envelope-o"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-3 col-form-label" for="inputMessage1">Message</label>
                          <div class="col-sm-9">
                            <div class="position-relative has-icon-left">
                              <textarea class="form-control" id="inputMessage1" rows="2" placeholder="Votre message" name="messages" required></textarea>
                              <div class="form-control-position pl-1"><i class="fa fa-commenting-o"></i></div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-12 mb-1">
                            <button class="btn btn-primary float-right" type="submit"><i class="fa fa-paper-plane-o"></i> Envoyer</button>
                          </div>
                        </div>
                      </div>
                    </form>
                  </li>
                </ul>
              </li>
              <!--Fin Menu déroulant-->

              <!--Zoom-->
              <li class="nav-item d-none d-md-block" style="display: flex;align-items: center; "><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>
              <!--Fin Zoom-->


            </ul>

            <ul class="nav navbar-nav float-right">
             <li class="dropdown dropdown-user nav-item">
              <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                <span class="avatar avatar-online">
                  <img src="assetsDashboard/assets/images/portrait/small/avatar-s-1.png" alt="avatar"><i></i>
                </span>
                <span class="user-name"><?php echo strtoupper($_SESSION['nom'].' '.$_SESSION['prenom']); ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right">

                <!--<a class="dropdown-item" href=""><i class="ft-user"></i>Profile</a>-->
                <div class="dropdown-divider">
                </div>
                <a class="dropdown-item" href="deconnexion.php"><i class="ft-power"></i>Déconnexion</a>
              </div>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </nav>

  <!-- ////////////////////////////////////////////////////////////////////////////-->

  <!-- fixed-scroll-menu-->

  <div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="main-menu-content">
      <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">

        <form id="formdata" action="dashboard.php" method="post">
          <input type="hidden" id="table" name="table">
          <input type="hidden" id="titre" name="titre">
          <input type="hidden" id="title" name="title">
          <input type="hidden" id="ADS" name="ADS">
          <input type="hidden" id="body" name="body">
          <input type="hidden" id="head" name="head">
          <input type="hidden" id="query" name="query">
        </form>

        <li class=" navigation-header"><span>Dashboard</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>
        </li>

        <!--Contenu-->
        <li class=" navigation-header"><span>SECTION DU SITE</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>
        </li>

        <li class="">
          <a class="menu-title" href="#" id="prix">
            <i class="ft-monitor"></i>
            <span class="menu-title" data-i18n="">Prix Permis</span>
          </a>

        </li>
        <li>
          <a class="menu-item" href="#" id="presentation">
            <i class="ft-box"></i>
            <span class="menu-title" data-i18n="">Présentation</span>
          </a>
        </li>
        <li>
          <a class="menu-item" href="#" id="faq">
            <i class="ft-box"></i>
            <span class="menu-title" data-i18n="">FAQ</span>
          </a>
        </li>

        <li class="">
          <a class="menu-title" href="#" id="permisvoiture">
            <i class="ft-monitor"></i>
            <span class="menu-title" data-i18n="">Permis Voiture</span>
          </a>

        </li>
        <li>
          <a class="menu-item" href="#" id="permismoto">
            <i class="ft-box"></i>
            <span class="menu-title" data-i18n="">Permis Moto</span>
          </a>
        </li>
        <li>
          <a class="menu-item" href="#" id="permisbateau">
            <i class="ft-box"></i>
            <span class="menu-title" data-i18n="">Permis Bateau</span>
          </a>
        </li>


        <!--Contenu-->
        <li class=" navigation-header"><span>Gestion Des Clients</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>
        </li>

        <li class="">
          <a class="menu-title" href="#" id="client">
            <i class="ft-monitor"></i>
            <span class="menu-title" data-i18n="">Clients</span>
          </a>
        </li>
        <li class="">
          <a class="menu-title" href="#" id="demandeinscription">
            <i class="ft-monitor"></i>
            <span class="menu-title" data-i18n="">Demande d'inscription</span>
          </a>
        </li>
        <li>
          <a class="menu-item" href="#" id="documentclient">
            <i class="ft-box"></i>
            <span class="menu-title" data-i18n="">Documents</span>
          </a>
        </li>

      </ul>
    </div>
  </div>


  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row"></div>
      <div class="content-body">
        <!-- fixed-scroll-menu stat-->
        <!-- Stats -->
        <div class="row">
          <div class="col-xl-6 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-warning bg-darken-2">
                    <i class="icon-basket-loaded font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-warning white media-body">
                    <h5>Nombre De Demandes</h5>
                    <h5 class="text-bold-400 mb-0"><i class="ft-arrow-up"></i>55</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6 col-lg-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="media align-items-stretch">
                  <div class="p-2 text-center bg-success bg-darken-2">
                    <i class="icon-basket-loaded font-large-2 white"></i>
                  </div>
                  <div class="p-2 bg-gradient-x-success white media-body">
                    <h5>Nombre De Clients</h5>
                    <h5 class="text-bold-400 mb-0"><i class="ft-arrow-up"></i>55</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--/ Stats -->


        <!-- content Ici le contenu de nos différents liens chargé avec ajax-->
        <div id="content">
          <?php include('contenu.php'); ?>
        </div>

      </div>
    </div>
  </div>

  <!-- ////////////////////////////////////////////////////////////////////////////-->




  <!-- footer-->
  <footer class="footer footer-static footer-light navbar-border">
    <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright  &copy; 2018 <a class="text-bold-800 grey darken-2" href="" >AutoEcole </a>, All rights reserved. </span><span class="float-md-right d-block d-md-inline-block d-none d-lg-block"><i class="ft-heart pink"></i></span></p>
  </footer>


  <!-- script-->
  <!-- BEGIN VENDOR JS-->
  <script src="assetsDashboard/assets/vendors/js/vendors.min.js" type="text/javascript"></script>
  <!-- BEGIN VENDOR JS-->
  <!-- BEGIN PAGE VENDOR JS-->
  <script src="assetsDashboard/assets/vendors/js/charts/raphael-min.js" type="text/javascript"></script>
  <script src="assetsDashboard/assets/vendors/js/charts/morris.min.js" type="text/javascript"></script>
  <script src="assetsDashboard/assets/vendors/js/extensions/unslider-min.js" type="text/javascript"></script>
  <script src="assetsDashboard/assets/vendors/js/timeline/horizontal-timeline.js" type="text/javascript"></script>
  <script src="assetsDashboard/assets/vendors/js/tables/datatable/datatables.min.js" type="text/javascript"></script>

  <script src="assetsDashboard/assets/vendors/js/tables/jsgrid/jsgrid.min.js" type="text/javascript"></script>
  <script src="assetsDashboard/assets/vendors/js/tables/jsgrid/griddata.js" type="text/javascript"></script>
  <script src="assetsDashboard/assets/vendors/js/charts/chart.min.js" type="text/javascript"></script>

  <script src="assetsDashboard/assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <script src="assetsDashboard/assets/vendors/js/forms/validation/jqBootstrapValidation.js" type="text/javascript"></script>

  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN STACK JS-->
  <script src="assetsDashboard/assets/js/core/app-menu.min.js" type="text/javascript"></script>
  <script src="assetsDashboard/assets/js/core/app.min.js" type="text/javascript"></script>
  <script src="assetsDashboard/assets/js/scripts/customizer.min.js" type="text/javascript"></script>
  <!-- END STACK JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="assetsDashboard/assets/js/scripts/pages/dashboard-ecommerce.min.js" type="text/javascript"></script>
  <script src="assetsDashboard/assets/js/scripts/tables/datatables/datatable-basic.min.js" type="text/javascript"></script>
  <script src="assetsDashboard/assets/js/scripts/tables/jsgrid/jsgrid.min.js" type="text/javascript"></script>
  <script src="assetsDashboard/assets/js/scripts/forms/validation/form-validation.js" type="text/javascript"></script>
  <script src="assetsDashboard/assets/js/scripts/forms/switch.min.js" type="text/javascript"></script>

  <script src="assetsDashboard/assets/js/scripts/charts/chartjs/bar/bar.min.js" type="text/javascript"></script>
  <script src="assetsDashboard/assets/js/scripts/charts/chartjs/bar/bar-stacked.min.js" type="text/javascript"></script>
  <script src="assetsDashboard/assets/js/scripts/charts/chartjs/bar/bar-multi-axis.min.js" type="text/javascript"></script>
  <script src="assetsDashboard/assets/js/scripts/charts/chartjs/bar/column.js" type="text/javascript"></script>
  <script src="assetsDashboard/assets/js/scripts/charts/chartjs/bar/column-stacked.min.js" type="text/javascript"></script>
  <script src="assetsDashboard/assets/js/scripts/charts/chartjs/bar/column-multi-axis.min.js" type="text/javascript"></script>

  <script src="assetsDashboard/assets/js/scripts/charts/chartjs/pie-doughnut/pie.min.js" type="text/javascript"></script>
  <script src="assetsDashboard/assets/js/scripts/charts/chartjs/pie-doughnut/pie-simple.min.js" type="text/javascript"></script>
  <script src="assetsDashboard/assets/js/scripts/charts/chartjs/pie-doughnut/doughnut.min.js" type="text/javascript"></script>
  <script src="assetsDashboard/assets/js/scripts/charts/chartjs/pie-doughnut/doughnut-simple.min.js" type="text/javascript"></script>
  <!--<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>-->
  <!--<script src="assetsDashboard/assets/js/scripts/jquerynotif/jquery.notify.js"></script>-->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>-->
  <script type="text/javascript" src="assetsDashboard/assets/toaster/src/jquery.toast.js"></script>
  <script type="text/javascript" src="assetsDashboard/assets/toaster/src/toaster.js"></script>

  <!-- END PAGE LEVEL JS-->

  <script type="text/javascript">


    /***************************************
        ***********Fonction***********
        ***************************************/


        /**
        *
        * @form identifiant du formulaire  
        * @action lien du post
        * @modal identifiant du modal
        */
        function chargerPage(id,page,title,table,head)
        {
          $(id).empty();

          $(id).load(page, {

            table:table, //nom de la base de données

            titre:title, //Title de la page

            ADS:title, // $ADS va permettre de vérifier si nous devons mettre du contenu, donc ajout, modification et suppression de données

            title:title,

            body:'',

            head: head
          });
        }

        /**
        *
        * @form identifiant du formulaire  
        * @action lien du post
        * @modal identifiant du modal
        */
        function redirigerPage(table,titre,title,ADS,body,head,query)
        {
          $("#table").val(table);
          $("#titre").val(titre);
          $("#ADS").val(ADS);
          $("#body").val(body);
          $("#head").val(head);
          $("#title").val(title);
          $("#query").val(query);

          $("#formdata").submit();
        }

        /**
        *
        * @form identifiant du formulaire  
        * @action lien du post
        * @modal identifiant du modal
        */
        function operation(form,action,modal)
        {
          alert("ok");
          //Initialisation de la session OMPAY 
          $.ajax({
            method:'POST',
            url:action,
            data: $(form).serialize(),
            dataType:'json'
          })

         //Redirection du partenaire vers Orange
         .done(function(data)
         {
          alert("ok4");
          $(data['id']).click(); //Recharge la page
          eval(data['notificaton']);//notificaton

        })

         .fail(function( jqXHR, textStatus ) 
         {
          alert("Le serveur n'a pas pu charger les données veuillez réessayer plus tard.");
        });

       }




       $(document).ready(function() {

        /***************************************
        ***********Section de la page***********
        ***************************************/

        //faq
        $('#faq').on('click', function ( e ) {
          e.preventDefault();

          redirigerPage('faq','faq',"faq",'ads','',"ID,Questions,Reponses,Etat","");

          //chargerPage('#content','contenu.php','faq','faq',['ID','Questions','Reponses','Etat']);

        });

        //presentation
        $('#presentation').on('click', function ( e ) {
          e.preventDefault();

          redirigerPage('accueil_info','presentation',"presentation",'ads','',"ID,Icon,Nombre,Titre,Texte,Etat","");
          //chargerPage('#content','contenu.php','presentation','accueil_info',['ID','Icon','Nombre','Titre','Texte','Etat']);

        });

        //prix
        $('#prix').on('click', function ( e ) {
          e.preventDefault();

          redirigerPage('accueil_prix','prix',"prix",'ads','',"ID,Icon,Titre,Texte,Liens,Etat","");

          //chargerPage('#content','contenu.php','prix','accueil_prix',['ID','Icon','Titre','Texte','Liens','Etat']);

        });

        //permisvoiture
        $('#permisvoiture').on('click', function ( e ) {
          e.preventDefault();

          redirigerPage('permis_voiture','permis',"permis_voiture",'ads','',"ID,Icon,Titre,Texte,Etat","");

          //chargerPage('#content','contenu.php','permis_voiture','permis_voiture',['ID','Icon','Titre','Texte','Etat']);

        });

        //permismoto
        $('#permismoto').on('click', function ( e ) {
          e.preventDefault();

          redirigerPage('permis_moto','permis',"permis_moto",'ads','',"ID,Icon,Titre,Texte,Etat","");

          //chargerPage('#content','contenu.php','permis_moto','permis_moto',['ID','Icon','Titre','Texte','Etat']);

        });

        //permisbateau
        $('#permisbateau').on('click', function ( e ) {
          e.preventDefault();

          redirigerPage('permis_bateau','permis',"permis_bateau",'ads','',"ID,Icon,Titre,Texte,Etat","");

          //chargerPage('#content','contenu.php','permis_bateau','permis_bateau',['ID','Icon','Titre','Texte','Etat']);

        });


        /***************************************
        ***********Gestion des clients***********
        ***************************************/

        //ajout de section
        $('#client').on('click', function ( e ) {
          e.preventDefault();

          redirigerPage('clients','client',"client",'ads','',"ID,Civilite,Nom,Prenom,Date Naissance,Login,Mot de Passe,Email,Tel 1,Tel 2,Tel3,Date inscription,Date Sortie,Code,Type Permis,Etat","clients1");

          //chargerPage('#content','contenu.php','clients','clients',['ID','Civilite','Nom','Prenom','Date Naissance','Login','Mdp','email','Tel 1','Tel 2','Tel3','Date inscription','Date Sortie','Code','Type Permis','Etat']);

        });

        //modification de section
        $('#demandeinscription').on('click', function ( e ) {
          e.preventDefault();

          redirigerPage('clients','demandeinscription',"demandeinscription",'ads','',"ID,Civilite,Nom,Prenom,Date Naissance,email,Tel 1,Tel 2,Tel3,Date inscription,Date Sortie,Code,Type Permis,Etat","clients");

        });

        //suppression de section
        $('#documentclient').on('click', function ( e ) {
          e.preventDefault();


        });








        //Notifications
        $('.eval-js').on('click', function ( e ) {
          e.preventDefault();

          if ( !$(this).hasClass('generate-toast') ) {
            var code = $(this).siblings('pre').find('code').text();
            code.replace("<span class='hidden'>", '');
            code.replace("</span");

            eval( code );
          };
        });

        if(<?php echo json_encode($toaster);?>){
         var code= <?php echo json_encode($toaster);?>;
         eval( code );
       }

       $('#icon-type').on('change', function () {
        if ( !$(this).val() ) {
          $('.custom-color-info').show();
          $('.toast-icon-line').hide();
          $('.toast-bgColor-line').show();
          $('.toast-textColor-line').show();
        } else {
          $('.toast-icon-line').show();
          $('.custom-color-info').hide();
          $('.toast-bgColor-line').hide();
          $('.toast-textColor-line').hide();
          $('.toast-icon-line span.toast-icon').text( $(this).val() );
        }
      });

            // You are about to see some extremely horrible code that can be MUCH MUCH improved,
            // I've knowlingly done it that way, please don't judge me based upon this ;)
            $(document).ready(function () {

              function generateCode () {
                var text = $('.plugin-options #toast-text').val(); 
                var heading = $('.plugin-options #toast-heading').val(); 
                var transition = $('.toast-transition').val(); 
                var allowToastClose = $('#allow-toast-close').val(); 
                var autoHide = $('#auto-hide-toast').val(); 
                var stackToasts = $('#stack-toasts').val(); 
                var toastPosition = $('#toast-position').val() 
                var toastBg = $('#toast-bg').val(); 
                var toastTextColor = $('#toast-text-color').val();
                var toastIcon = $('#icon-type').val();
                var textAlign = $('#text-align').val();
                var toastEvents = $('#add-toast-events').val();
                var loader = $('#show-loader').val();
                var loaderBg = $('#loader-bg').val();

                if ( text ) {
                  $('.toast-text-line').show(); 
                  $('.toast-text-line .toast-text').text( text ); 
                } else {
                  $('.toast-text-line').hide() 
                  $('.toast-text-line .toast-text').text(''); 
                };

                if ( heading ) {
                  $('.toast-heading-line').show(); 
                  $('.toast-heading-line .toast-heading').text( heading ); 
                } else {
                  $('.toast-heading-line').hide() 
                  $('.toast-heading-line .toast-heading').text(''); 
                }; 

                if ( transition ) {
                  $('.toast-transition-line').show() 
                  $('.toast-transition-line .toast-transition').text( transition ); 
                } else {
                  $('.toast-transition-line').hide(); 
                  $('.toast-transition-line .toast-transition').text('fade'); 
                } 

                if ( allowToastClose ) {
                  $('.toast-allowToastClose-line').show(); 
                  $('.toast-allowToastClose-line .toast-allowToastClose').text( allowToastClose ); 
                } else {
                  $('.toast-allowToastClose-line').hide(); 
                  $('.toast-allowToastClose-line .toast-allowToastClose').text( false ); 
                } 

                if ( autoHide && ( autoHide == 'false' ) ) {
                  $('.toast-hideAfter-line').show(); 
                  $('.toast-hideAfter-line .toast-hideAfter').text('false'); 
                  $('.autohide-after').hide(); 
                } else {
                  $('.toast-hideAfter-line').show(); 
                  $('.toast-hideAfter-line .toast-hideAfter').text( $('#autohide-after').val() ? $('#autohide-after').val() : 3000 ); 
                  $('.autohide-after').show(); 
                } 

                if ( stackToasts && stackToasts != 'true') {
                  $('.toast-stackLength-line').show(); 
                  $('.toast-stackLength-line .toast-stackLength').text( stackToasts ); 
                  $('.stack-length').hide(); 
                } else {
                  $('.stack-length').show(); 
                  $('.toast-stackLength-line').show(); 
                  $('.toast-stackLength-line .toast-stackLength').text( $('#stack-length').val() ? $('#stack-length').val() : 5 ); 
                } 

                if ( toastPosition && ( toastPosition !== 'custom-position' ) ) {
                  $('.toast-position-string-line').show(); 
                  $('.custom-toast-position').hide(); 
                  $('.toast-position-string-line .toast-position').text( toastPosition ); 
                } else {
                  $('.toast-position-string-line').hide(); 
                  $('.toast-position-string-line .toast-position').text(''); 
                } 

                if ( toastPosition && ( toastPosition === 'custom-position' ) ) {
                  $('.custom-toast-position').show(); 
                  $('.toast-position-string-obj').show(); 
                  var left = $('#left-position').val() ? $('#left-position').val() : 'auto'; 
                  var right = $('#right-position').val() ? $('#right-position').val() : 'auto'; 
                  var top = $('#top-position').val() ? $('#top-position').val() : 'auto'; 
                  var bottom = $('#bottom-position').val() ? $('#bottom-position').val() : 'auto'; 
                  $('.toast-position-string-obj .toast-position-left').text( ( left !== 'auto' ) ? left : "'" + left + "'" ); 
                  $('.toast-position-string-obj .toast-position-right').text( ( right !== 'auto' ) ? right : "'" + right + "'" ); 
                  $('.toast-position-string-obj .toast-position-top').text( ( top !== 'auto' ) ? top : "'" + top + "'" ); 
                  $('.toast-position-string-obj .toast-position-bottom').text(  ( bottom !== 'auto' ) ? bottom : "'" + bottom + "'"  ); 
                } else {
                  $('.toast-position-string-obj').hide(); 
                        // $('.toast-position-string-obj toast-position').text('');
                      } 

                      if ( !toastIcon ) {
                        if ( toastBg ) {
                          $('.toast-bgColor-line').show(); 
                          $('.toast-bgColor-line .toast-bgColor').text( toastBg ); 
                        } else {
                          $('.toast-bgColor-line').hide(); 
                          $('.toast-bgColor-line .toast-bgColor').text(''); 
                        } 

                        if ( toastTextColor ) {
                          $('.toast-textColor-line').show(); 
                          $('.toast-textColor-line .toast-textColor').text( toastTextColor ); 
                        } else {
                          $('.toast-textColor-line').hide(); 
                          $('.toast-textColor-line .toast-textColor').text(''); 
                        } 
                      }

                      if ( textAlign ) {
                        $('.toast-textAlign-line').show(); 
                        $('.toast-textAlign-line .toast-textAlign').text( textAlign ); 
                      } else {
                        $('.toast-textAlign-line').hide(); 
                        $('.toast-textAlign-line .toast-textAlign').text( ''); 
                      } 

                      if (loader == 'false') {
                        $('.toast-textLoader').html('false');
                      } else {
                        $('.toast-textLoader').html('true');
                      }

                      if (loaderBg) {
                        $('.toast-textLoaderBg').html(loaderBg);
                      }

                      if ( toastEvents == 'false' ) {
                        $('.toast-beforeShow-line').hide(); 
                        $('.toast-afterShown-line').hide(); 
                        $('.toast-beforeHide-line').hide(); 
                        $('.toast-afterHidden-line').hide(); 
                      } else {
                        $('.toast-beforeShow-line').show(); 
                        $('.toast-afterShown-line').show(); 
                        $('.toast-beforeHide-line').show(); 
                        $('.toast-afterHidden-line').show(); 
                      } 
                    }

                    $('#top-position').on('change', function () { $('#bottom-position').val('auto'); });
                    $('#bottom-position').on('change', function () { $('#top-position').val('auto'); });
                    $('#left-position').on('change', function () { $('#right-position').val('auto'); });
                    $('#right-position').on('change', function () {$('#left-position').val('auto'); });
                    $('.plugin-options :input').on('change', function () {
                      $.toast().reset('all');
                      generateCode();
                    });

                    $('.generate-toast').on('click', function( e ) {
                      e.preventDefault();
                      generateToast();
                    });

                    function generateToast () {
                      var options = {};

                      if ( $('.toast-text-line').is(':visible') ) {
                        options.text = $('.toast-text-line .toast-text').text();
                      } 

                      if ( $('.toast-heading-line').is(':visible') ) {
                        options.heading = $('.toast-heading').text(); 
                      }; 

                      if ( $('.toast-transition-line').is(':visible') ) {
                        options.showHideTransition = $('.toast-transition-line .toast-transition').text(); 
                      }; 

                      if ( $('.toast-allowToastClose-line').is(':visible') ) {
                        options.allowToastClose = ( $('.toast-allowToastClose-line .toast-allowToastClose').text() === 'true' ) ? true : false; 
                      }; 

                      if ( $('.toast-hideAfter-line').is(':visible') ) {
                        options.hideAfter = parseInt($('.toast-hideAfter-line .toast-hideAfter').text(), 10) || false; 
                      }; 

                      if ( $('.toast-stackLength-line').is(':visible') ) {
                        options.stack = parseInt($('.toast-stackLength-line .toast-stackLength').text(), 10) || false; 
                      }; 

                      if ( $('.toast-position-string-line').is(':visible') ) {
                        options.position = $('.toast-position-string-line .toast-position').text(); 
                      }; 

                      if ( $('.toast-position-string-obj').is(':visible') ) {
                        options.position = {}; 
                        options.position.left =  parseFloat( $('.toast-position .toast-position-left').text() ) || 'auto'; 
                        options.position.right =  parseFloat( $('.toast-position .toast-position-right').text() ) || 'auto'; 
                        options.position.top =  parseFloat( $('.toast-position .toast-position-top').text() ) || 'auto'; 
                        options.position.bottom =  parseFloat( $('.toast-position .toast-position-bottom').text() ) || 'auto'; 
                      }; 

                      if ( $('.toast-icon-line').is(':visible') ) {
                        options.icon = $('.toast-icon-line .toast-icon').text();
                      };

                      if ( $('.toast-bgColor-line').is(':visible') ) {
                        options.bgColor = $('#toast-bg').val(); 
                      }; 

                      if ( $('.toast-text-color').is(':visible') ) {
                        options.textColor = $('#toast-text-color').val(); 
                      }; 

                      if ( $("#text-align").is(':visible') ) {
                        options.textAlign = $('#text-align').val(); 
                      };

                      options.loader = $('.toast-textLoader').html() === 'false' ? false : true;
                      options.loaderBg = $('.toast-textLoaderBg').html();

                      $.toast( options ); 
                    }

                    generateCode(); 
                  });
});

</script>

</body>

</html>