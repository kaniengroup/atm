
<!-- Icon Cards-->
<div class="row">
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-primary o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-comments"></i>
        </div>
        <div class="mr-5"><?= $nbre_article; ?> Article(s)</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="<?= site_url('dashboard','gestion_article'); ?>">
        <span class="float-left">Voir les détails</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-warning o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-list"></i>
        </div>
        <div class="mr-5"><?= $nbre_article_ligne; ?> Article(s) en ligne</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="<?= site_url('dashboard','gestion_article'); ?>">
        <span class="float-left">Voir les détails</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-success o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-shopping-cart"></i>
        </div>
        <div class="mr-5"><?= $nbre_blog; ?> Blog(s)</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="<?= site_url('dashboard','gestion_blog'); ?>">
        <span class="float-left">Voir les détails</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-danger o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-life-ring"></i>
        </div>
        <div class="mr-5"><?= $nbre_blog_ligne; ?> Blog(s) en ligne</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="<?= site_url('dashboard','gestion_blog'); ?>">
        <span class="float-left">Voir les détails</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-danger o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-life-ring"></i>
        </div>
        <div class="mr-5"><?= $nbre_internaute; ?> Internaute(s)</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="<?= site_url('dashboard','gestion_user'); ?>">
        <span class="float-left">Voir les détails</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
  <div class="col-xl-3 col-sm-6 mb-3">
    <div class="card text-white bg-danger o-hidden h-100">
      <div class="card-body">
        <div class="card-body-icon">
          <i class="fas fa-fw fa-life-ring"></i>
        </div>
        <div class="mr-5"><?= $nbre_user; ?> Utilisateur(s)</div>
      </div>
      <a class="card-footer text-white clearfix small z-1" href="<?= site_url('dashboard','gestion_user'); ?>">
        <span class="float-left">Voir les détails</span>
        <span class="float-right">
          <i class="fas fa-angle-right"></i>
        </span>
      </a>
    </div>
  </div>
</div>
