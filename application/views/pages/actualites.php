
<div class="container">
    <div class="row">  
        <img class="img-fluid" src="<?php echo base_url('assets/img/sliders/slide1.jpg'); ?>" alt="First slide">           
    </div>

    <div class="container">
        &nbsp;
    </div>
    
    <div class="row bg-white">
        <div class="col-md-12 text-center">
            <h2 class="fb-color title_one text-white p-1">ACTUALITES</h2>
        </div>
    </div>

    <section class="row bg-white">
    <!-- bg_article_liste -->
        <header class="container ">
            <div class="d-flex align-items-center justify-content-center">
                <div class="d-flex flex-column col-md-12 p-3">
                    <div class="row ">
                        <div class="col-md-9 text-justify text_who_is ">
                            <div class="col-md-12 bg_article_liste pt-3 pb-3"> 
                                <?php 
                                if ($nbre_article_total>0) {
                                ?>
                                    <?php
                                    $valeur_finale = -1;
                                    for ($i=1; $i <= $nbre_page; $i++) { 
                                       
                                    ?>
                                        <div id="<?= 'page_'.$i; ?>" class="row view_page">
                                        <?php
                                        $valeur_initiale = $valeur_finale + 1;
                                        $valeur_finale = $valeur_initiale + ($nbre_article_par_page - 1);
                                        if ($i==$nbre_page) {
                                            $valeur_finale = $nbre_article_total - 1; 
                                        }
                                        for ($j=$valeur_initiale; $j <= $valeur_finale; $j++) {
                                        ?>
                                            <div class="col-md-12">
                                              <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                                <img class="card-img-left flex-auto d-none d-md-block" data-src="holder.js/200x250?theme=thumb" alt="Thumbnail [200x250]" style="width: 300px; height: 250px;" src="<?= base_url('assets/img/sliders/slide1.jpg'); ?>" data-holder-rendered="true">
                                                <div class="card-body d-flex flex-column align-items-start">
                                                  <strong class="d-inline-block mb-2 text-primary">
                                                    <?= $list_article[$j]['categorie']; ?>
                                                   </strong>
                                                  <h3 class="mb-0">
                                                    <a class="text-dark" href="#"><?= $list_article[$j]['titre']; ?></a>
                                                  </h3>
                                                  <div class="mb-1 text-muted">
                                                    <?php 
                                                    if ($list_article[$j]['etat']=="Publier") 
                                                        echo date("d/m/Y",strtotime($list_article[$j]['date_pub'])); 
                                                    else if ($list_article[$j]['etat']=="Publier sur une période") 
                                                        echo date("d/m/Y",strtotime($list_article[$j]['periode_pub_debut'])); 
                                                    ?>    
                                                  </div>
                                                  <p class="card-text mb-auto">
                                                        <?php
                                                        if (strlen($list_article[$j]['contenu'])>250)
                                                            echo substr($list_article[$j]['contenu'],0,250).' ...';
                                                        else
                                                            echo $list_article[$j]['contenu'];
                                                        ?>
                                                  </p>
                                                  <a href="<?= site_url('actualites/view/'.$list_article[$j]['id']); ?>">Continuer la lecture</a>
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

                            <div class="col-md-12 bg_article_liste mt-3 pt-3 pb-3">
                            </div>

                        </div>
                        <div class="col-md-3 text-justify text_who_is bg_article_liste p-3">
                            <?php $this->load->view('pages/flux_rs'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>

    <div class="clearfix">
        &nbsp;
    </div>
</div>