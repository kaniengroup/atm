
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
                if (isset($reponse) && $reponse=="true") {
                ?>
                    <div class="alert alert-info col-sm-8 offset-2 mt-5 mb-5 text-center">
                        <strong>Inscription réussie !</strong>
                        Un mail de validation vous a été envoyer à votre adresse mail. <br><br>
                        <a href="<?= site_url('blog','view/'.$idblog); ?>" class="btn btn-danger btn-sm">Retour</a>
                    </div>
                <?php
                } else if (isset($reponse) && $reponse=="true-0") {
                ?>
                    <div class="alert alert-info col-sm-8 offset-2 mt-5 mb-5 text-center">
                        Un mail de validation vous a été envoyer à votre adresse mail. <br><br>
                        <a href="<?= site_url('blog','view/'.$idblog); ?>" class="btn btn-danger btn-sm">Retour</a>
                    </div>
                <?php
                } else if (isset($reponse) && $reponse=="false") {
                ?>
                    <div class="alert alert-danger col-sm-8 offset-2 mt-5 mb-5 text-center">Opération échouée</div>
                <?php
                } else if (!isset($reponse) || (isset($reponse) && $reponse=="false-0")) {
                ?>
                    <?php if (isset($reponse) && $reponse=="false-0"): ?>
                        <div class="alert alert-warnning col-sm-8 offset-2 mt-5 mb-5 text-center">
                            Un compte existe déjà avec ce mail.
                            <a href="#" class="badge badge-primary" data-toggle="modal" data-target="#btn_mdp_reini">
                                Mot de passe oublié ?
                            </a>
                        </div>
                    <?php endif ?>
                    <form class="container mb-5 mt-5" id="form_create_internaute" enctype="multipart/form-data" action="<?= site_url('blog','create/'.$idblog); ?>" method="post">

                        <input type="hidden" name="idblog" value="<?= $idblog; ?>">
                        <div class="row justify-content-center">
                            <div class="col-md-6">

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="pseudo">Pseudo</label>
                                            <input type="text" class="form-control form-control-sm" name="pseudo" id="pseudo" data-required="true" data-describedby="pseudoHelp" data-description="pseudo"  aria-describedby="pseudoHelp">
                                            <small id="pseudoHelp" class="text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">E-mail</label>
                                            <input type="text" class="form-control form-control-sm" name="email" id="email" data-required="true" data-describedby="emailHelp" data-description="email"  aria-describedby="emailHelp">
                                            <small id="emailHelp" class="text-muted"></small>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="pwd">Votre mot de passe</label>
                                            <input type="password" class="form-control form-control-sm" name="pwd" id="pwd" data-required="true" data-describedby="pwdHelp" data-description="pwd"  aria-describedby="pwdHelp">
                                            <small id="pwdHelp" class="text-muted"></small>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="c_pwd">Confirmez votre mot de passe</label>
                                            <input type="password" class="form-control form-control-sm" name="c_pwd" id="c_pwd" data-required="true" data-describedby="c_pwdHelp" data-description="c_pwd"  aria-describedby="c_pwdHelp" data-conditional="c_pwd">
                                            <small id="c_pwdHelp" class="text-muted"></small>
                                        </div>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary" name="envoyer" value="Envoyer">
                            </div>
                        </div>
                    </form>
                <?php
                }
                ?>

                
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
            <form class="container" id="form_mdp_reini_internaute" enctype="multipart/form-data" action="<?= site_url('blog','mdp_reini'); ?>" method="post">
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
  