<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--<title><?/*= $titre_page; */?></title>-->

    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="<?= css_url('assets/vendor/bootstrap/css/','bootstrap.min'); ?>">

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="<?= css_url('assets/vendor/fontawesome-free/css/','all.min'); ?>">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="<?= css_url('assets/css/','sb-admin'); ?>">

  </head>

  <body class="bg-dark">

    <div class="container">

        <div class="row justify-content-md-center mt-5">
	        
	        <div class="col-md-6">
	            <?php 
		            if (isset($message_infos)) {
		                echo $message_infos;
		            }
		        ?>
	        </div>
	        
	    </div>
      

      <div class="card card-login mx-auto mt-3">
        <div class="card-header">-Login</div>
        <div class="card-body">
          <form role="form" enctype="multipart/form-data" action="<?= site_url('connexion'); ?>" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="inputLogin" name="userLogin" class="form-control" placeholder="Votre login" required="required" autofocus="autofocus" value="<?php echo set_value('userLogin'); ?>">
                <label for="inputLogin">Votre login</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="userPassword" class="form-control" placeholder="Mot de passe" required="required">
                <label for="inputPassword">Mot de passe</label>
              </div>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Connexion</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= js_url('assets/vendor/jquery/','jquery.min'); ?>"></script>
    <script src="<?= js_url('assets/vendor/bootstrap/js/','bootstrap.bundle.min'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= js_url('assets/vendor/jquery-easing/','jquery.easing.min'); ?>"></script>

  </body>

</html>
