<?php 

require 'inc/header.php'; 

?>

<meta name="description" content="Website Generator Description">
<title>INSCRIPTION</title>
</head>

<section class="engine"><a href=""></a></section><section class="mbr-section content5 cid-ra1PWgqd9h mbr-parallax-background" id="content5-1g">

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                DEMANDE INSCRIPTION</h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">
                Bienvenue chez Auto Ecole Glazik</h3>
            </div>
        </div>
    </div>
</section>

<section once="" class="cid-ra2b3AOLdU" id="footer6-1z">
    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-2" style="color: black;"><strong id="good">Formulaire Inscription</strong></p>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content11 cid-ra1Pj1zqWv" id="content11-1d">


    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ol id="info-inscription">
                    <li><strong>Etape 1 : </strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus blanditiis labore, dolore ipsum quae eos neque debitis numquam veritatis a, voluptates dignissimos ducimus maiores doloremque culpa, et earum sapiente qui!</li>
                    <li><strong>Etape 2 : </strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quis ab eveniet saepe, quibusdam voluptate voluptatibus maxime suscipit autem laboriosam doloremque molestiae, amet cum. Inventore est, iusto sapiente ipsa voluptate?</li>
                    <li><strong>Etape 3 : </strong> - Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto ullam saepe labore. Incidunt molestias consequatur iste beatae eius. Reiciendis deserunt labore minus iusto veniam nemo! Esse eius ducimus, molestias cum.</li>
                </ol>
                <p id="message-inscription"></p>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section form1 cid-ra1Q0YR6qO" id="form1-1h">
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8">
                <div class="row justify-content-center">
                    <form id="demandeinscription" method="post" class="mbr-form" action="JavaScript:demandeinscription()">

                        <input type="text" hidden="true" id="option" class="form-control" name="add" value="add" >

                        <div class="row row-sm-offset">

                            <div class="col-md-4 multi-horizontal" data-for="civilite">
                                <div class="form-group">

                                    <label class="form-control-label mbr-fonts-style display-7" for="civilite-form1-1h">
                                    Civilité </label>

                                    <select class="form-control" name="civilite" id="civilite" size="1" required="">

                                       <option value="Mlle">Mademoiselle</option>
                                       <option value="Mme">Madame</option>
                                       <option value="M.">Monsieur</option>

                                   </select>

                               </div>

                           </div>


                           <div class="col-md-4 multi-horizontal" data-for="nom">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="nom-form1-1h">Nom</label>
                                <input type="text" class="form-control" name="nom" data-form-field="Nom" id="nom-form1-1h" required="" >
                            </div>
                        </div>

                        <div class="col-md-4 multi-horizontal" data-for="prenom">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="prenom-form1-1h">
                                Prenom </label>
                                <input type="tel" class="form-control" name="prenom" data-form-field="prenom" id="prenom-form1-1h" required="">
                            </div>
                        </div>

                        <div class="col-md-4 multi-horizontal" data-for="dateNaissance">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="dateNaissance-form1-1h">Date Naissance</label>
                                <input type="date" class="form-control" name="dateNaissance" data-form-field="dateNaissance" id="dateNaissance-form1-1h" required="">


                            </div>
                        </div>

                        <div class="col-md-4 multi-horizontal" data-for="email">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="email-form1-1h">Email</label>
                                <input type="email" class="form-control" name="email" data-form-field="Email" id="email-form1-1h" required="">
                            </div>
                        </div>

                        <div class="col-md-4 multi-horizontal" data-for="tel1">
                            <div class="form-group">
                                <label class="form-control-label mbr-fonts-style display-7" for="tel1-form1-1h">Téléphone</label>
                                <input type="tel" class="form-control" name="tel1" data-form-field="tel1" id="tel1-form1-1h" required="">
                            </div>
                        </div>


                        <div class="col-md-4 multi-horizontal" data-for="permis">
                            <div class="form-group">

                                <label class="form-control-label mbr-fonts-style display-7" for="permis-form1-1h">
                                Permis </label>

                                <select class="form-control" name="permis" id="permis" size="1" required="">

                                    <option value="Voiture">Voiture</option>
                                    <option value="Moto">Moto</option>
                                    <option value="Bateau">Bateau</option>

                                </select>

                            </div>

                            <div class="form-group">

                                <label class="form-control-label mbr-fonts-style display-7" for="permis-form1-1h">
                                Possède Code </label>

                                <select class="form-control" name="code" id="code"  required="">

                                    <option value="Oui">Oui</option>
                                    <option value="Non">Non</option>

                                </select>

                            </div>

                        </div>
                        
                    </div>

                    <span class="input-group-btn"><button id="inscription" type="submit" class="btn btn-primary btn-form display-4"><span class="mbri-paper-plane mbr-iconfont mbr-iconfont-btn"></span>Demande d'inscription</button></span>

                </form>
            </div>
        </div>
    </div>
</div>

</section>

<?php require 'inc/footer.php'; ?>

<script>


        /**
        *
        */
        function demandeinscription()
        {
          //Demande d'inscription
          $.ajax({
            method:'POST',
            url:'controlleur/demandeinscription.php',
            data: $("#demandeinscription").serialize(),
            dataType:'json'
        })

         //Redirection
         .done(function(data)
         {
            if(data['message']=="redirection"){
                $(location).attr("href", "/glazik");
            }if(data['texte']!=""){
                $("#info-inscription").empty();
                $("#form1-1h").empty();
                $("#good").html(data['message']);
                $("#message-inscription").html(data['texte']);
            }else{
                $("#info-inscription").empty();
                $("#good").html(data['message']);
                $("#message-inscription").html(data['texte']);
            }

        })

         .fail(function( jqXHR, textStatus ) 
         {
          alert("Le serveur n'a pas pu charger les données veuillez réessayer plus tard.");
      });

     }


     $(document).ready(function() {


     });


 </script>
