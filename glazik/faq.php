<?php 
require_once 'inc/db.php'; // Appel fichier connexion bdd
require 'inc/header.php'; ?>

<meta name="description" content="Website Creator Description">
<title>FAQ</title>

</head>

<body>

    <section class="engine"><a href="https://mobirise.info/g">build your own site</a></section><section class="mbr-section content5 cid-ra1Jtl5gfl mbr-parallax-background" id="content5-13">


        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                    FAQ</h2>              
                </div>
            </div>
        </div>
    </section>

    <section class="toggle1 cid-ra1Hii4hdj" id="toggle1-p">




        <div class="container">
            <div class="media-container-row">
                <div class="col-12 col-md-8">
                    <div class="section-head text-center space30">
                       <h2 class="mbr-section-title pb-5 mbr-fonts-style display-2">Vous avez des questions ?<br>Trouvez les ici</h2>
                   </div>
                   <div class="clearfix"></div>
                   <div id="bootstrap-toggle" class="toggle-panel accordionStyles tab-content">


                    <?php 
                            //On prend dans la base de données les informations  qui sont activées
                    $req = $bdd->prepare('SELECT * FROM faq WHERE etat= :etat');

                    $req->execute(['etat' => 'active']);

                    $resultat = $req->fetchAll();

                    foreach($resultat as $ligne){?>

                    <div class="card">
                        <div class="card-header" role="tab" id="headingOne<?php echo $ligne->id?>">
                            <a role="button" class="collapsed panel-title text-black" data-toggle="collapse" data-parent="#accordion" data-core="" href="#collapse1_16<?php echo $ligne->id?>" aria-expanded="false" aria-controls="collapse1">
                                <h4 class="mbr-fonts-style display-5">
                                    <span class="sign mbr-iconfont mbri-arrow-down inactive"></span>
                                    <?php echo $ligne->question?>
                                </h4>
                            </a>
                        </div>
                        <div id="collapse1_16<?php echo $ligne->id?>" class="panel-collapse noScroll collapse" role="tabpanel" aria-labelledby="headingOne<?php echo $ligne->id?>">
                            <div class="panel-body p-4">
                                <p class="mbr-fonts-style panel-text display-7">
                                    <?php echo $ligne->reponse?></p>
                                </div>
                            </div>
                        </div>


                        <?php }?>


                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cid-ra1KeYNsp7" id="social-buttons2-17">





        <div class="container">
            <div class="media-container-row">
                <div class="col-md-8 align-center">
                    <h2 class="pb-3 mbr-fonts-style display-2">
                        FOLLOW US!
                    </h2>
                    <div class="social-list pl-0 mb-0">
                        <a href="https://twitter.com/mobirise" target="_blank">
                            <span class="px-2 socicon-twitter socicon mbr-iconfont mbr-iconfont-social"></span>
                        </a>
                        <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">

                        </a>
                        <a href="https://instagram.com/mobirise" target="_blank">

                        </a>
                        <a href="https://www.youtube.com/c/mobirise" target="_blank">

                        </a>
                        <a href="https://plus.google.com/u/0/+Mobirise" target="_blank">

                        </a>
                        <a href="https://www.behance.net/Mobirise" target="_blank">

                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php require 'inc/footer.php'; ?>