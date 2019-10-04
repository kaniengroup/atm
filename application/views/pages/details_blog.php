<?php 
if (empty($details_blog)) {
?>
    <div class="container">
        <div class="row">  
            <img class="img-fluid" src="<?php echo base_url('assets/img/sliders/slide1.jpg'); ?>" alt="First slide">           
        </div>
        <div class="container">
            &nbsp;
        </div>
        <div class="row bg-white">
            <div class="col-md-12 text-center">
                <h2 class="fb-color title_one text-white p-1">Blog</h2>
            </div>
        </div>
        <section class="row bg-white">
            <header class="container h-100">
                <div class="align-items-center justify-content-center h-100 text-center mb-3">
                    <h1>Contenu non trouvé</h1>
                    <a href="javascript:history.back()" class="btn btn-primary btn-lg">Retour</a>
                </div>
            </header>
        </section>
    </div>
<?php
} else {
    foreach ($details_blog as $blog) :
?>
        <div class="container">
            <div class="row">  
                <img class="img-fluid" src="<?php echo base_url('assets/img/sliders/slide1.jpg'); ?>" alt="First slide">           
            </div>
            <div class="container">
                &nbsp;
            </div>
            <div class="row bg-white">
                <div class="col-md-12 text-center">
                    <h2 class="fb-color title_one text-white p-1">Blog</h2>
                </div>
            </div>
            <section class="h-100 row bg-white">
                <header class="container h-100">
                    <div class="d-flex align-items-center justify-content-center h-100">
                        <div class="d-flex flex-column col-11">
                            <div class="row">

                                <div class="row bg-white mb-3">
                                    <div class="col-12 text-justify text_who_is blog-main">
                                        <h2 class="blog-post-title"><?= $blog['titre']; ?></h2>
                                        <p><?= $blog['contenu']; ?></p>
                                        <p class="blog-post-meta">
                                            Publier le
                                            <a class="text-info" href="#">
                                                <?php 
                                                if ($etat="Publier") 
                                                    echo date("d/m/Y",strtotime($blog['date_pub'])); 
                                                else if ($etat="Publier sur une période") 
                                                    echo date("d/m/Y",strtotime($blog['periode_pub_debut'])); 
                                                ?>
                                            </a> 
                                            dans la catégorie <a class="text-info" href="#"><?= $blog['categorie']; ?></a>. 
                                            <a class="btn btn-primary btn-sm" href="<?= site_url('blog'); ?>">Voir tout</a>
                                        </p>
                                    </div>
                                </div>
                                <hr>
                                <form class="container mb-3">
                                    <div class="col-md-6">
                                        <?php 
                                        if ($this->session->userdata('userPseudo')) {
                                        ?>
                                            <p>
                                                <img data-src="holder.js/32x32?theme=thumb&amp;bg=6f42c1&amp;fg=6f42c1&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16d8820347b%20text%20%7B%20fill%3A%236f42c1%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16d8820347b%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%236f42c1%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2212.25%22%20y%3D%2216.875000023841856%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                                <?= $this->session->userdata('userPseudo'); ?>
                                            </p>

                                        <?php 
                                        } else {
                                        ?>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-5 mb-3">
                                                        <label for="exampleFormControlTextarea1">Pseudo</label>
                                                        <input type="text" class="form-control form-control-sm">
                                                    </div>
                                                    <div class="col-md-7 mb-3">
                                                        <label for="exampleFormControlTextarea1">E-mail</label>
                                                        <input type="text" class="form-control form-control-sm">
                                                    </div>
                                                </div>
                                            </div>
                                        <?php 
                                        }
                                        ?>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1">Votre commentaire</label>
                                            <textarea class="form-control form-control-sm" id="exampleFormControlTextarea1" rows="2"></textarea>
                                        </div>
                                        <?php 
                                        if (!$this->session->userdata('userPseudo')) {
                                        ?>
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#btn_connexion">
                                              Poster
                                            </button>
                                        <?php
                                        } else {
                                        ?>
                                            <button type="submit" name="poster" class="btn btn-primary">Poster</button>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </form>
                                <hr>

                                <div class="container">
                                    <div class="my-3 p-3 bg-white rounded box-shadow">
                                        <h6 class="border-bottom border-gray pb-2 mb-0">Les posts recents</h6>
                                        <div class="media text-muted pt-3">
                                          <img data-src="holder.js/32x32?theme=thumb&amp;bg=007bff&amp;fg=007bff&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16d88203469%20text%20%7B%20fill%3A%23007bff%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16d88203469%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23007bff%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2212.25%22%20y%3D%2216.875000023841856%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                            <strong class="d-block text-gray-dark">@username</strong>
                                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                          </p>
                                        </div>
                                        <div class="media text-muted pt-3">
                                          <img data-src="holder.js/32x32?theme=thumb&amp;bg=e83e8c&amp;fg=e83e8c&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16d88203474%20text%20%7B%20fill%3A%23e83e8c%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16d88203474%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%23e83e8c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2212.25%22%20y%3D%2216.875000023841856%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                            <strong class="d-block text-gray-dark">@username</strong>
                                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                          </p>
                                        </div>
                                        <div class="media text-muted pt-3">
                                          <img data-src="holder.js/32x32?theme=thumb&amp;bg=6f42c1&amp;fg=6f42c1&amp;size=1" alt="32x32" class="mr-2 rounded" style="width: 32px; height: 32px;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2232%22%20height%3D%2232%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2032%2032%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16d8820347b%20text%20%7B%20fill%3A%236f42c1%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A2pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16d8820347b%22%3E%3Crect%20width%3D%2232%22%20height%3D%2232%22%20fill%3D%22%236f42c1%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2212.25%22%20y%3D%2216.875000023841856%22%3E32x32%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">
                                          <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                                            <strong class="d-block text-gray-dark">@username</strong>
                                            Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
                                          </p>
                                        </div>
                                        <small class="d-block text-right mt-3">
                                          <a href="#">Voir plus</a>
                                        </small>
                                    </div>
                                </div>

                            </div>

                            
                        </div>
                    </div>
                </header>
            </section>
        </div>

<?php
    endforeach;
}
?>


<!-- Modal -->
<div class="modal fade" id="btn_connexion" tabindex="-1" role="dialog" aria-labelledby="fenetre_connexion" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="fenetre_connexion">ATM Connexion</h5>
      </div>
      <div class="modal-body">
        <div class="container text-center">
            <button type="button" class="btn btn-primary btn-lg btn-block">
                <i class="fab fa-facebook-f text-left"></i>Connectez-vous avec facebook
            </button>
            <a href="<?= site_url('blog/login/'.$details_blog[0]['id']); ?>" class="btn btn-success btn-lg btn-block">Connexion avec votre compte ATM</a>
            <br>
            <br>
            <br>
            Nouveau ? <a href="<?= site_url('blog/create/'.$details_blog[0]['id']); ?>" class="badge badge-primary">Créez un compte ATM</a>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>






