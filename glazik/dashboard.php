<?php 
session_start();
?>


<?php include_once("dashheader.php");?>

<body class="vertical-layout vertical-menu-modern 2-columns <?php echo (isset($_POST['table']) && $_POST['table']=='email')? 'email-application':'';?> menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

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
                <a class="dropdown-item" href="inc/deconnexion.php"><i class="ft-power"></i>Déconnexion</a>
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
        <li class=" navigation-header"><span>MESSAGERIE</span><i class=" ft-minus" data-toggle="tooltip" data-placement="right" data-original-title="General"></i>
        </li>

        <li class="">
          <a class="menu-title" href="#" id="email">
            <i class="ft-monitor"></i>
            <span class="menu-title" data-i18n="">Email</span>
          </a>

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




  <?php if (isset($_POST['table']) && $_POST['table']=='email') {

    include_once('contenu_mail.php');

  }else{?>
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

  <?php 
}
include_once("dashfooter.php");?>