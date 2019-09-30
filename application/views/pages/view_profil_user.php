
<div class="row">
    <!-- Dark table start -->
    <div class="col-12 mt-3">

        

        <?php 
        if (isset($reponse) && $reponse=="true") {
        ?>  
            <div class="row">
                <div class="alert-dismiss col-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Modification !</strong> Effectuée avec succès.
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
                        <strong>Modification !</strong> Echouée.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span class="fa fa-times"></span>
                        </button>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

        <div class="card">
            <div class="card-body">
                <!-- <h4 class="header-title">Informations du superviseur</h4> -->
                
                <div class="row">

                    <div class="col-5">

                        <div class="form-group">
                            <label for="nomComplet" class="col-form-label col-form-label-sm">NomComplet</label>
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" disabled id="nomComplet" value="<?php if ($nomComplet=="") echo "xxxxxxxxx"; else echo $nomComplet; ?>">
                                <div class="input-group-append">
                                    <button class="btn btn-sm btn-info" type="button" data-toggle="modal" data-target="#modal_nomComplet" id="btn_nomComplet">Modifier</button>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password" class="col-form-label col-form-label-sm">Mot de passe</label>
                            <div class="input-group">
                                <input type="text" class="form-control form-control-sm" disabled id="password" value="<?php echo "xxxxxxxxx"; ?>">
                                <div class="input-group-append">
                                    <button class="btn btn-sm btn-info" type="button" data-toggle="modal" data-target="#modal_password" id="btn_password">Modifier</button>
                                </div>
                            </div>
                        </div>                        

                    </div>                 

                </div>

            </div>
        </div>
    </div>
    
</div>


<!-- Fenetre modal NomComplet -->
<div class="modal fade" id="modal_nomComplet">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Dragon-Gpay</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-12">
                        <div style="display:none; height: 8px;" class="progress progress-striped">
                            <div class="progress-bar progress-bar-striped progress-bar-animated"></div>
                        </div>
                    </div>
                </div>
                
                <form id="modal_nomComplet_f" enctype="multipart/form-data" action="<?= site_url('dashboard','profil_user/nomComplet'); ?>" method="post">

                    <input type="hidden" name="user_id" value="<?= $user_id; ?>">

                    <div class="form-group">
                        <label for="nomComplet_m" class="col-form-label col-form-label-sm">NomComplet</label>
                        <input data-required="true" data-describedby="nomCompletHelp" data-description="nomComplet_m" type="text" class="form-control form-control-sm" id="nomComplet_m" name="nomComplet_m" aria-describedby="nomCompletHelp" >
                        <small id="nomCompletHelp" class="form-text text-muted">Veuillez saissir la nouvelle  valeur dans le champ.</small>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-primary btn-sm">Valider</button>
                    </div>
                
                </form>

            </div>
            
        </div>
    </div>
</div>
<!-- /Fenetre modal login -->



<!-- Fenetre modal Mot de passe -->
<div class="modal fade" id="modal_password">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Dragon-Gpay</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-12">
                        <div style="display:none; height: 8px;" class="progress progress-striped">
                            <div class="progress-bar progress-bar-striped progress-bar-animated"></div>
                        </div>
                    </div>
                </div>
                
                <form id="modal_password_f" enctype="multipart/form-data" action="<?= site_url('dashboard','profil_user/password'); ?>" method="post">

                  <input type="hidden" name="user_id" value="<?= $user_id; ?>">

                  <div class="form-group">
                    <label for="user_password_mA">Mot de passe actuel</label>
                    <input data-required="true" data-describedby="passwordHelpA" data-description="user_password_mA" type="password" class="form-control form-control-sm" id="user_password_mA" name="user_password_mA" aria-describedby="passwordHelpA" >
                    <small id="passwordHelpA" class="form-text text-muted">Veuillez saissir la nouvelle valeur dans le champ.</small>
                  </div>

                  <div class="form-group">
                    <label for="user_password_mN">Nouveau mot de passe</label>
                    <input data-required="true" data-describedby="passwordHelpN" data-description="user_password_mN" type="password" class="form-control form-control-sm" id="user_password_mN" name="user_password_mN" aria-describedby="passwordHelpN" >
                    <small id="passwordHelpN" class="form-text text-muted">Veuillez saissir la nouvelle valeur dans le champ.</small>
                  </div>

                  <div class="form-group">
                    <label for="user_password_mNC">Confimer le mot de passe</label>
                    <input data-required="true" data-describedby="passwordHelpNC" data-description="user_password_mNC" data-conditional="user_password_mNC" type="password" class="form-control form-control-sm" id="user_password_mNC" name="user_password_mNC" aria-describedby="passwordHelpNC" >
                    <small id="passwordHelpNC" class="form-text text-muted">Veuillez saissir la nouvelle valeur dans le champ.</small>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary btn-sm">Valider</button>
                  </div>
                
                </form>

            </div>
            
        </div>
    </div>
</div>
<!-- /Fenetre modal Mot de passe -->
