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
                            
                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Pseudo</th>
                        <th>E-mail</th>
                        <th>Date création</th>
                        <th>Statut</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                <?php 
                      foreach ($list_internaute as $internaute) :
                      ?>
                        <tr>
                          <td><?= $internaute['pseudo']; ?></td>
                          <td><?= $internaute['email']; ?></td>
                          <td><?= $internaute['date_creation']; ?></td>
                          <td>
                            <span class="text-center <?php if($internaute['etat']=='actif') echo 'badge badge-success'; else if($internaute['etat']=='désactivé') echo 'badge badge-danger'; ?>"><?= $internaute['etat']; ?></span>
                          </td>
                          <td>
                            <div class="d-flex justify-content-center">
                              <a onclick="get_internaute_info(<?= $internaute['id']; ?>); return false;" href="#" class="text-primary" data-toggle="modal" data-target="#modal_internaute_info" title="Info"><i class="fa fa-info-circle fa-1x"></i></a>
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



<!-- Visualiser infos internaute -->
<div class="modal fade bd-example-modal-sm" id="modal_internaute_info">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Infos internaute</h5>
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
                              <label for="pseudo_i" class="col-form-label col-form-label-sm">Pseudo</label>
                              <input type="text" class="form-control form-control-sm" id="pseudo_i" disabled="disabled">
                          </div>

                          <div class="form-group">
                              <label for="email_i" class="col-form-label col-form-label-sm">E-mail</label>
                              <input type="text" class="form-control form-control-sm" id="email_i" disabled="disabled">
                          </div>

                          <div class="form-group">
                              <label for="date_creation_i" class="col-form-label col-form-label-sm">Date création</label>
                              <input type="text" class="form-control form-control-sm" id="date_creation_i" disabled="disabled">
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

