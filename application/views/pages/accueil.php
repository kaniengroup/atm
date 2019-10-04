
<div class="container">
    <!-- Début Sliders -->
    <div class="row">
        <div id="carouselExampleCaption" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaption" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaption" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaption" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="<?php echo base_url('assets/img/sliders/slide1.jpg'); ?>" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('assets/img/sliders/slide2.jpg'); ?>" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo base_url('assets/img/sliders/slide3.jpg') ;?>" alt="Third slide">
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Sliders -->

    <div class="row bg-white">
        <div class="col-md-12 text-center">
            <div class="clearfix">
                &nbsp;
            </div>
            <blockquote class="blockquote text-center citation">
                <p class="mb-2">"Pour la paix et la cohésion social, aucun sacrifice ne sera de trop "</p>
                <footer class="blockquote-footer author"><cite title="Source Title">Dr Abdallah Toikeuse
                        MABRI </cite></footer>
            </blockquote>
            <hr class="separator">
        </div>
    </div>

    <div class="row bg-white">
        <div class="col-md-12 text-center">
            <h2 class="fb-color title_one text-white p-1"> QUI SUIS JE ?</h2>
        </div>
    </div>

    <section class="row bg-white">
        <header class="container">
            <div class="d-flex align-items-center justify-content-center">
                <div class="d-flex flex-column col-md-12">
                    <div class="row">
                        <div class="row bg-white">
                            <div class="col-md-6 text-justify text_who_is">
                                Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio,
                                dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo,
                                tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vestibulum
                                id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra.
                                Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio,
                            </div>
                            <div class="col-md-6 text-justify text_who_is">
                                Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio,
                                dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo,
                                tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vestibulum
                                id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra.
                                Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio,
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section> 

    <div class="row bg-white">
        <div class="col-md-12 text-center read_more">
            <a href="<?= site_url('portrait'); ?>"><span class="read_more">Lire <img src="<?php echo base_url('assets/img/Polygone1.png') ?>" class="polygone_read_more" width="5%" alt=""></span></a>
        </div>

    </div>

    <div class="row bg-white">
        <div class="col-md-12 text-center read_more">
            <hr class="separator">
        </div>
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
                                <div id="example1" class="slider-pro">
                                    <div class="sp-slides">
                                        <?php 
                                            foreach ($list_articles_recents as $article):
                                        ?>  
                                            <div class="sp-slide">
                                                <img class="sp-image" src="../src/css/images/blank.gif"
                                                    data-src="http://bqworks.com/slider-pro/images/image9_medium.jpg"/>                            
                                                <p class="sp-layer sp-black sp-padding"
                                                    data-horizontal="50" data-vertical="64%" 
                                                    data-show-transition="left" data-show-delay="400" data-hide-transition="left" data-hide-delay="500">
                                                    <?= $article['categorie']; ?>
                                                </p>

                                                <p class="sp-layer sp-white sp-padding hide-small-screen" 
                                                    data-position="bottomLeft" data-horizontal="50" data-vertical="50"
                                                    data-show-transition="up" data-show-delay="500" data-hide-transition="down">
                                                    <span class="hide-medium-screen"><?= $article['titre']; ?></span>
                                                </p>
                                            </div> 
                                        <?php
                                            endforeach;
                                        ?>
                                        
                                    </div>

                                    <div class="sp-thumbnails">
                                        <?php 
                                            foreach ($list_articles_recents as $article):
                                        ?>  
                                            <div class="sp-thumbnail">
                                                <div class="sp-thumbnail-title" style="font-size: 10px;">
                                                    <?php
                                                    if (strlen($article['titre'])>30)
                                                        echo substr($article['titre'],0,30).' ...';
                                                    else
                                                        echo $article['titre'];
                                                    ?>
                                                </div>
                                                <div class="sp-thumbnail-description" style="font-size: 10px;">
                                                    <?php
                                                    if (strlen($article['contenu'])>35)
                                                        echo substr($article['contenu'],0,35).' ...';
                                                    else
                                                        echo $article['contenu'];
                                                    ?>
                                                    <br>
                                                    <a href="<?= site_url('actualites/view/'.$article['id']); ?>">Continuer la lecture</a>    
                                                </div>
                                            </div>
                                        <?php
                                            endforeach;
                                        ?>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-md-12 bg_article_liste mt-3 pt-3 pb-3 ">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe width="560" height="315"
                                    src="https://www.youtube.com/embed/7JzifEGMJBE" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 text-justify text_who_is bg_article_liste p-3">
                            <h4 class="text-center tw-color">Publications RS</h4>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </section>

    <div class="clearfix">
        &nbsp;
    </div>

    <div class="row bg-white">
        <div class="col-md-12 text-center">
            <h2 class="fb-color title_one text-white p-1">GALERIES</h2>
        </div>
    </div>

    
    <section class="h-100 row bg-white">
        <div class="container">
            <div class="align-items-center justify-content-center pb-5">
                <div class="col-md-12">
                    <div class="row ">
                        <div class="col-md-6 text-justify">
                            <h4 class="text-center tw-color">Photos</h4>
                            <iframe style="position: relative; top: 0; left: 0; width: 100%; height: 100%;" src="https://flickrembed.com/cms_embed.php?source=flickr&layout=responsive&input=www.flickr.com/photos/184731917@N05/albums/72157711146231448&sort=0&by=user&theme=default&scale=fill&speed=3000&limit=10&skin=default&autoplay=true" scrolling="no" frameborder="0" allowFullScreen="true" webkitallowfullscreen="true" mozallowfullscreen="true"><p><a  href="https://www.onecompare.com/apple/iphone-xr-deals">Onecompare</a></p><small>Powered by <a href="https://flickrembed.com">flickr embed</a>.</small></iframe><script type="text/javascript">function showpics(){var a=$("#box").val();$.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?tags="+a+"&tagmode=any&format=json&jsoncallback=?",function(a){$("#images").hide().html(a).fadeIn("fast"),$.each(a.items,function(a,e){$("<img/>").attr("src",e.media.m).appendTo("#images")})})}</script>
                        </div>
                        <div class="col-md-6 text-justify">
                            <h4 class="text-center tw-color">Vidéos</h4>
                            <iframe class="m-2" src="https://www.dailymotion.com/embed/video/x7m1vo7?autoPlay=1" allowfullscreen="" allow="autoplay" width="480" height="285" frameborder="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="clearfix">
        &nbsp;
    </div>

    <section class="row bg-white">
        <div class="d-flex align-items-center justify-content-center">
            <div class="d-flex flex-column col-md-12 ">
                <div class="row">
                    <div class="col-md-12 text-justify text_who_is p-3">
                        <a href="<?= site_url('contacts'); ?>">
                            <img src="<?php echo base_url('assets/img/ECRIRE_A_ATM.png'); ?>" alt="Snow" class="img-fluid">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> 

</div>


