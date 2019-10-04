<?php 
if (empty($details_actualite)) {
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
                <h2 class="fb-color title_one text-white p-1">Actualité</h2>
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
    foreach ($details_actualite as $actualite) :
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
                    <h2 class="fb-color title_one text-white p-1">Actualité</h2>
                </div>
            </div>
            <section class="h-100 row bg-white">
                <header class="container h-100">
                    <div class="d-flex align-items-center justify-content-center h-100">
                        <div class="d-flex flex-column col-11">
                            <div class="row">
                                <div class="row bg-white mb-3">
                                    <div class="col-12 text-justify text_who_is blog-main">
                                        <h2 class="blog-post-title"><?= $actualite['titre']; ?></h2>
                                        <p><?= $actualite['contenu']; ?></p>
                                        <p class="blog-post-meta">
                                            Publier le 
                                            <?php 
                                            if ($actualite['etat']=="Publier") 
                                                echo date("d/m/Y",strtotime($actualite['date_pub'])); 
                                            else if ($actualite['etat']=="Publier sur une période") 
                                                echo date("d/m/Y",strtotime($actualite['periode_pub_debut'])); 
                                            ?>
                                            dans la catégorie <a href="#"><?= $actualite['categorie']; ?></a>. 
                                            <a class="btn btn-primary btn-sm" href="<?= site_url('actualites'); ?>">Voir tout</a>
                                        </p>
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






