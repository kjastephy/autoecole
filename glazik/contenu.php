<?php 
//session_start();

if(isset($_POST['table']) && isset($_POST['titre']) && isset($_POST['ADS']) && isset($_POST['title']) && isset($_POST['body']) && isset($_POST['head'])){

    $query= array(
        'clients' => "SELECT id_Clients, civilite, nom, prenom, date_naissance, email, tel1, tel2, tel_Parents, date_Inscription, date_Sortie, possede_Code, id_CatPermis, etat FROM {$_POST['table']} WHERE etat='demande'" ,
        'clients1' => "SELECT * FROM {$_POST['table']} WHERE etat='inscrit'"
    );

    $req = $bdd->prepare(!empty($_POST['query'])? $query[$_POST['query']]: "SELECT * FROM {$_POST['table']}");

    $req->execute();

    $data = $req->fetchAll(PDO::FETCH_ASSOC);

$titre=$_POST['titre']; //Title de la page

$ADS=$_POST['ADS']; // $ADS va permettre de vérifier si nous devons mettre du contenu, donc ajout, modification et suppression de données

$title=$_POST['title'];

$body=$_POST['body'];

if (!(empty($data)))
{
    $head=explode(",",$_POST['head']);//En-tête du tableau

    $content=$data;//Données du tableau
}

?>

<!-- Scroll - horizontal table -->
<section id="horizontal">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"><?php echo $title ?></h4>
                    <a class="heading-elements-toggle"><i class="fa fa-ellipsis-v font-medium-3"></i></a>
                    <div class="heading-elements">
                        <ul class="list-inline mb-0">
                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-content collapse show">
                    <div class="card-body card-dashboard">
                        <p class="card-text"><?php echo $body ?></p>
                        <?php 
                        if (!empty($head) && !empty($content) && !empty($ADS))
                            { ?> 
                                <!-- $ADS va permettre de vérifier si nous devons mettre du contenu, donc ajout, modification et suppression de données-->
                                <div class="form-group">
                                    <!-- Button trigger modal -->
                                    <button style="width: 350px;display: block;margin: 0 auto;" type="button" class="btn btn-outline-secondary block btn-lg" data-toggle="modal" data-backdrop="false" data-target="#ajouter">
                                        AJOUTER UN CONTENU
                                    </button>

                                    <!-- Modal -->
                                    <div class="modal fade text-left" id="ajouter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8" style="display: none;" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header bg-secondary white">
                                            <h4 class="modal-title" id="myModalLabel8"><?php echo 'Ajouter '.$titre ?></h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">×</span>
                                          </button>
                                      </div>

                                      <div class="modal-body">
                                        <section class="input-validation" id="form-control-repeater">
                                            <div class="card">
                                                <div class="card-content collapse show">
                                                    <div class="card-body">
                                                        <?php $action_form="JavaScript:operation('#formajout','controlleur/{$titre}.php','#ajouter');"; ?>
                                                        <form id="formajout" class="form" method="post" action="<?php echo $action_form;?>
                                                            " novalidate>

                                                            <!--contenu du formulaire-->

                                                            <input type="text" hidden="true" id="option" class="form-control" name="add" value="add" >

                                                            <?php include("formulaire/{$titre}-add.php"); ?>

                                                            <div class="form-actions right">
                                                                <button type="button" class="btn btn-warning mr-1" data-dismiss="modal">
                                                                    <i class="ft-x"></i> Fermer
                                                                </button>
                                                                <button type="submit" class="btn btn-secondary">
                                                                    <i class="fa fa-check-square-o"></i> Ajouter
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <table class="table display nowrap table-striped table-bordered scroll-horizontal">
                        <thead>
                            <tr>
                                <?php 
                                $i=0;
                                foreach ($head as $key => $value){ 
                                    if ($i!=0){ ?>
                                    <th><?php echo strtoupper($value) ?></th>

                                    <?php 
                                }else{ 
                                    $i=1;
                                }
                            }
                            ?>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($content as $key => $value){

                                        //$value=$value->toArray(); ?>

                                        <tr>
                                            <?php $i=0;$c=count($value);

                                            foreach ($value as $key1 => $value1){
                                                if($i!=0){ 
                                                    if ($value[$key1]=="actualite.politique"){?>
                                                    <td>Activé</td>
                                                    <?php 
                                                }
                                                else
                                                    {?>
                                                        <td><?php echo $value[$key1] ?></td>
                                                        <?php 
                                                    }
                                                    $i+=1; 

                                                    if ($i==$c)
                                                    {
                                                        ?>
                                                        <td>
                                                            <!-- Button trigger modal modifier -->
                                                            <a href="#" class="btn btn-float btn-round btn-secondary" data-toggle="modal" data-backdrop="false" data-target="#<?php echo $value[$identifiant].'modifier' ?>"><i class="fa fa-pencil-square-o

                                                               f044"></i></a>

                                                               <!-- Button trigger modal supprimer-->
                                                               <a href="#" class="btn btn-float btn-round btn-danger" data-toggle="modal" data-backdrop="false" data-target="#<?php echo $value[$identifiant].'supprimer' ?>"><i class="fa fa-trash"></i></a>

                                                               <div class="form-group">
                                                                <!-- Modal Modifier-->
                                                                <div class="modal fade text-left" id="<?php echo $value[$identifiant].'modifier' ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8" style="display: none;" aria-hidden="true">
                                                                  <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                      <div class="modal-header bg-secondary white">
                                                                          <h4 class="modal-title" id="myModalLabel8"><?php echo 'Modifier '.$titre ?></h4>
                                                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                              <span aria-hidden="true">×</span>
                                                                          </button>
                                                                      </div>
                                                                      <div class="modal-body">
                                                                        <section class="input-validation" id="form-control-repeater">
                                                                            <div class="card">
                                                                                <div class="card-content collapse show">
                                                                                    <div class="card-body">

                                                                                        <?php $action_form="JavaScript:operation('#form{$value[$identifiant]}modifier','controlleur/{$titre}.php','#{$value[$identifiant]}modifier');"; ?>

                                                                                        <form id="form<?php echo $value[$identifiant];?>modifier" class="form" method="post" action="<?php echo $action_form;?>">

                                                                                            <!--contenu du formulaire-->
                                                                                            <input type="text" hidden="true" id="option" class="form-control" name="update" value="update" >

                                                                                            <?php include("formulaire/{$titre}-update.php"); ?>

                                                                                            <div class="form-actions right">
                                                                                                <button type="button" class="btn btn-warning mr-1" data-dismiss="modal">
                                                                                                    <i class="ft-x"></i> Fermer
                                                                                                </button>
                                                                                                <button type="submit" class="btn btn-secondary">
                                                                                                    <i class="fa fa-check-square-o"></i> Modifier
                                                                                                </button>
                                                                                            </div>

                                                                                        </form>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group">

                                                        <!-- Modal Supprimer-->
                                                        <div class="modal fade text-left" id="<?php echo $value[$identifiant].'supprimer' ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8" style="display: none;" aria-hidden="true">
                                                          <div class="modal-dialog" role="document">
                                                            <div class="modal-content">
                                                              <div class="modal-header bg-danger white">
                                                                  <h4 class="modal-title" id="myModalLabel8"><?php echo 'Supprimer '.$titre ?></h4>
                                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                      <span aria-hidden="true">×</span>
                                                                  </button>
                                                              </div>
                                                              <div class="modal-body">
                                                                <section class="input-validation" id="form-control-repeater">
                                                                    <div class="card">
                                                                        <div class="card-content collapse show">
                                                                            <div class="card-body">

                                                                                <?php $action_form="JavaScript:operation('#form{$value[$identifiant]}supprimer','controlleur/{$titre}.php','#{$value[$identifiant]}supprimer');"; ?>

                                                                                <form id="form<?php echo $value[$identifiant];?>supprimer" class="form" method="post" action="<?php echo $action_form;?>">

                                                                                    <input type="text" hidden="true" id="option" class="form-control" name="delete" value="delete">

                                                                                    <!--contenu du formulaire-->
                                                                                    <?php include("formulaire/{$titre}-update.php"); ?>

                                                                                    <div class="form-actions right">
                                                                                        <button type="button" class="btn btn-warning mr-1" data-dismiss="modal">
                                                                                            <i class="ft-x"></i> Fermer
                                                                                        </button>
                                                                                        <button type="submit" class="btn btn-danger">
                                                                                            <i class="fa fa-check-square-o"></i> Supprimer
                                                                                        </button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </section>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <?php } 
                                    }
                                    else
                                    { 
                                        $i+=1; 
                                        $identifiant=$key1;
                                    } 
                                } ?>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                    <?php }elseif(!empty($head) && !empty($content)){ ?>

                    <table class="table display nowrap table-striped table-bordered scroll-horizontal">
                        <thead>
                            <tr>
                                <?php 
                                $i=0;
                                foreach ($head as $key => $value)
                                {
                                    if ($i!=0)
                                        {?>
                                            <th><?php echo strtoupper($value) ?></th>
                                            <?php 
                                        }
                                        else
                                        {
                                            $i=1; 
                                        }
                                    }

                                    if (!empty($deleteOrUpdate)){?>
                                    <th>ACTION</th>
                                    <?php}?>
                                </tr>
                            </thead>

                            <tbody>

                                <?php foreach ($content as $key => $value)
                                {

                                    $value=$value->toArray(); ?>

                                    <tr>
                                        <?php 
                                        $i=0;
                                        foreach ($value as $key1 => $value1)
                                        {
                                            if ($i!=0)
                                            {
                                                if ($value[$key1]=="actualite.politique")
                                                    {?>
                                                        <td>Actualités politiques</td>
                                                        <?php 
                                                    }
                                                    else
                                                        {?>
                                                            <td><?php echo $value[$key1] ?></td>
                                                            <?php 
                                                        }
                                                    }
                                                    else{


                                                        $i=1; 
                                                        $identifiant=$key1;
                                                    }
                                                }

                                                if (!empty($deleteOrUpdate))
                                                    {?>
                                                        <td>
                                                            <form action="{{action('SouscriptionController@postInfo')?>" method="post">

                                                                <input type="hidden" name="subscription_id" value="<?php echo $value[$identifiant] ?>">
                                                                <!-- Button trigger  modifier -->
                                                                <button type="submit" class="btn btn-float btn-round btn-success" ><i class="fa fa-pencil-square-o
                                                                    f044"></i></button>
                                                                </form>
                                                            </td>
                                                            <?php
                                                        }

                                                    }
                                                    ?>
                                                </tr>
                                                <?php 
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                    <?php
                                }
                                else{
                                    if (!empty($ADS)){?>
                                    <!-- $ADS va permettre de vérifier si nous devons mettre du contenu, donc ajout, modification et suppression de données-->
                                    <div class="form-group">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-outline-secondary block btn-lg" data-toggle="modal" data-backdrop="false" data-target="#ajouter">
                                            AJOUTER UN CONTENU
                                        </button>

                                        <!-- Modal -->
                                        <div class="modal fade text-left" id="ajouter" tabindex="-1" role="dialog" aria-labelledby="myModalLabel8" style="display: none;" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header bg-secondary white">
                                                  <h4 class="modal-title" id="myModalLabel8"><?php echo 'Ajouter '.$titre ?></h4>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">×</span>
                                                  </button>
                                              </div>

                                              <div class="modal-body">
                                                <section class="input-validation" id="form-control-repeater">
                                                    <div class="card">
                                                        <div class="card-content collapse show">
                                                            <div class="card-body">
                                                                <?php $action_form="JavaScript:operation('#formajout','controlleur/{$titre}.php','#ajouter');"; ?>
                                                                <form id="formajout" class="form" method="post" action="<?php echo $action_form;?>">
                                                                    <!--contenu du formulaire-->


                                                                    <input type="text" hidden="true" id="option" class="form-control" name="add" value="add" >

                                                                    <?php include("formulaire/{$titre}-add.php"); ?>


                                                                    <div class="form-actions right">
                                                                        <button type="button" class="btn btn-warning mr-1" data-dismiss="modal">
                                                                            <i class="ft-x"></i> Fermer
                                                                        </button>
                                                                        <button type="submit" class="btn btn-secondary">
                                                                            <i class="fa fa-check-square-o"></i> Ajouter
                                                                        </button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php 
                        }?>

                        <table class="table display nowrap table-striped table-bordered scroll-horizontal">
                            <thead>
                                <tr>
                                    <!--<th></th>-->
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                </tr>
                            </tbody>
                        </table>
                        <p class="card-text"><?php echo 'Aucune donnée n\'a été trouvée.' ?></p>

                        <?php 
                    }?>


                    <!--/.row-->
                    <div class="row">
                        <div class="col-auto mx-auto mt-4">
                            <nav class="font-1 mt-5" aria-label="Page navigation example">
                                <ul class="pagination pagination justify-content-center">
                                    <?php //echo $content->links() ?>
                                </ul>
                            </nav>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


</section>
<!--/ Scroll - horizontal table -->

<?php 
}
?>