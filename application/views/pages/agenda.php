

<div class="container">
    <div class="row">
        <img class="img-fluid" src="<?php echo base_url('assets/img/sliders/slide1.jpg'); ?>" alt="First slide">
    </div>
    <div class="container">
        &nbsp;
    </div>
    <div class="row bg-white">
        <div class="col-md-12 text-center">
            <h2 class="fb-color title_one text-white p-1">AGENDA</h2>
        </div>
    </div>
    <section class="row bg-white">
    <!-- bg_article_liste -->
        <div class="container">
            <div class="d-flex align-items-center justify-content-center">
                <div class="d-flex flex-column col-md-12 p-3">
                    <div class="row">
                        <div class="col-md-7 text-justify text_who_is ">
                            <!-- <div class="col-md-12 bg_article_liste pt-3 pb-3">
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
                                            <div class="card m-3">
                                                <div class="row no-gutters">
                                                    <div class="col-md-4">

                                                    30/09/2019
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="card-body">
                                                            <h5 class="card-title"><?= $list_article[$j]['titre']; ?></h5>
                                                            <p class="card-text"><?= $list_article[$j]['contenu']; ?>
                                                            </p>
                                                            <span>
                                                                <span class="card-text"><small class="text-muted"><span class="text-primary">Publié le : </span><?= date("d-m-Y",strtotime($list_article[$j]['date_pub'])); ?></small></span>
                                                                <button type="button" class="btn btn-primary btn-sm ">Lire...</button>
                                                                <button type="button" class="btn btn-primary btn-sm ">Partager</button>
                                                            </span>

                                                        </div>
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

                            </div> -->

                            <div class="col-md-12 bg_article_liste mt-3 pt-3 pb-3 ">

                            </div>
                        </div>
                        <div class="col-md-5 text-justify text_who_is bg_article_liste p-3">
                            <h4 class="text-center tw-color">Publications RS</h4>
                            <div class="container2">
                                <div class="calendar">
                                    <div class="calendar-footer">
                                        <div class="next-prev">
                                            <div class="btn prev-btn">Prec</div>
                                            <div class="btn next-btn">Suiv</div>
                                        </div>
                                        <div class="options">
                                            <div class="btn jump-today"><i class="far fa-dot-circle fa-sm"></i></div>
                                            <div class="btn ok-btn">Ok</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="clearfix">
        &nbsp;
    </div>
</div>
