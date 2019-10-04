
<div class="container">
    <div class="row">  
        <img class="img-fluid" src="<?php echo base_url('assets/img/sliders/slide1.jpg'); ?>" alt="First slide">           
    </div>
    <div class="container">
        &nbsp;
    </div>
    <div class="row bg-white">
        <div class="col-md-12 text-center">
            <h2 class="fb-color title_one text-white p-1">Création de compte</h2>
        </div>
    </div>
    <section class="row bg-white">
        <header class="container h-100">
            <div class="align-items-center justify-content-center h-100">

                <?php
                if (isset($reponse) && $reponse=="false") {
                ?>
                    <div class="alert alert-info col-sm-8 offset-2 mt-5 mb-5 text-center">
                        <strong>Connexion échouée !</strong>
                        E-mail ou mot de passe incorrect
                    </div>
                <?php
                }
                ?>

                <form class="container mb-5 mt-5" id="form_login_internaute" enctype="multipart/form-data" action="<?= site_url('blog','view/'.$idblog); ?>" method="post">

                    <input type="hidden" name="idblog" value="<?= $idblog; ?>">
                    <div class="row justify-content-center">
                        <div class="col-md-6">

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="cx_email">E-mail</label>
                                        <input type="text" class="form-control form-control-sm" name="cx_email" id="cx_email" data-required="true" data-describedby="cx_emailHelp" data-description="cx_email"  aria-describedby="cx_emailHelp">
                                        <small id="cx_emailHelp" class="text-muted"></small>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label for="cx_pwd">Votre mot de passe</label>
                                        <input type="password" class="form-control form-control-sm" name="cx_pwd" id="cx_pwd" data-required="true" data-describedby="cx_pwdHelp" data-description="cx_pwd"  aria-describedby="cx_pwdHelp">
                                        <small id="cx_pwdHelp" class="text-muted"></small>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" class="btn btn-primary" name="btn_login" value="Envoyer">
                            <br>
                            <br>
                            <a href="#" class="badge badge-info" data-toggle="modal" data-target="#btn_mdp_reini">
                                Mot de passe oublié ?
                            </a>
                        </div>
                    </div>
                </form>
                
            </div>
        </header>
    </section>
</div>


<!-- Modal -->
<div class="modal fade" id="btn_mdp_reini" tabindex="-1" role="dialog" aria-labelledby="fenetre_mdp_reini" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="fenetre_mdp_reini">ATM Réinitialiser votre mot de passe</h5>
      </div>
      <div class="modal-body">
        <div class="container">
            <form class="container" id="form_mdp_reini_internaute" enctype="multipart/form-data" action="<?= site_url('blog','login/mdp_reini'); ?>" method="post">
                <input type="hidden" name="idblog" value="<?= $idblog; ?>">
                <div class="row">
                    <div class="col-md-11">
                        
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">E-mail</label>
                            <input type="text" class="form-control form-control-sm" name="email_reini" id="email_reini" data-required="true" data-describedby="email_reiniHelp" data-description="email_reini"  aria-describedby="email_reiniHelp">
                            <small id="email_reiniHelp" class="text-muted"></small>
                        </div>
  
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" name="envoyer_reini" value="Envoyer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>
            </form>
        </div>
      </div>
    </div>
  </div>
</div>
  