<div class="container">

    <div class="row">  
        <img class="img-fluid" src="<?php echo base_url('assets/img/sliders/slide1.jpg'); ?>" alt="First slide">           
    </div>

    <div class="container">
        &nbsp;
    </div>

    <div class="row bg-white">
        <div class="col-md-12 text-center">
            <h2 class="fb-color title_one text-white p-1">BLOG</h2>
        </div>
    </div>

    <section class="row bg-white">
        <header class="container h-100">
            <div class="d-flex align-items-center justify-content-center h-100">
                <div class="d-flex flex-column col-12">
                    <div class="container">
                        <div class="row bg-white justify-content-center">
                            <?php 
                            if ($nbre_article_total>0) {
                            ?>
                                <?php
                                $valeur_finale = -1;
                                for ($i=1; $i <= $nbre_page; $i++) { 
                                ?>
                                    <div id="<?= 'page_'.$i; ?>" class="row view_page">
                                    <?php
                                    // $valeur_initiale = $nbre_article_par_page*($i-1)+1;
                                    // $valeur_finale = $valeur_initiale + $nbre_article_par_page -1;
                                    $valeur_initiale = $valeur_finale + 1;
                                    $valeur_finale = $valeur_initiale + ($nbre_article_par_page - 1);
                                    if ($i==$nbre_page) {
                                        $valeur_finale = $nbre_article_total - 1; 
                                    }
                                    for ($j=$valeur_initiale; $j <= $valeur_finale; $j++) {
                                    ?>
                                        <div class="col-md-4 col-sm-6">
                                            <div class="card border border-0">
                                                <img src="<?= base_url('assets/img/sliders/slide1.jpg'); ?>" class="card-img-top" alt="...">
                                                <div class="card-body" style="height: 250px;">
                                                    <h5 class="card-title"><?= $list_article[$j]['titre']; ?></h5>
                                                    <p class="card-text">
                                                        <?php
                                                        if (strlen($list_article[$j]['contenu'])>250)
                                                            echo substr($list_article[$j]['contenu'],0,250).' ...';
                                                        else
                                                            echo $list_article[$j]['contenu'];
                                                        ?>
                                                    </p>
                                                    <a href="<?= site_url('blog/view/'.$list_article[$j]['id']); ?>" class="btn btn-primary btn-sm" style="position: absolute; bottom: 20px;">Continuer la lecture</a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php   
                                    }
                                    ?>
                                    </div>
                                <?php
                                }
                                ?>
                                <div id="page">
                                    <ul class="pagination"></ul>
                                </div>
                            <?php    
                            }
                            ?>

                        </div>

                    </div>
                </div>
            </div>
        </header>
    </section>
</div>