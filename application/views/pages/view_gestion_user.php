<?php   
if (isset($reponse) && $reponse=="true") {
?>  
    <div class="row">
        <div class="alert-dismiss col-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Opération !</strong> Effectuée avec succès.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span class="fa fa-times"></span>
                </button>
            </div>
        </div>
    </div>
<?php
} else if (isset($reponse) && $reponse=="false") {
?>  
    <div class="row">
        <div class="alert-dismiss col-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Opération !</strong> Echouée.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span class="fa fa-times"></span>
                </button>
            </div>
        </div>
    </div>
<?php
}
?>
<div class="row">
    <!-- Dark table start -->
    <div class="col-12 mt-1 mb-5">

        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-dark btn-sm mb-3" data-toggle="modal" data-target="#modal_user_ajout" title="Ajouter un utilisateur">Ajouter un user</button>
              
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Login</th>
                        <th>NomComplet</th>
                        <th>Statut</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php 
                      foreach ($list_user as $user) :
                      ?>
                        <tr>
                          <td><?= $user['login']; ?></td>
                          <td><?= $user['nomComplet']; ?></td>
                          <td>
                            <span class="text-center <?php if($user['statut']=='actif') echo 'badge badge-success'; else if($user['statut']=='désactivé') echo 'badge badge-danger'; ?>"><?= $user['statut']; ?></span>
                          </td>
                          <td>
                            <div class="d-flex justify-content-center">
                              <a onclick="get_user_info(<?= $user['id']; ?>); return false;" href="#" class="text-primary" data-toggle="modal" data-target="#modal_user_info" title="Info"><i class="fa fa-info-circle fa-1x"></i></a>
                              &nbsp;&nbsp;&nbsp;
                              <a onclick="get_user_info2(<?= $user['id']; ?>); return false;" href="#" class="text-danger" data-toggle="modal" data-target="#modal_user_modif" title="Modifier"><i class="fa fa-edit fa-1x"></i></a>
                              &nbsp;&nbsp;&nbsp;
                              <a onclick="get_user_id(<?= $user['id']; ?>,'<?= $user['login']; ?>'); return false;" href="#" class="text-danger" data-toggle="modal" data-target="#modal_user_suppr" title="Supprimer"><i class="fa fa-trash fa-1x"></i></a>
                            </div>                             
                          </td>
                        </tr>
                      <?php 
                      endforeach;
                      ?>
                      
                    </tbody>
                  </table>
                </div>
                  
            </div>
        </div>
    </div>
    
</div>



<!-- Visualiser infos user -->
<div class="modal fade bd-example-modal-sm" id="modal_user_info">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Infos user</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-12">
                        <div style="display:none;" id="msg_chargement">
                            <p style="color: red;">Erreur de chargement des données...</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-around">

                      <div class="col-12">

                          <div class="form-group">
                              <label for="login_i" class="col-form-label col-form-label-sm">Login</label>
                              <input type="text" class="form-control form-control-sm" id="login_i" disabled="disabled">
                          </div>

                          <div class="form-group">
                              <label for="nomComplet_i" class="col-form-label col-form-label-sm">NomComplet</label>
                              <input type="text" class="form-control form-control-sm" id="nomComplet_i" disabled="disabled">
                          </div>

                          <div class="form-group">
                              <label for="statut_i" class="col-form-label col-form-label-sm">Statut</label>
                              <select class="custom-select" id="statut_i" disabled="disabled">
                                  <option value="0" selected="selected">Choisissez un statut</option>
                                  <?php 
                                  foreach ($list_statut as $statut) :
                                  ?>
                                      <option value="<?php echo $statut['libelle']; ?>"><?php echo $statut['libelle']; ?></option>       
                                  <?php 
                                  endforeach;
                                  ?>
                              </select>
                          </div> 

                      </div>                    

                  </div>

                  <div class="modal-footer">
                      <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Fermer</button>
                  </div>

            </div>
           
        </div>
    </div>
</div>


