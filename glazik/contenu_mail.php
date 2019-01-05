
<!-- ////////////////////////////////////////////////////////////////////////////-->
<div class="app-content content">
  <div class="sidebar-left">
    <div class="sidebar"><div class="sidebar-content email-app-sidebar d-flex">
      <div class="email-app-menu col-md-5 card d-none d-lg-block">
        <div class="form-group form-group-compose text-center">
          <a href="JavaScript:msg('');" style="color: white;"><button type="button" class="btn btn-danger btn-block my-1"><i class="ft-mail"></i>  Nouveau message</button></a>
        </div>
        <h6 class="text-muted text-bold-500 mb-1">Messages</h6>
        <div class="list-group list-group-messages">
          <a href="#" class="list-group-item active border-0">
            <i class="ft-inbox mr-1"></i> Msg reçus <!--<span class="badge badge-secondary badge-pill float-right">8</span>-->
          </a>
          <!--<a href="#" class="list-group-item list-group-item-action border-0"><i class="fa fa-paper-plane-o mr-1"></i> Msg envoyés</a>
          <a href="#" class="list-group-item list-group-item-action border-0"><i class="ft-trash-2 mr-1"></i> Msg supprimés</a>
        --></div>
      </div>

      <div class="email-app-list-wraper col-md-7 card p-0">
        <div class="email-app-list">
          <div class="card-body chat-fixed-search">
            <fieldset class="form-group position-relative has-icon-left m-0 pb-1">
              <input type="text" class="form-control" id="iconLeft4" placeholder="Rechercher email">
              <div class="form-control-position">
                <i class="ft-search"></i>
              </div>
            </fieldset>     
          </div>

          <div id="users-list" class="list-group">
            <div class="users-list-padding media-list">

              <?php 

                    //On prend dans la base de données les informations  qui sont activées
              $req = $bdd->prepare('SELECT * FROM email');

              $req->execute();

              $resultat = $req->fetchAll();

              foreach($resultat as $ligne){

                $id=$ligne->id;
                $objet=strtoupper($ligne->objet);
                $nom=strtoupper($ligne->nom.' '.$ligne->prenom);
                $email=$ligne->email;
                $contenu=str_replace("'", " ", $ligne->contenu);
                $image=substr(strtoupper($ligne->nom), 0, 1);?>

                <form id="changemail<?php echo $id; ?>">
                  <input type="hidden" id="id" name="id" value="<?php echo $id ?>">
                </form>

                <?php $action="JavaScript:showmail('{$objet}','{$nom}','{$email}','{$image}','{$contenu}','#changemail{$id}','{$ligne->lu}','{$id}');";?>

                <a href="<?php echo $action ?>" class="media <?php echo ($ligne->lu=='Lu')?'':'bg-blue-grey bg-lighten-5 border-right-primary border-right-2'; ?>">
                  <div class="media-left pr-1">
                    <span class="avatar avatar-md">
                      <span class="media-object rounded-circle text-circle bg-<?php echo ($ligne->lu=='Lu')?'warning':'success'; ?>"><?php echo substr(strtoupper($ligne->nom), 0, 1) ?></span>
                    </span>
                  </div>
                  <div class="media-body w-100">
                    <h6 class="list-group-item-heading text-bold-500"><?php echo strtoupper($ligne->nom.' '.$ligne->prenom);?><span class="float-right"><span class="font-small-2 primary"><?php echo $ligne->dateemail//date("H:S",$ligne->dateemail) ?></span></span></h6>
                    <p class="list-group-item-text text-truncate text-bold-600 mb-0"><?php echo substr(strtoupper($ligne->objet), 0, 20) ?>...</p>
                    <p class="list-group-item-text mb-0"><?php echo substr($ligne->contenu, 0, 12) ?>...<span class="float-right primary"><span class="badge badge-<?php echo ($ligne->lu=='Lu')?'warning':'success'; ?> mr-1"><?php echo $ligne->lu ?></span> <i class="font-medium-1 ft-star blue-grey lighten-3"></i></span></p>
                  </div>
                </a>

                <?php }?>



              </div>

            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  <div class="content-right">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body"><div class="card email-app-details d-none d-lg-block">
        <div class="card-content">
          <div class="email-app-options card-body">
            <div class="row">
              <div class="col-md-6 col-12">
                <div class="btn-group" role="group" aria-label="Basic example">
                  <a href="JavaScript:msg('reponse');" style="color: white;"><button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" data-original-title="Replay"><i class="fa fa-reply"></i></button></a>
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" data-original-title="Replay All"><i class="fa fa-reply-all"></i></button>
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" data-original-title="Report SPAM"><i class="ft-alert-octagon"></i></button>
                  <a href="JavaScript:emaildelete();" style="color: white;"><button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="ft-trash-2"></i></button></a>

                  <form id="emaildelete">
                    <input type="hidden" id="idEmailDelete" name="id" value="">
                  </form>


                </div>                    
              </div>
              <div class="col-md-6 col-12 text-right">
                <div class="btn-group" role="group" aria-label="Basic example">
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" data-original-title="Previous"><i class="fa fa-angle-left"></i></button>
                  <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="tooltip" data-placement="top" data-original-title="Next"><i class="fa fa-angle-right"></i></button>
                </div>   
                <div class="btn-group ml-1">
                  <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Plus</button>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Important</a>                           
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Mail filtré</a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="email-app-title card-body">
            <h3 class="list-group-item-heading" id="objetMAIL"></h3>
            <!--<p class="list-group-item-text"><span class="primary"><span class="badge badge-primary">Type</span> <i class="float-right font-medium-3 ft-star warning"></i></span></p>-->
          </div>


          <div class="media-list">
            <div id="headingCollapse2"  class="card-header p-0">
              <a data-toggle="collapse" href="#collapse2" aria-expanded="false" aria-controls="collapse2" class="email-app-sender media border-0">

                <div class="media-left pr-1">
                  <span class="avatar avatar-md">
                    <span class="media-object rounded-circle text-circle bg-warning" id="imageMAIL"></span>
                  </span>
                </div>
                <div class="media-body w-100">
                  <h6 class="list-group-item-heading" id="nomMAIL"></h6>
                  <p class="list-group-item-text" id="emailMAIL"><span></span>
                    <span class="float-right">
                      <i class="fa fa-reply mr-1"></i>
                      <i class="fa fa-arrow-right mr-1"></i>
                      <i class="fa fa-ellipsis-v"></i>
                    </span>
                  </p>
                </div>

              </a>
            </div>
            <div id="collapse2" role="tabpanel" aria-labelledby="headingCollapse2" class="card-collapse" aria-expanded="false">
              <div class="card-content">
                <div class="email-app-text card-body">
                  <div class="email-app-message" id="contenuMAIL">

                  </div>
                </div>
              </div>
            </div>

            <div class="email-app-text-action card-body">

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->