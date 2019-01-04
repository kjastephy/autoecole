  <?php 
require_once 'inc/db.php'; // Appel fichier connexion bdd
require 'inc/header.php';?>

<meta name="description" content="">
<title>HOME</title>

</head>

<section class="engine"><a href="https://mobirise.info/s">free bootstrap themes</a></section><section class="cid-ra1CpCI18h mbr-fullscreen mbr-parallax-background" id="header2-3">


  <div class="mbr-overlay" style="opacity: 0.3; background-color: rgb(118, 118, 118);"></div>

  <div class="container align-center">
    <div class="row justify-content-md-center">
      <div class="mbr-white col-md-10">
        <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
        AUTO ECOLE GLAZIK</h1>
        
        
        <div class="mbr-section-btn"><a class="btn btn-md btn-secondary display-4" href="index.html#counters2-7">EN SAVOIR PLUS</a></div>
      </div>
    </div>
  </div>
  <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
    <a href="#next">
      <i class="mbri-down mbr-iconfont"></i>
    </a>
  </div>
</section>

<section class="counters2 counters cid-ra1DQU9lzv" id="counters2-7">

  <div class="container pt-4 mt-2">
    <div class="media-container-row">
      <div class="media-block" style="width: 45%;">
        <h2 class="mbr-section-title pb-3 align-left mbr-fonts-style display-2">AUTO ECOLE GLAZIK</h2>
        
        <div class="mbr-figure">
          <img src="assets/images/jumbotron.jpg">
        </div>
      </div>
      <div class="cards-block">
        <div class="cards-container">

          <?php 

                    //On prend dans la base de données les informations  qui sont activées
          $req = $bdd->prepare('SELECT * FROM accueil_prix WHERE etat= :etat');

          $req->execute(['etat' => 'active']);

          $resultat = $req->fetchAll();

          foreach($resultat as $ligne){?>


          <div class="card px-3 align-left col-12 col-md-6">
            <div class="panel-item p-3">
              <div class="card-img pb-3">
                <span class="<?php echo $ligne->icon?>"></span>
                <h3 class="count py-3 mbr-fonts-style display-2">
                  <?php echo $ligne->nombre?>
                </h3>
              </div>
              <div class="card-text">
                <h4 class="mbr-content-title mbr-bold mbr-fonts-style display-7">
                  <?php echo $ligne->titre?>
                </h4>
                <p class="mbr-content-text mbr-fonts-style display-7">
                 <?php echo $ligne->texte?>
               </p>
             </div>
           </div>
         </div>

         <?php }?>
       </div>
     </div>
   </div>
 </div>
</section>

<section once="" class="cid-ra1VKkvga1" id="footer6-1t">





  <div class="container">
    <div class="media-container-row align-center mbr-white">
      <div class="col-12">
        <p class="mbr-text mb-0 mbr-fonts-style display-2"><strong>Formulaire Inscription</strong></p>
      </div>
    </div>
  </div>
</section>

<section class="features8 cid-ra1D5VtrUv mbr-parallax-background" id="features8-5">


  <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(35, 35, 35);">
  </div>

  <div class="container">
    <div class="media-container-row">

     <?php 

           //On prend dans la base de données les informations sur le prix qui sont activées
     $req = $bdd->prepare('SELECT * FROM accueil_prix WHERE etat= :etat');

     $req->execute(['etat' => 'active']);

     $resultat = $req->fetchAll();

     foreach($resultat as $ligne){?>

     <div class="card  col-12 col-md-6 col-lg-3">
      <div class="card-img">
        <span class="<?php echo $ligne->icon ?>"></span>
      </div>
      <div class="card-box align-center">
        <h4 class="card-title mbr-fonts-style display-7">
          <?php echo $ligne->titre ?>
        </h4>
        <p class="mbr-text mbr-fonts-style display-7">
          <?php echo $ligne->texte ?>
        </p>
      </div>
      <div class="mbr-section-btn text-center">
        <a href="<?php echo $ligne->lien ?>" class="btn btn-secondary display-4">
          More
        </a>
      </div>
    </div>
    <?php } ?>

  </div>
