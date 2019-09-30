<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $titre_page; ?></title>
    <!-- Vendor styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/calendar/calendar-style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/Apex/style.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/bower_components/fontawesome/css/all.css'); ?>">
    <!-- App styles -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/app.min.css'); ?>">
    <link rel="stylesheet" type="text/css"  media="screen" href="<?php echo base_url('assets/scripts_add/css/slider-pro.min.css'); ?>"/>
    <link rel="stylesheet" type="text/css"  href="<?php echo base_url('assets/scripts_add/css/examples.css'); ?>"/>
</head>
<body data-ma-theme="">
    <main class="main">
        <!-- Header and Nav -->
        <div class="container bg-white">
            <div class="row bg-white p-1">
                <div class="col-md-8">
                    <img src="<?php echo base_url('assets/img/LOGO-ATM.png'); ?>" class="logo_officiel_ATM" id="logo_ATM" alt="">
                </div>
                <div class="col-md-4 follow text-white">
                    <div class="right">
                        <span class="follow_me"> Suivez nous sur :</span>
                        <a href="https://www.facebook.com/mabritoikeusse/" target="_blank">
                            <button class="btn fb-color btn--icon text-white"><i class="fab fa-facebook-f"></i></button>
                        </a>
                        <a href="https://twitter.com/atmabri" target="_blank">
                            <button class="btn bg-white btn--icon tw-color"><i class="fab fa-twitter"></i></button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="row fb-color text-white">
                <nav class="navbar navbar-expand-lg fb-color  navbar-light text-white  container-fluid">
                    <a class="navbar-brand" href="#"></a>
                    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon "></span>
                    </button>

                    <div class="collapse navbar-collapse  " id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto  ">
                            <li class="nav-item active">
                                <a class="nav-link menu_p" href="<?php echo site_url('accueil') ?>">ACCUEIL </span></a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link menu_p" href="<?php echo site_url('portrait') ?>">PORTRAIT </span></a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link menu_p" href="<?php echo site_url('blog') ?>">BLOG </span></a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link menu_p" href="<?php echo site_url('actualites') ?>">ACTUALITES </span></a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link menu_p" href="<?php echo site_url('agenda') ?>">AGENDA </span></a>
                            </li>

                            <li class="nav-item active">
                                <a class="nav-link menu_p" href="<?php echo site_url('contacts') ?>">CONTACTS </span></a>
                            </li>

                        </ul>

                        <div class="flex">
                            <div class="d-flex justify-content-end">

                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!--Fin Header and Nav -->

        <!-- Début Content Page... -->
        <?php $this->load->view('pages/'.$page); ?>
        <!-- FIn Content Page... -->


    </main>

    <!-- Début Footer -->
    <div class="container">
        <div class="row fb-color p-5">
        </div>
    </div>
    
    <!-- Fin Footer -->

    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v3.3"></script>
    <!-- Older IE warning message -->
    <!--[if IE]>
    <div class="ie-warning">
        <h1>Warning!!</h1>

        <p>You are using an outdated version of Internet Explorer, please upgrade to any of the following web browsers to
            access this website.</p>

        <div class="ie-warning__downloads">
            <a href="http://www.google.com/chrome">
                <img src="img/browsers/chrome.png" alt="">
            </a>

            <a href="https://www.mozilla.org/en-US/firefox/new">
                <img src="img/browsers/firefox.png" alt="">
            </a>

            <a href="http://www.opera.com">
                <img src="img/browsers/opera.png" alt="">
            </a>

            <a href="https://support.apple.com/downloads/safari">
                <img src="img/browsers/safari.png" alt="">
            </a>

            <a href="https://www.microsoft.com/en-us/windows/microsoft-edge">
                <img src="<?php echo  base_url('img/browsers/edge.png'); ?>" alt="">
            </a>

            <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                <img src="<?php echo  base_url('img/browsers/ie.png'); ?>" alt="">
            </a>
        </div>
        <p>Sorry for the inconvenience!</p>
    </div>
    <![endif]-->

    <!-- Javascript -->
    <!-- Vendors -->
    <script src="<?php echo  base_url('assets/js/jquery.js'); ?>"></script>
    <script src="<?php echo  base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?php echo  base_url('assets/js/bootstrap.min.js'); ?>"></script>
    <script src="<?php echo  base_url('assets/js/pagination.min.js'); ?>"></script>
    <!-- App functions and actions -->
    <script src="<?php echo  base_url('assets/js/app.min.js'); ?>"></script>

    <script type="text/javascript">
    $(function() {
        $('.view_page').hide(); // Cacher toute les pages
        $('#page_1').show(500); // Afficher la première page

        $('#page').Pagination({
            size: "<?= $nbre_article_total; ?>", //Nombre total d'éléments
            pageShow: 5, //Nombre de page à afficher
            page: 1, //Page affichée
            limit: "<?= $nbre_article_par_page; ?>", //Nombre élément par page
        }, function(obj){
            $('.view_page').hide(500);
            $('#page_'+obj.page).show(500);
        });
        $('.pagination').children('li').eq(1).addClass('active'); 
        // Séléctionne la première page
    });
    </script>

    <!-- Début JS article -->
    <script src="<?php echo  base_url('assets/scripts_add/js/jquery.sliderPro.min.js'); ?>"></script>

    <script type="text/javascript">
        $( document ).ready(function( $ ) {
            $( '#example1' ).sliderPro({
                width: 960,
                height: 500,
                arrows: true,
                buttons: false,
                waitForLayers: true,
                thumbnailWidth: 200,
                thumbnailHeight: 100,
                thumbnailPointer: true,
                autoplay: false,
                autoScaleLayers: false,
                breakpoints: {
                    500: {
                        thumbnailWidth: 120,
                        thumbnailHeight: 50
                    }
                }
            });
        });
    </script>
    <!-- Fin JS article -->

    <!-- Début JS Photos -->
    <script type="text/javascript">
        $( document ).ready(function( $ ) {
            $( '#example3' ).sliderPro({
                fade: true,
                arrows: true,
                buttons: false,
                fullScreen: true,
                shuffle: true,
                smallSize: 500,
                mediumSize: 1000,
                largeSize: 3000,
                thumbnailArrows: true,
                autoplay: false
            });
        });
    </script>
    <!-- Fin JS Photos -->

    <!-- Début JS Vidéos -->
    <script type="text/javascript">
        $( document ).ready(function( $ ) {
            $( '#example4' ).sliderPro({
                fade: true,
                arrows: true,
                buttons: false,
                fullScreen: true,
                shuffle: true,
                smallSize: 500,
                mediumSize: 1000,
                largeSize: 3000,
                thumbnailArrows: true,
                autoplay: false
            });
        });
</script>
    <!-- Fin JS Vidéos -->

    <!-- Début JS calender -->
    <script src="<?php echo  base_url('assets/calendar/calendar.js'); ?>"></script>

    <script>
		let c = $('.calendar');
		let calendar = new Calendar(c);
		// console.log(calendar.getSelectedDate().day);
		// console.log(c.find(0));
		c.find('.ok-btn').on('click', function() {console.log(calendar.getSelectedDate().fullDate)});
	</script>
    <!-- Fin JS calender -->

           
</body>
</html>


