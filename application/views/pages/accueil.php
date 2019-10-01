
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
                                                <div class="sp-thumbnail-title">
                                                    <?= $article['titre']; ?>
                                                </div>
                                                <div class="sp-thumbnail-description">
                                                    <?= substr($article['contenu'],0,20).' ...'; ?>
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
                            <div id="example3" class="slider-pro">
                                <div class="sp-slides">
                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif" 
                                            data-src="http://bqworks.com/slider-pro/images/image1_medium.jpg"/>

                                        <p class="sp-layer sp-white sp-padding"
                                            data-horizontal="50" data-vertical="50"
                                            data-show-transition="left" data-show-delay="400">
                                            Lorem ipsum
                                        </p>

                                        <p class="sp-layer sp-black sp-padding"
                                            data-horizontal="180" data-vertical="50"
                                            data-show-transition="left" data-show-delay="600">
                                            dolor sit amet
                                        </p>

                                        <p class="sp-layer sp-white sp-padding"
                                            data-horizontal="315" data-vertical="50"
                                            data-show-transition="left" data-show-delay="800">
                                            consectetur adipisicing elit.
                                        </p>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif" 
                                            data-src="http://bqworks.com/slider-pro/images/image2_medium.jpg"/>

                                        <h3 class="sp-layer sp-black sp-padding" 
                                            data-horizontal="40" data-vertical="40" 
                                            data-show-transition="left">
                                            Lorem ipsum dolor sit amet
                                        </h3>

                                        <p class="sp-layer sp-white sp-padding" 
                                            data-horizontal="40" data-vertical="100" 
                                            data-show-transition="left" data-show-delay="200">
                                            consectetur adipisicing elit
                                        </p>

                                        <p class="sp-layer sp-black sp-padding" 
                                            data-horizontal="40" data-vertical="160" data-width="350" 
                                            data-show-transition="left" data-show-delay="400">
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif" 
                                            data-src="http://bqworks.com/slider-pro/images/image3_medium.jpg"/>

                                        <p class="sp-layer sp-white sp-padding" 
                                            data-position="centerCenter" data-vertical="-50" 
                                            data-show-transition="right" data-show-delay="500" >
                                            Lorem ipsum dolor sit amet
                                        </p>

                                        <p class="sp-layer sp-black sp-padding" 
                                            data-position="centerCenter" data-vertical="50" 
                                            data-show-transition="left" data-show-delay="700">
                                            consectetur adipisicing elit
                                        </p>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif" 
                                            data-src="http://bqworks.com/slider-pro/images/image4_medium.jpg"/>

                                        <p class="sp-layer sp-black sp-padding"
                                            data-position="bottomLeft" data-vertical="0" data-width="100%"
                                            data-show-transition="up">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif" 
                                            data-src="http://bqworks.com/slider-pro/images/image5_medium.jpg"/>

                                        <p class="sp-layer sp-white sp-padding" 
                                            data-vertical="5%" data-horizontal="5%" data-width="90%" 
                                            data-show-transition="down" data-show-delay="400">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif" 
                                            data-src="http://bqworks.com/slider-pro/images/image6_medium.jpg"/>

                                        <p class="sp-layer sp-white sp-padding" 
                                            data-horizontal="10" data-vertical="10" data-width="300">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif" 
                                            data-src="http://bqworks.com/slider-pro/images/image7_medium.jpg"/>

                                        <p class="sp-layer sp-black sp-padding" 
                                            data-position="bottomLeft" data-horizontal="5%" data-vertical="5%" data-width="90%" 
                                            data-show-transition="up" data-show-delay="400">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif" 
                                            data-src="http://bqworks.com/slider-pro/images/image8_medium.jpg"/>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif" 
                                            data-src="http://bqworks.com/slider-pro/images/image9_medium.jpg"/>

                                        <p class="sp-layer sp-black sp-padding" 
                                            data-horizontal="50" data-vertical="50"
                                            data-show-transition="down" data-show-delay="500">
                                            Lorem ipsum dolor sit amet
                                        </p>

                                        <p class="sp-layer sp-white sp-padding" 
                                            data-horizontal="50" data-vertical="100"
                                            data-show-transition="up" data-show-delay="500">
                                            consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>

                                    <div class="sp-thumbnails">
                                        <img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image1_medium.jpg"/>
                                    <</div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif" 
                                            data-src="http://bqworks.com/slider-pro/images/image10_medium.jpg"/>
                                    </div>
                                </div>

                                <div class="sp-thumbnails">
                                    <img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image1_medium.jpg"/>
                                    <img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image2_medium.jpg"/>
                                    <img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image3_medium.jpg"/>
                                    <img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image4_medium.jpg"/>
                                    <img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image5_medium.jpg"/>
                                    <img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image6_medium.jpg"/>
                                    <img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image7_medium.jpg"/>
                                    <img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image8_medium.jpg"/>
                                    <img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image9_medium.jpg"/>
                                    <img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image10_medium.jpg"/>
                                </div>
                            </div>  
                        </div>
                        <div class="col-md-6 text-justify">
                            <h4 class="text-center tw-color">Vidéos</h4>
                            <!-- <div id="example5" class="slider-pro">
                                <div class="sp-slides">
                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif"
                                            data-src="http://bqworks.com/slider-pro/images/image1_medium.jpg"/>

                                        <div class="sp-caption">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif"
                                            data-src="http://bqworks.com/slider-pro/images/image2_medium.jpg"/>

                                        <div class="sp-caption">Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif"
                                            data-src="http://bqworks.com/slider-pro/images/image3_medium.jpg"/>

                                        <div class="sp-caption">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</div>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif"
                                            data-src="http://bqworks.com/slider-pro/images/image4_medium.jpg"/>

                                        <div class="sp-caption">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif"
                                            data-src="http://bqworks.com/slider-pro/images/image5_medium.jpg"/>

                                        <div class="sp-caption">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif"
                                            data-src="http://bqworks.com/slider-pro/images/image6_medium.jpg"/>

                                        <div class="sp-caption">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</div>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif"
                                            data-src="http://bqworks.com/slider-pro/images/image7_medium.jpg"/>

                                        <div class="sp-caption">Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</div>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif"
                                            data-src="http://bqworks.com/slider-pro/images/image8_medium.jpg"/>

                                        <div class="sp-caption">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni.</div>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif"
                                            data-src="http://bqworks.com/slider-pro/images/image9_medium.jpg"/>

                                        <div class="sp-caption">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit.</div>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif"
                                            data-src="http://bqworks.com/slider-pro/images/image10_medium.jpg"/>

                                        <div class="sp-caption">Sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</div>
                                    </div>
                                </div>

                                <div class="sp-thumbnails">
                                    <div class="sp-thumbnail">
                                        <div class="sp-thumbnail-image-container">
                                            <img class="sp-thumbnail-image" src="http://bqworks.com/slider-pro/images/image1_thumbnail.jpg"/>
                                        </div>
                                        <div class="sp-thumbnail-text">
                                            <div class="sp-thumbnail-title">Lorem ipsum</div>
                                            <div class="sp-thumbnail-description">Dolor sit amet, consectetur adipiscing</div>
                                        </div>
                                    </div>

                                    <div class="sp-thumbnail">
                                        <div class="sp-thumbnail-image-container">
                                            <img class="sp-thumbnail-image" src="http://bqworks.com/slider-pro/images/image2_thumbnail.jpg"/>
                                        </div>
                                        <div class="sp-thumbnail-text">
                                            <div class="sp-thumbnail-title">Do eiusmod</div>
                                            <div class="sp-thumbnail-description">Tempor incididunt ut labore et dolore magna</div>
                                        </div>
                                    </div>

                                    <div class="sp-thumbnail">
                                        <div class="sp-thumbnail-image-container">
                                            <img class="sp-thumbnail-image" src="http://bqworks.com/slider-pro/images/image3_thumbnail.jpg"/>
                                        </div>
                                        <div class="sp-thumbnail-text">
                                            <div class="sp-thumbnail-title">Ut enim</div>
                                            <div class="sp-thumbnail-description">Ad minim veniam, quis nostrud exercitation</div>
                                        </div>
                                    </div>

                                    <div class="sp-thumbnail">
                                        <div class="sp-thumbnail-image-container">
                                            <img class="sp-thumbnail-image" src="http://bqworks.com/slider-pro/images/image4_thumbnail.jpg"/>
                                        </div>
                                        <div class="sp-thumbnail-text">
                                            <div class="sp-thumbnail-title">Ullamco oris</div>
                                            <div class="sp-thumbnail-description">Nisi ut aliquip ex ea commodo consequat</div>
                                        </div>
                                    </div>

                                    <div class="sp-thumbnail">
                                        <div class="sp-thumbnail-image-container">
                                            <img class="sp-thumbnail-image" src="http://bqworks.com/slider-pro/images/image5_thumbnail.jpg"/>
                                        </div>
                                        <div class="sp-thumbnail-text">
                                            <div class="sp-thumbnail-title">Duis aute</div>
                                            <div class="sp-thumbnail-description">Irure dolor in reprehenderit</div>
                                        </div>
                                    </div>

                                    <div class="sp-thumbnail">
                                        <div class="sp-thumbnail-image-container">
                                            <img class="sp-thumbnail-image" src="http://bqworks.com/slider-pro/images/image6_thumbnail.jpg"/>
                                        </div>
                                        <div class="sp-thumbnail-text">
                                            <div class="sp-thumbnail-title">Esse cillum</div>
                                            <div class="sp-thumbnail-description">Dolore eu fugiat nulla pariatur excepteur</div>
                                        </div>
                                    </div>

                                    <div class="sp-thumbnail">
                                        <div class="sp-thumbnail-image-container">
                                            <img class="sp-thumbnail-image" src="http://bqworks.com/slider-pro/images/image7_thumbnail.jpg"/>
                                        </div>
                                        <div class="sp-thumbnail-text">
                                            <div class="sp-thumbnail-title">Sint occaecat</div>
                                            <div class="sp-thumbnail-description">Cupidatat non proident, sunt in culpa</div>
                                        </div>
                                    </div>

                                    <div class="sp-thumbnail">
                                        <div class="sp-thumbnail-image-container">
                                            <img class="sp-thumbnail-image" src="http://bqworks.com/slider-pro/images/image8_thumbnail.jpg"/>
                                        </div>
                                        <div class="sp-thumbnail-text">
                                            <div class="sp-thumbnail-title">Deserunt</div>
                                            <div class="sp-thumbnail-description">Mollit anim id est laborum sed ut</div>
                                        </div>
                                    </div>

                                    <div class="sp-thumbnail">
                                        <div class="sp-thumbnail-image-container">
                                            <img class="sp-thumbnail-image" src="http://bqworks.com/slider-pro/images/image9_thumbnail.jpg"/>
                                        </div>
                                        <div class="sp-thumbnail-text">
                                            <div class="sp-thumbnail-title">Unde omnis</div>
                                            <div class="sp-thumbnail-description">Iste natus error sit voluptatem</div>
                                        </div>
                                    </div>

                                    <div class="sp-thumbnail">
                                        <div class="sp-thumbnail-image-container">
                                            <img class="sp-thumbnail-image" src="http://bqworks.com/slider-pro/images/image10_thumbnail.jpg"/>
                                        </div>
                                        <div class="sp-thumbnail-text">
                                            <div class="sp-thumbnail-title">Laudantium</div>
                                            <div class="sp-thumbnail-description">Totam rem aperiam, eaque ipsa quae ab illo</div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                            <div id="example4" class="slider-pro">
                                <div class="sp-slides">
                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif" 
                                            data-src="http://bqworks.com/slider-pro/images/image1_medium.jpg"/>

                                        <p class="sp-layer sp-white sp-padding"
                                            data-horizontal="50" data-vertical="50"
                                            data-show-transition="left" data-show-delay="400">
                                            Lorem ipsum
                                        </p>

                                        <p class="sp-layer sp-black sp-padding"
                                            data-horizontal="180" data-vertical="50"
                                            data-show-transition="left" data-show-delay="600">
                                            dolor sit amet
                                        </p>

                                        <p class="sp-layer sp-white sp-padding"
                                            data-horizontal="315" data-vertical="50"
                                            data-show-transition="left" data-show-delay="800">
                                            consectetur adipisicing elit.
                                        </p>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif" 
                                            data-src="http://bqworks.com/slider-pro/images/image2_medium.jpg"/>

                                        <h3 class="sp-layer sp-black sp-padding" 
                                            data-horizontal="40" data-vertical="40" 
                                            data-show-transition="left">
                                            Lorem ipsum dolor sit amet
                                        </h3>

                                        <p class="sp-layer sp-white sp-padding" 
                                            data-horizontal="40" data-vertical="100" 
                                            data-show-transition="left" data-show-delay="200">
                                            consectetur adipisicing elit
                                        </p>

                                        <p class="sp-layer sp-black sp-padding" 
                                            data-horizontal="40" data-vertical="160" data-width="350" 
                                            data-show-transition="left" data-show-delay="400">
                                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif" 
                                            data-src="http://bqworks.com/slider-pro/images/image3_medium.jpg"/>

                                        <p class="sp-layer sp-white sp-padding" 
                                            data-position="centerCenter" data-vertical="-50" 
                                            data-show-transition="right" data-show-delay="500" >
                                            Lorem ipsum dolor sit amet
                                        </p>

                                        <p class="sp-layer sp-black sp-padding" 
                                            data-position="centerCenter" data-vertical="50" 
                                            data-show-transition="left" data-show-delay="700">
                                            consectetur adipisicing elit
                                        </p>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif" 
                                            data-src="http://bqworks.com/slider-pro/images/image4_medium.jpg"/>

                                        <p class="sp-layer sp-black sp-padding"
                                            data-position="bottomLeft" data-vertical="0" data-width="100%"
                                            data-show-transition="up">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif" 
                                            data-src="http://bqworks.com/slider-pro/images/image5_medium.jpg"/>

                                        <p class="sp-layer sp-white sp-padding" 
                                            data-vertical="5%" data-horizontal="5%" data-width="90%" 
                                            data-show-transition="down" data-show-delay="400">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif" 
                                            data-src="http://bqworks.com/slider-pro/images/image6_medium.jpg"/>

                                        <p class="sp-layer sp-white sp-padding" 
                                            data-horizontal="10" data-vertical="10" data-width="300">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif" 
                                            data-src="http://bqworks.com/slider-pro/images/image7_medium.jpg"/>

                                        <p class="sp-layer sp-black sp-padding" 
                                            data-position="bottomLeft" data-horizontal="5%" data-vertical="5%" data-width="90%" 
                                            data-show-transition="up" data-show-delay="400">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                        </p>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif" 
                                            data-src="http://bqworks.com/slider-pro/images/image8_medium.jpg"/>
                                    </div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif" 
                                            data-src="http://bqworks.com/slider-pro/images/image9_medium.jpg"/>

                                        <p class="sp-layer sp-black sp-padding" 
                                            data-horizontal="50" data-vertical="50"
                                            data-show-transition="down" data-show-delay="500">
                                            Lorem ipsum dolor sit amet
                                        </p>

                                        <p class="sp-layer sp-white sp-padding" 
                                            data-horizontal="50" data-vertical="100"
                                            data-show-transition="up" data-show-delay="500">
                                            consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>

                                    <div class="sp-thumbnails">
                                        <img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image1_medium.jpg"/>
                                    <</div>

                                    <div class="sp-slide">
                                        <img class="sp-image" src="../src/css/images/blank.gif" 
                                            data-src="http://bqworks.com/slider-pro/images/image10_medium.jpg"/>
                                    </div>
                                </div>

                                <div class="sp-thumbnails">
                                    <img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image1_medium.jpg"/>
                                    <img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image2_medium.jpg"/>
                                    <img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image3_medium.jpg"/>
                                    <img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image4_medium.jpg"/>
                                    <img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image5_medium.jpg"/>
                                    <img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image6_medium.jpg"/>
                                    <img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image7_medium.jpg"/>
                                    <img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image8_medium.jpg"/>
                                    <img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image9_medium.jpg"/>
                                    <img class="sp-thumbnail" src="http://bqworks.com/slider-pro/images/image10_medium.jpg"/>
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