<!-- Changer statut infos user -->
<div class="modal fade bd-example-modal-sm" id="modal_user_modif">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modification user</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">

              <div class="row">
                  <div class="col-12">
                      <div style="display:none;" id="msg_chargement">
                          <p style="color: red;">Erreur de chargement des données...</p>
                      </div>
                  </div>
              </div>

              <form id="form_modif_user" enctype="multipart/form-data" action="<?= site_url('dashboard','gestion_user/update'); ?>" method="post">

                  <input type="hidden" name="user_id_m" id="user_id_m">

                  <div class="row justify-content-around">
                      <div class="col-12">
                          <div class="form-group">
                              <label for="login_m" class="col-form-label col-form-label-sm">Login</label>
                              <input type="text" class="form-control form-control-sm" id="login_m" disabled="disabled">
                          </div>

                          <div class="form-group">
                              <label for="nomComplet_m" class="col-form-label col-form-label-sm">NomComplet</label>
                              <input type="text" class="form-control form-control-sm" id="nomComplet_m" disabled="disabled">
                          </div>

                          <div class="form-group">
                              <label for="statut_m" class="col-form-label col-form-label-sm">Statut</label>
                              <select data-required="true" data-describedby="statut_mHelp" data-description="statut_m" class="form-control form-control-sm" name="statut_m" id="statut_m" aria-describedby="statut_mHelp">
                                  <option value="" selected="selected">Choisissez un statut</option>
                                  <?php 
                                  foreach ($list_statut as $statut) :
                                  ?>
                                    <option value="<?php echo $statut['libelle']; ?>"><?php echo $statut['libelle']; ?></option>    
                                  <?php 
                                  endforeach;
                                  ?>
                              </select>                            
                              <small id="statut_mHelp" class="form-text text-muted">Veuillez saissir la nouvelle  valeur dans le champ.</small>
                          </div>
                      </div>                    

                  </div>

                  <div class="modal-footer">
                      <button type="reset" class="btn btn-secondary btn-sm" data-dismiss="modal">Annuler</button>
                      <button type="submit" class="btn btn-primary btn-sm">Ajouter</button>
                  </div>
              </form>

            </div>
           
        </div>
    </div>
</div>



<!-- Ajouter user -->
<div class="modal fade bd-example-modal-sm" id="modal_user_ajout">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Infos user</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">

              <form id="form_add_user" enctype="multipart/form-data" action="<?= site_url('dashboard','gestion_user/add'); ?>" method="post">
                <div class="row justify-content-around">
                  <div class="col-12">
                    
                    <div class="form-group">
                      <label for="nomComplet" class="col-form-label col-form-label-sm">NomComplet</label>
                      <input data-required="true" data-describedby="nomCompletHelp" data-description="nomComplet" type="text" class="form-control form-control-sm" id="nomComplet" name="nomComplet" aria-describedby="nomCompletHelp" >
                      <small id="nomCompletHelp" class="form-text text-muted">Veuillez saissir la nouvelle  valeur dans le champ.</small>
                    </div>

                    <div class="form-group">
                      <label for="statut" class="col-form-label col-form-label-sm">Statut</label>
                      <select data-required="true" data-describedby="statutHelp" data-description="statut" class="form-control form-control-sm" name="statut" id="statut" aria-describedby="statutHelp">
                          <option value="" selected="selected">Choisissez un statut</option>
                          <?php 
                          foreach ($list_statut as $statut) :
                          ?>
                            <option value="<?php echo $statut['libelle']; ?>"><?php echo $statut['libelle']; ?></option>    
                          <?php 
                          endforeach;
                          ?>
                      </select>                            
                      <small id="statutHelp" class="form-text text-muted">Veuillez saissir la nouvelle  valeur dans le champ.</small>
                    </div>

                    <div class="form-group">
                      <label for="pwd_user" class="col-form-label col-form-label-sm">Mot de passe</label>
                      <input type="text" class="form-control form-control-sm" id="pwd_user" name="pwd_user" disabled="disabled" value="password1">
                    </div>

                  </div>                    
                </div>

                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary btn-sm" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary btn-sm">Ajouter</button>
                </div>
              </form>

            </div>
           
        </div>
    </div>
</div>



<!-- Suppression de user -->
<div class="modal fade" id="modal_user_suppr">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Suppression user</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form id="modal_user_user_suppr_f" enctype="multipart/form-data" action="<?= site_url('dashboard','gestion_user/delete'); ?>" method="post">

                    <input type="hidden" name="user_id_s" id="user_id_s">
                    <p class="text-capitalize text-center m-3">Voulez-vous vraiment supprimer le user <strong id="user_login_supp"></strong>.</p>
                    <div class="modal-footer row justify-content-center">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                    </div>
                
                </form>
            </div>

        </div>
    </div>
</div>
