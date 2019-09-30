<!DOCTYPE html>
<html lang="fr">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?/*= $titre_page; */?></title>

    <!-- Bootstrap core CSS-->
    <link rel="stylesheet" href="<?= css_url('assets/vendor/bootstrap/css/','bootstrap.min'); ?>">

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="<?= css_url('assets/vendor/fontawesome-free/css/','all.min'); ?>">

    <!-- Page level plugin CSS-->
    <link rel="stylesheet" href="<?= css_url('assets/vendor/datatables/','dataTables.bootstrap4'); ?>">

    <!-- Custom styles for this template-->
    <link rel="stylesheet" href="<?= css_url('assets/css/','sb-admin'); ?>">

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="<?= site_url('dashboard'); ?>">-Admin</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle text-white" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <?= (isset($nomComplet) && isset($nomComplet)) ? $nomComplet : 'XXXXXXX' ; ?> 
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="<?= site_url('dashboard','profil_user'); ?>">Profil</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Déconnexion</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav text-capitalize">
        <li class="nav-item active">
          <a class="nav-link" href="<?= site_url('dashboard'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="<?= site_url('dashboard','gestion_article'); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Gestion article</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="<?= site_url('dashboard','gestion_user'); ?>">
            <i class="fas fa-fw fa-user-alt"></i>
            <span>Utilisateurs</span>
          </a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="<?= site_url('dashboard'); ?>">Dashboard</a>
            </li>
            <li class="breadcrumb-item active"><?= $titre; ?></li>
          </ol>

          <?php $this->load->view($page); ?>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © By KANIEN</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Prêt à partir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Sélectionnez "Déconnexion" ci-dessous si vous êtes prêt à mettre fin à votre session en cours.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Annuler</button>
            <a class="btn btn-primary" href="<?= site_url('dashboard','deconnexion'); ?>">Déconnexion</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= js_url('assets/vendor/jquery/','jquery.min'); ?>"></script>
    <script src="<?= js_url('assets/vendor/bootstrap/js/','bootstrap.bundle.min'); ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= js_url('assets/vendor/jquery-easing/','jquery.easing.min'); ?>"></script>

    <!-- Page level plugin JavaScript-->
    <script src="<?= js_url('assets/vendor/chart.js/','Chart.min'); ?>"></script>
    <script src="<?= js_url('assets/vendor/datatables/','jquery.dataTables'); ?>"></script>
    <script src="<?= js_url('assets/vendor/datatables/','dataTables.bootstrap4'); ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= js_url('assets/js/','sb-admin.min'); ?>"></script>

    <!-- Script validation -->
    <script src="<?= js_url('assets/js/validate.form/','jquery-validate.min'); ?>"></script>

    <!-- Demo scripts for this page-->
    <script src="<?= js_url('assets/js/demo/','datatables-demo'); ?>"></script>
    <script src="<?= js_url('assets/js/demo/','chart-area-demo'); ?>"></script>

    <!-- Script page en cours -->
    <?php if (isset($js_page) && $js_page!=""): ?>
    <script src="<?= js_url('assets/js/js.views/',$js_page); ?>"></script>
    <?php endif ?>

  </body>

</html>
