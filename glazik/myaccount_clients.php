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

           </h2>
           <h3 class="mbr-section-subtitle align-center mbr-light pb-3 mbr-fonts-style display-5" id="demandeinfo">

           </h3>
       </div>
   </div>
</div>
<div class="container">
   <div class="row justify-content-center">
     <div class="media-container-column col-lg-8">

        <form class="mbr-form" action="controlleur/envoyerdocument.php" id="envoyerdocument" method="post" enctype="multipart/form-data">

           <div class="row row-sm-offset">

             <div class="col-md-4 multi-horizontal" data-for="name">
               <div class="form-group">

                <div class="col-md-4 multi-horizontal" data-for="cni">
                   <div class="form-group">
                    <label class="form-control-label mbr-fonts-style display-7" for="cni-form1-1h">Carte National d'identité</label>
                    <input type="file" class="form-control" name="cni" data-form-field="cni" id="cni-form1-1h"  >
                </div>

                <div class="form-group">
                    <label class="form-control-label mbr-fonts-style display-7" for="justificatifdomicile-form1-1h">
                    Justificatif domicile </label>
                    <input type="file" class="form-control" name="justificatifdomicile" data-form-field="justificatifdomicile" id="justificatifdomicile-form1-1h" >
                </div>

            </div>

            <div class="col-md-4 multi-horizontal" data-for="permis">
             <div class="form-group">
                <label class="form-control-label mbr-fonts-style display-7" for="permis-form1-1h">Permis</label>
                <input type="file" class="form-control" name="permis" data-form-field="permis" id="permis-form1-1h" >
            </div>
        </div>

        <div class="col-md-4 multi-horizontal" data-for="photo">
         <div class="form-group">
            <label class="form-control-label mbr-fonts-style display-7" for="photo-form1-1h">Photo</label>
            <input type="file" class="form-control" name="photo" data-form-field="photo" id="photo-form1-1h" >
        </div>
    </div>

</div>

<span class="input-group-btn"><button href="" type="submit" class="btn btn-primary btn-form display-4"><span class="mbri-paper-plane mbr-iconfont mbr-iconfont-btn"></span>Envoyer</button></span>

</form>

</div>
</div>
</div>
</section>

<?php require 'inc/footer.php'; ?>