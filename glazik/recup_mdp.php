
<?php require 'inc/header.php'; ?>

<meta name="description" content="Website Generator Description">
<title>Recupération login / mot de passe</title>
</head>

<section class="engine"></section><section class="mbr-section content5 cid-ra1PWgqd9h mbr-parallax-background" id="content5-1g">

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-1">
                RÉCUPÉRATION LOGIN / MOT DE PASSE </h2>                
            </div>
        </div>
    </div>
</section>

<section once="" class="cid-ra2b3AOLdU" id="footer6-1z">
    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="col-12">
                <p class="mbr-text mb-0 mbr-fonts-style display-2" style="color: black;"><strong id="good"></strong></p>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section article content11 cid-ra1Pj1zqWv" id="content11-1d">

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-text counter-container col-12 col-md-8 mbr-fonts-style display-7">
                <ol id="info-mdp">
                    <li><strong>RÉCUPÉRATION LOGIN / MOT DE PASSE </strong> - Une fois que vous aurez validez l'envoi de votre demande de nouveaux mot de passe, vous le recevrez dans un court délais dans votre boite mail.</li>
                </ol>
                <p id="message-mdp"></p>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section form1 cid-ra1Q0YR6qO" id="form1-1h">

    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">


            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8">
                <div data-form-alert="" hidden="">
                    Thanks for filling out the form!
                </div>
                
                <form id="recuperermdp" class="mbr-form" action="JavaScript: recuperermdp()" method="post">

                    <div class="row row-sm-offset">

                        <div class="col-md-4 multi-horizontal" data-for="phone">
                            <div class="form-group">

                                <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-1h">
                                Objet </label>

                                <select class="form-control" name="recup_log_mdp" id="recup_log_mdp" size="1"  required="">

                                   <option value="login">
                                   Récupération Login</option>
                                   <option value="mdp">
                                   Récupération Mot de Passe</option>

                               </select>

                           </div>

                       </div>


                       <div class="col-md-4 multi-horizontal" data-for="name">
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7" for="name-form1-1h">Nom</label>
                            <input type="text" class="form-control" name="nom" data-form-field="nom" id="name-form1-1h"  required="">
                        </div>
                    </div>

                    <div class="col-md-4 multi-horizontal" data-for="phone">
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-1h">
                            Prenom </label>
                            <input type="tel" class="form-control" name="prenom" data-form-field="prenom" id="phone-form1-1h" required="">
                        </div>
                    </div>

                    <div class="col-md-4 multi-horizontal" data-for="phone">
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7" for="phone-form1-1h">Date Naissance</label>
                            <input type="date" class="form-control" name="date_naissance" data-form-field="date_naissance" id="phone-form1-1h" required="">

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
                            <label class="form-control-label mbr-fonts-style display-7" for="tel1-form1-1h">Telephone</label>
                            <input type="tel" class="form-control" name="tel1" data-form-field="tel1" id="tel1-form1-1h" required="">
                        </div>
                    </div>

                    
                    <span class="input-group-btn"><button id="mdpoublie" type="submit" class="btn btn-primary btn-form display-4"><span class="mbri-paper-plane mbr-iconfont mbr-iconfont-btn"></span>Terminer</button></span>

                </div>

            </form>

        </div>
    </div>
</section>

<?php require 'inc/footer.php'; ?>

<script>


        /**
        *
        */
        function recuperermdp()
        {
            alert("coucou");

          //Demande mdp
          $.ajax({
            method:'POST',
            url:'controlleur/recuperermdp.php',
            data: $("#recuperermdp").serialize(),
            dataType:'json'
        })

         //Redirection
         .done(function(data)
         {
            if(data['texte']!=""){
                $("#info-mdp").empty();
                $("#form1-1h").empty();
                $("#good").html(data['message']);
                $("#message-mdp").html(data['texte']);
            }else{
                $("#info-mdp").empty();
                $("#good").html(data['message']);
                $("#message-mdp").html(data['texte']);
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