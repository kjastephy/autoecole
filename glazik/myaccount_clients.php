<?php 
require_once 'inc/db.php'; // Appel fichier connexion bdd
require 'inc/header.php'; ?>

<meta name="description" content="Website Creator Description">
<title>Envoyer Document</title>

</head>

<body>

    <section class="engine"></section><section class="mbr-section content5 cid-ra1Jtl5gfl mbr-parallax-background" id="content5-13">

        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    ENVOYER DOCUMENT</h2>              
                </div>
            </div>
        </div>
    </section>

    <section class="mbr-section form1 cid-ra1EcG7NzA" id="form1-b">


       <div class="container">
         <div class="row justify-content-center">
           <div class="title col-12 col-lg-8">
             <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
               PRENEZ CONTACT AVEC NOUS
           </h2>
           <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5" id="demandeinfo">
               N'hésitez pas à venir vers nous, si vous avez des questions. <br>
               La <a href="faq.php"> FAQ </a> peut aussi vous être utile.
           </h3>
       </div>
   </div>
</div>
<div class="container">
 <div class="row justify-content-center">
   <div class="media-container-column col-lg-8">

      <form class="mbr-form" action="JavaScript:contacter()" id="contacter">

         <div class="row row-sm-offset">

           <div class="col-md-4 multi-horizontal" data-for="name">
             <div class="form-group">

               <div class="col-md-4 multi-horizontal" data-for="nom">
                 <div class="form-group">
                   <label class="form-control-label mbr-fonts-style display-7" for="nom-form1-1h">Nom</label>
                   <input type="text" class="form-control" name="nom" data-form-field="nom" id="nom-form1-1h" required="" >
               </div>

               <div class="form-group">
                <label class="form-control-label mbr-fonts-style display-7" for="prenom-form1-1h">
                Prenom </label>
                <input type="tel" class="form-control" name="prenom" data-form-field="prenom" id="prenom-form1-1h" required="">
            </div>

        </div>

        <div class="col-md-4 multi-horizontal" data-for="email">
           <div class="form-group">
             <label class="form-control-label mbr-fonts-style display-7" for="email-form1-1h">Email</label>
             <input type="email" class="form-control" name="email" data-form-field="Email" id="email-form1-1h" required="">
         </div>
     </div>

     <div class="col-md-4 multi-horizontal" data-for="telephone">
       <div class="form-group">
          <label class="form-control-label mbr-fonts-style display-7" for="telephone-form1-1h">Telephone</label>
          <input type="tel" class="form-control" name="telephone" data-form-field="telephone" id="telephone-form1-1h" required="">
      </div>
  </div>

  <div class="col-md-4 multi-horizontal" data-for="objet">
     <div class="form-group">
        <label class="form-control-label mbr-fonts-style display-7" for="objet-form1-1h">
        Objet </label>
        <input type="tel" class="form-control" name="objet" data-form-field="objet" id="objet-form1-1h" required="">
    </div>
</div>

<div class="form-group" data-for="message">
   <label class="form-control-label mbr-fonts-style display-7" for="message-form1-1h">Message</label>
   <textarea type="text" class="form-control" name="message" rows="7" data-form-field="Message" id="message-form1-1h" required=""></textarea>
</div>

</div>

<span class="input-group-btn"><button href="" type="submit" class="btn btn-primary btn-form display-4"><span class="mbri-paper-plane mbr-iconfont mbr-iconfont-btn"></span>Envoyer</button></span>

<!--<span class="gdpr-block "><label><input type="checkbox" name="gdpr" id="gdpr-form1-b" required="">By continiung you agree to our <a href="terms.html">Terms of Service</a> and <a href="policy.html">Privacy Policy</a>.</label></span>-->
</form>

</div>
</div>
</div>
</section>

<?php require 'inc/footer.php'; ?>