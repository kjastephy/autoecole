<?php 
require_once 'inc/db.php'; // Appel fichier connexion bdd
require 'inc/header.php'; ?>

<meta name="description" content="Web Generator Description">
<title>PERMIS</title>

</head>
<body>

    <section class="engine"><a href="https://mobirise.info/e">how to make a website</a></section><section class="mbr-section content5 cid-ra1TOafYPQ mbr-parallax-background" id="content5-1r">

        <div class="container">
            <div class="media-container-row">
                <div class="title col-12 col-md-8">
                    <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">PERMIS</h2>



                </div>
            </div>
        </div>
    </section>

    <section class="tabs3 cid-ra1SjdITIN" id="tabs3-1l">

        <div class="container">
            <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">Présentation PERMIS</h2>
            <h3 class="mbr-section-subtitle  display-5 align-center mbr-light mbr-fonts-style">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            </h3>
        </div>
        <div class="container-fluid">
            <div class="row tabcont">
                <ul class="nav nav-tabs pt-3 mt-5" role="tablist">
                    <li class="nav-item mbr-fonts-style"><a class="nav-link active show display-7" role="tab" data-toggle="tab" href="#tabs3-1l_tab0" aria-selected="true">
                        Voiture
                    </a></li>
                    <li class="nav-item mbr-fonts-style"><a class="nav-link  show active display-7" role="tab" data-toggle="tab" href="#tabs3-1l_tab1" aria-selected="true">
                        Moto
                    </a></li>
                    <li class="nav-item mbr-fonts-style"><a class="nav-link show active display-7" role="tab" data-toggle="tab" href="#tabs3-1l_tab2" aria-selected="true">
                        Bateau
                    </a></li>



                </ul>
            </div>
        </div>

        <div class="container">
            <div class="row px-1">
                <div class="tab-content">
                    <div id="tab1" class="tab-pane in active mbr-table" role="tabpanel">
                        <div class="row tab-content-row">

                            <?php 
                            //On prend dans la base de données les informations  qui sont activées
                            $req = $bdd->prepare('SELECT * FROM permis_voiture WHERE etat= :etat');

                            $req->execute(['etat' => 'active']);

                            $resultat = $req->fetchAll();

                            foreach($resultat as $ligne){?>

                            <div class="col-xs-12 col-md-6 col-lg-4">
                                <div class="card-img ">
                                    <span class="<?php echo $ligne->icon?>"></span>
                                </div>
                                <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                    <?php echo $ligne->titre?>
                                </h4>
                                <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                    <?php echo $ligne->texte?>
                                </p>
                            </div>
                            <?php }?>

                        </div>
                    </div>

                    <div id="tab2" class="tab-pane  mbr-table" role="tabpanel">
                        <div class="row tab-content-row">

                            <?php 
                            //On prend dans la base de données les informations  qui sont activées
                            $req = $bdd->prepare('SELECT * FROM permis_moto WHERE etat= :etat');

                            $req->execute(['etat' => 'active']);

                            $resultat = $req->fetchAll();

                            foreach($resultat as $ligne){?>

                            <div class="col-xs-12 col-md-6 col-lg-4">
                                <div class="card-img ">
                                    <span class="<?php echo $ligne->icon?>"></span>
                                </div>
                                <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                    <?php echo $ligne->titre?>
                                </h4>
                                <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                    <?php echo $ligne->texte?>
                                </p>
                            </div>
                            <?php }?>

                        </div>
                    </div>

                    <div id="tab3" class="tab-pane  mbr-table" role="tabpanel">
                        <div class="row tab-content-row">

                            <?php 
                            //On prend dans la base de données les informations  qui sont activées
                            $req = $bdd->prepare('SELECT * FROM permis_bateau WHERE etat= :etat');

                            $req->execute(['etat' => 'active']);

                            $resultat = $req->fetchAll();

                            foreach($resultat as $ligne){?>

                            <div class="col-xs-12 col-md-6 col-lg-4">
                                <div class="card-img ">
                                    <span class="<?php echo $ligne->icon?>"></span>
                                </div>
                                <h4 class="mbr-element-title  align-center mbr-fonts-style pb-2 display-5">
                                    <?php echo $ligne->titre?>
                                </h4>
                                <p class="mbr-section-text  align-center mbr-fonts-style display-7">
                                    <?php echo $ligne->texte?>
                                </p>
                            </div>
                            <?php }?>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</section>

<?php require 'inc/footer.php'; ?>