</div>
</section>

<section class="map1 cid-ra1EbSdMUg" id="map1-a">



 <div class="google-map">
   <iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10658.700688409508!2d-4.001350830020452!3d48.0972099328944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48112f5651168929%3A0xfd2e6bc61688fc3a!2s1+Rue+du+G%C3%A9n%C3%A9ral+de+Gaulle%2C+29510+Briec!5e0!3m2!1sfr!2sfr!4v1543395432933" width="800" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
 </div>

</section>

<section class="mbr-section form1 cid-ra1EcG7NzA" id="form1-b">


 <div class="container">
   <div class="row justify-content-center">
     <div class="title col-12 col-lg-8">
       <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
         PRENEZ CONTACT AVEC NOUS
       </h2>
       <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5">
         N'hésitez pas à venir vers nous, si vous avez des questions. <br>
         La <a href="faq.php"> FAQ </a> peut aussi vous être utile.
       </h3>
     </div>
   </div>
 </div>
 <div class="container">
   <div class="row justify-content-center">
     <div class="media-container-column col-lg-8" data-form-type="formoid">
       <div data-form-alert="" hidden="">Thanks for filling out the form!</div>

       <form class="mbr-form" action="traitement_mail.php" method="post" data-form-title="Mobirise Form"><input type="hidden" name="email" data-form-email="true" value="nOtHYh9P9jdX2dhdz/ttxNlx8r0i49a6m3K2mt66KG8x70pUlM2/utFapWaGg7w7tsg/D2aWT7pO6L0AVJAywLWwqtTnERhPG4EernwYlDt14dqzmUWo8i19JOQ3Ec7X">

         <div class="row row-sm-offset">

           <div class="col-md-4 multi-horizontal" data-for="name">
             <div class="form-group">

               <div class="col-md-4 multi-horizontal" data-for="name">
                 <div class="form-group">
                   <label class="form-control-label mbr-fonts-style display-7" for="name-form1-1h">Nom</label>
                   <input type="text" class="form-control" name="name" data-form-field="Name" required="" id="name-form1-1h" required="" >
                 </div>

                 <div class="form-group">
                   <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-1h">
                   Prenom </label>
                   <input type="tel" class="form-control" name="phone" data-form-field="Phone" id="phone-form1-1h" required="">
                 </div>

               </div>

               <div class="col-md-4 multi-horizontal" data-for="email">
                 <div class="form-group">
                   <label class="form-control-label mbr-fonts-style display-7" for="email-form1-1h">Email</label>
                   <input type="email" class="form-control" name="email" data-form-field="Email" required="" id="email-form1-1h" required="">
                 </div>
               </div>

               <div class="col-md-4 multi-horizontal" data-for="phone">
                 <div class="form-group">
                   <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-1h">Phone</label>
                   <input type="tel" class="form-control" name="phone" data-form-field="Phone" id="phone-form1-1h" required="">
                 </div>
               </div>

               <div class="col-md-4 multi-horizontal" data-for="phone">
                 <div class="form-group">
                   <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-1h">
                   Objet </label>
                   <input type="tel" class="form-control" name="phone" data-form-field="Phone" id="phone-form1-1h" required="">
                 </div>
               </div>

               <div class="form-group" data-for="message">
                 <label class="form-control-label mbr-fonts-style display-7" for="message-form1-1h">Message</label>
                 <textarea type="text" class="form-control" name="message" rows="7" data-form-field="Message" id="message-form1-1h" required=""></textarea>
               </div>

             </div>

             <span class="input-group-btn"><button href="" type="submit" class="btn btn-primary btn-form display-4"><span class="mbri-paper-plane mbr-iconfont mbr-iconfont-btn"></span>Envoyer</button></span>

             <span class="gdpr-block "><label><input type="checkbox" name="gdpr" id="gdpr-form1-b" required="">By continiung you agree to our <a href="terms.html">Terms of Service</a> and <a href="policy.html">Privacy Policy</a>.</label></span></form>

           </div>
         </div>
       </div>
     </section>

     <?php require 'inc/footer.php'; ?>


