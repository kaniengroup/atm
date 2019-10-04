<?php
if (isset($reponse) && $reponse=="true") {
?>
    <div class="row">
        <div class="alert-dismiss col-12">
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Opération !</strong> Effectuée avec succès.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span class="fa fa-times"></span>
                </button>
            </div>
        </div>
    </div>
<?php
} else if (isset($reponse) && $reponse=="false") {
?>
    <div class="row">
        <div class="alert-dismiss col-12">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Opération !</strong> Echouée.
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span class="fa fa-times"></span>
                </button>
            </div>
        </div>
    </div>
<?php
}
?>
<div class="row">
    <!-- Dark table start -->
    <div class="col-12 mt-1 mb-5">

        <div class="card">
            <div class="card-body">
                <button type="button" class="btn btn-dark btn-sm mb-3" data-toggle="modal" data-target="#modal_pub_ajout" title="Ajouter un utilisateur">Ajouter un article</button>

                <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                      <tr>
                        <th>Titre</th>
                        <th>Contenu</th>
                        <th>Date de création</th>
                        <th>Etat</th>
                        <th>Catégorie</th>
                        <th style="background-color:#ff7d1f;color:white">Modification</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      foreach ($list_article as $pub) :
                      ?>
                        <tr>
                          <td><?= $pub['titre']; ?></td>
                          <td><?= substr($pub['contenu'], 0, 45).' ...'; ?></td>
                          <td><?= $pub['date_creation']; ?></td>
                          <td>
                              <span class="text-center <?php if($pub['etat']=='Publier') echo 'badge badge-success'; else if($pub['etat']=='Ne pas publier') echo 'badge badge-warning'; else if($pub['etat']=='Publier sur une période') echo 'badge badge-info'; ?>"><?= $pub['etat']; ?></span>
                          </td>
                          <td><?= $pub['categorie']; ?></td>
                          <td>
                            <div class="d-flex justify-content-center">
                              <a onclick="get_pub_info(<?= $pub['id']; ?>); return false;" href="#" class="text-primary" data-toggle="modal" data-target="#modal_pub_info" title="Info"><i class="fa fa-info-circle fa-1x"></i></a>
                              &nbsp;&nbsp;&nbsp;
                              <a onclick="get_pub_info2(<?= $pub['id']; ?>); return false;" href="#" class="text-danger" data-toggle="modal" data-target="#modal_pub_modif" title="Modifier"><i class="fa fa-edit fa-1x"></i></a>
                              &nbsp;&nbsp;&nbsp;
                              <a onclick="get_pub_id(<?= $pub['id']; ?>,'<?= $pub['titre']; ?>'); return false;" href="#" class="text-danger" data-toggle="modal" data-target="#modal_pub_suppr" title="Supprimer"><i class="fa fa-trash fa-1x"></i></a>
                            </div>
                          </td>
                        </tr>
                      <?php
                      endforeach;
                      ?>

                    </tbody>
                  </table>
                </div>

            </div>
        </div>
    </div>

</div>



<!-- Visualiser infos pub -->
<div class="modal fade bd-example-modal-lg" id="modal_pub_info">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Infos Article</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">

                <div class="row">
                    <div class="col-12">
                        <div style="display:none;" id="msg_chargement">
                            <p style="color: red;">Erreur de chargement des données...</p>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-around">

                  <div class="col-6">

                    <div class="form-group">
                      <label for="titre_i" class="col-form-label col-form-label-sm">Titre</label>
                      <input type="text" class="form-control form-control-sm" id="titre_i" readonly>
                    </div>

                    <div class="form-group">
                        <label for="contenu_i" class="col-form-label col-form-label-sm">Contenu</label>
                        <div class="pb-article" id="contenu_i"></div>
                        <!-- <textarea class="form-control form-control-sm" ></textarea> -->
                    </div>

                    <div class="form-group">
                      <label for="compte_i" class="col-form-label col-form-label-sm">Votre compte</label>
                      <input type="text" class="form-control form-control-sm" id="compte_i" readonly>
                    </div>

                    <div class="form-group">
                        <label for="date_creation_i" class="col-form-label col-form-label-sm">Date de Création</label>
                        <input class="form-control form-control-sm" type="text" id="date_creation_i" readonly>
                    </div>

                  </div>

                  <div class="col-6">

                    <div class="form-group">
                        <label for="categorie_article_i" class="col-form-label col-form-label-sm">Catégorie</label>
                        <input class="form-control form-control-sm" type="text" id="categorie_article_i" readonly>
                    </div>

                    <div class="form-group">
                        <label for="etat_article_i" class="col-form-label col-form-label-sm">Etat</label>
                        <input class="form-control form-control-sm" type="text" id="etat_article_i" readonly>
                    </div>

                    <div class="form-group">
                        <label for="date_pub_i" class="col-form-label col-form-label-sm">Date de publication</label>
                        <input class="form-control form-control-sm" type="text" id="date_pub_i" readonly>
                    </div>

                    <div class="row">
                        <div class="col-6">
                          <div class="form-group">
                              <label for="periode_debut_i" class="col-form-label col-form-label-sm">Période de</label>
                              <input class="form-control form-control-sm" type="text" id="periode_debut_i" readonly>
                          </div>
                        </div>

                        <div class="col-6">
                          <div class="form-group">
                              <label for="periode_fin_i" class="col-form-label col-form-label-sm">A</label>
                              <input class="form-control form-control-sm" type="text" id="periode_fin_i" readonly>
                          </div>
                        </div>
                    </div>

                  </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Fermer</button>
                </div>

            </div>

        </div>
    </div>
</div>


<!-- Modifier pub -->
<div class="modal fade bd-example-modal-lg" id="modal_pub_modif">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modifier l'article</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">

              <form id="form_update_pub" enctype="multipart/form-data" action="<?= site_url('dashboard','gestion_article/update'); ?>" method="post">
                <div class="row justify-content-around">

                  <input type="hidden" name="pub_id_m" id="pub_id_m">

                  <div class="col-6">

                    <div class="form-group">
                      <label for="titre_m" class="col-form-label col-form-label-sm">Titre</label>
                      <input data-required="true" data-describedby="titre_mHelp" data-description="titre_m" type="text" class="form-control form-control-sm" id="titre_m" name="titre_m" aria-describedby="titre_mHelp" >
                      <small id="titre_mHelp" class="form-text text-muted">Veuillez saisir la nouvelle  valeur dans le champ.</small>
                    </div>

                    <div class="form-group">
                        <label for="contenu_m" class="col-form-label col-form-label-sm">Contenu</label>
                        <textarea data-required="true" data-describedby="contenu_mHelp" data-description="contenu_m" class="form-control form-control-sm" name="contenu_m" id="contenu_m" aria-describedby="contenu_mHelp" rows="3" placeholder="Tapez votre texts ici..."></textarea>
                        <small id="contenu_mHelp" class="form-text text-muted">Veuillez saissir la nouvelle  valeur dans le champ.</small>
                    </div>

                    <div class="form-group">
                      <label for="compte_m" class="col-form-label col-form-label-sm">Votre compte</label>
                      <input type="text" class="form-control form-control-sm" id="compte_m" disabled>
                    </div>

                    <div class="form-group">
                        <label for="date_creation_m" class="col-form-label col-form-label-sm">Date de Création</label>
                        <input class="form-control form-control-sm" type="text" id="date_creation_m" disabled>
                    </div>

                  </div>

                  <div class="col-6">

                    <div class="form-group">
                        <label for="categorie_article_m" class="col-form-label col-form-label-sm">Catégorie</label>
                        <select data-required="true" data-describedby="categorie_article_mHelp" data-description="categorie_article_m" class="form-control form-control-sm" name="categorie_article_m" id="categorie_article_m" aria-describedby="categorie_article_mHelp">
                            <option value="" selected="selected">Choisissez un etat</option>
                            <?php
                            foreach ($list_categorie as $categorie) :
                            ?>
                            <option value="<?= $categorie['id']; ?>"><?= $categorie['libelle']; ?></option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                        <small id="categorie_article_mHelp" class="form-text text-muted">Veuillez saissir la nouvelle  valeur dans le champ.</small>
                    </div>

                    <div class="form-group">
                        <label for="etat_article_m" class="col-form-label col-form-label-sm">Etat</label>
                        <select data-required="true" data-describedby="etat_article_mHelp" data-description="etat_article_m" class="form-control form-control-sm" name="etat_article_m" id="etat_article_m" aria-describedby="etat_article_mHelp">
                            <option value="" selected="selected">Choisissez un etat</option>
                            <?php
                            foreach ($list_etat as $etat) :
                            ?>
                            <option value="<?= $etat['libelle']; ?>"><?= $etat['libelle']; ?></option>
                            <?php
                            endforeach;
                            ?>
                        </select>
                        <small id="etat_article_mHelp" class="form-text text-muted">Veuillez saissir la nouvelle  valeur dans le champ.</small>
                    </div>

                    <div class="form-group" id="date_publication_m">
                        <label for="date_pub_m" class="col-form-label col-form-label-sm">Date de publication</label>
                        <input data-required="true" data-describedby="date_pub_mHelp" data-description="date_pub_m" data-pattern="^([1-9][0-9]{3})-[0-9]{2}-[0-9]{2}$" class="form-control form-control-sm" type="text" name="date_pub_m" id="date_pub_m" aria-describedby="date_pub_mHelp">
                        <small id="date_pub_mHelp" class="form-text text-muted">Veuillez saissir la nouvelle valeur dans le champ.</small>
                    </div>

                    <div class="row" id="periode_publication_m">
                        <div class="col-6">
                          <div class="form-group">
                            <label for="periode_debut_m" class="col-form-label col-form-label-sm">Période de </label>
                            <input data-required="true" data-describedby="periode_debut_mHelp" data-description="periode_debut_m" data-pattern="^([1-9][0-9]{3})-[0-9]{2}-[0-9]{2}$" class="form-control form-control-sm" type="text" name="periode_debut_m" id="periode_debut_m" aria-describedby="periode_debut_mHelp">
                            <small id="periode_debut_mHelp" class="form-text text-muted">Veuillez saissir la nouvelle valeur dans le champ.</small>
                          </div>
                        </div>

                        <div class="col-6">
                          <div class="form-group">
                            <label for="periode_fin_m" class="col-form-label col-form-label-sm">A</label>
                            <input data-required="true" data-describedby="periode_fin_mHelp" data-description="periode_fin_m" data-pattern="^([1-9][0-9]{3})-[0-9]{2}-[0-9]{2}$" class="form-control form-control-sm" type="text" name="periode_fin_m" id="periode_fin_m" aria-describedby="periode_fin_mHelp">
                            <small id="periode_fin_mHelp" class="form-text text-muted">Veuillez saissir la nouvelle valeur dans le champ.</small>
                          </div>
                        </div>
                    </div>

                  </div>
                </div>

                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary btn-sm" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary btn-sm">Modifier</button>
                </div>

              </form>

            </div>
        </div>
    </div>
</div>



<!-- Ajouter pub -->
<div class="modal fade bd-example-modal-lg" id="modal_pub_ajout">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Ajouter un article</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">

              <form id="form_add_pub" enctype="multipart/form-data" action="<?= site_url('dashboard','gestion_article/add'); ?>" method="post">
                <div class="row justify-content-around">

                  <div class="col-6">

                    <div class="form-group">
                      <label for="titre" class="col-form-label col-form-label-sm">Titre</label>
                      <input data-required="true" data-describedby="titreHelp" data-description="titre" type="text" class="form-control form-control-sm" id="titre" name="titre" aria-describedby="titreHelp" >
                      <small id="titreHelp" class="form-text text-muted">Veuillez saisir la nouvelle  valeur dans le champ.</small>
                    </div>

                    <div class="form-group">
                        <label for="contenu" class="col-form-label col-form-label-sm">Contenu</label>
                        <textarea data-required="true" data-describedby="contenuHelp" data-description="contenu" class="form-control form-control-sm" name="contenu" id="contenu" aria-describedby="contenuHelp" rows="3" placeholder="Tapez votre texts ici..."></textarea>
                        <small id="contenuHelp" class="form-text text-muted">Veuillez saissir la nouvelle  valeur dans le champ.</small>
                    </div>

                    <div class="form-group">
                      <label for="compte" class="col-form-label col-form-label-sm">Votre compte</label>
                      <input type="text" class="form-control form-control-sm" value="<?= $nomComplet; ?>" disabled>
                    </div>

                    <div class="form-group">
                        <label for="date_creation" class="col-form-label col-form-label-sm">Date de Création</label>
                        <input class="form-control form-control-sm" type="text" name="date_creation" id="date_creation"value="<?= $date_jour; ?>" disabled>
                    </div>

                  </div>

                  <div class="col-6">

                      <div class="form-group">
                          <label for="categorie_article" class="col-form-label col-form-label-sm">Catégorie</label>
                          <select data-required="true" data-describedby="categorie_articleHelp" data-description="categorie_article" class="form-control form-control-sm" name="categorie_article" id="categorie_article" aria-describedby="categorie_articleHelp">
                              <option value="" selected="selected">Choisissez une catégorie</option>
                              <?php
                              foreach ($list_categorie as $categorie) :
                                  ?>
                                  <option value="<?= $categorie['id']; ?>"><?= $categorie['libelle']; ?></option>
                                  <?php
                              endforeach;
                              ?>
                          </select>
                          <small id="categorie_articleHelp" class="form-text text-muted">Veuillez saissir la nouvelle  valeur dans le champ.</small>
                      </div>

                      <div class="form-group">
                          <label for="etat_article" class="col-form-label col-form-label-sm">Etat</label>
                          <select data-required="true" data-describedby="etat_articleHelp" data-description="etat_article" class="form-control form-control-sm" name="etat_article" id="etat_article" aria-describedby="etat_articleHelp">
                              <option value="" selected="selected">Choisissez un etat</option>
                              <?php
                              foreach ($list_etat as $etat) :
                                  ?>
                                  <option value="<?= $etat['libelle']; ?>"><?= $etat['libelle']; ?></option>
                                  <?php
                              endforeach;
                              ?>
                          </select>
                          <small id="etat_articleHelp" class="form-text text-muted">Veuillez saissir la nouvelle  valeur dans le champ.</small>
                      </div>

                      <!-- <div class="form-group">
                          <label for="contenu" class="col-form-label col-form-label-sm">Image</label>
                          <textarea data-required="true" data-describedby="contenuHelp" data-description="contenu" class="form-control form-control-sm" name="contenu" id="contenu" aria-describedby="contenuHelp" rows="3" placeholder="Tapez votre texts ici..."></textarea>
                          <small id="contenuHelp" class="form-text text-muted">Veuillez saissir la nouvelle  valeur dans le champ.</small>
                      </div> -->

                      <!--<div class="input-group">
                          <div class="input-group-prepend">
                              <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-image"></i></span>
                          </div>
                          <div class="custom-file">
                              <input type="file" name="uplpod_image" class="custom-file-input" id="inputGroupFile01"
                                     aria-describedby="inputGroupFileAddon01">
                              <label class="custom-file-label" for="inputGroupFile01">Parcourir</label>
                          </div>
                      </div>-->
                  <!--<div class="input-group col-form-label-sm">
                          <div class="input-group-prepend ">
                              <span class="input-group-text" id="inputGroupFileAddon01"><i class="fas fa-image"></i></span>
                          </div>
                          <div class="custom-file">
                              <input type="file" class="custom-file-input" id="inputGroupFile01"
                                     aria-describedby="inputGroupFileAddon01">
                              <label class="custom-file-label" for="inputGroupFile01">Parcourir</label>
                          </div>
                      </div>-->

                      <!--<div class="form-group">
                          <label for="contenu" class="col-form-label col-form-label-sm">Image</label>
                          <div class="custom-file">
                              <input type="file" class="custom-file-input" id="inputGroupFile01"
                                     aria-describedby="inputGroupFileAddon01">
                              <label class="custom-file-label" for="inputGroupFile01">Parcourir</label>
                          </div>
                          <small id="contenuHelp" class="form-text text-muted">Veuillez saissir la nouvelle  valeur dans le champ.</small>
                      </div>-->

                    <div style="display: none;" class="form-group" id="date_publication">
                        <label for="date_pub" class="col-form-label col-form-label-sm">Date de publication</label>
                        <input data-required="true" data-describedby="date_pubHelp" data-description="date_pub" data-pattern="^([1-9][0-9]{3})-[0-9]{2}-[0-9]{2}$" class="form-control form-control-sm" type="text" name="date_pub" id="date_pub" aria-describedby="date_pubHelp">
                        <small id="date_pubHelp" class="form-text text-muted">Veuillez saissir la nouvelle valeur dans le champ.</small>
                    </div>

                    <div class="row" style="display: none;" id="periode_publication">
                        <div class="col-6">
                          <div class="form-group">
                            <label for="periode_debut" class="col-form-label col-form-label-sm">Période de </label>
                            <input data-required="true" data-describedby="periode_debutHelp" data-description="periode_debut" data-pattern="^([1-9][0-9]{3})-[0-9]{2}-[0-9]{2}$" class="form-control form-control-sm" type="text" name="periode_debut" id="periode_debut" aria-describedby="periode_debutHelp">
                            <small id="periode_debutHelp" class="form-text text-muted">Veuillez saisir la nouvelle valeur dans le champ.</small>
                          </div>
                        </div>

                        <div class="col-6">
                            <div class="form-group">
                                <label for="periode_fin" class="col-form-label col-form-label-sm">A</label>
                                <input data-required="true" data-describedby="periode_finHelp" data-description="periode_fin" data-pattern="^([1-9][0-9]{3})-[0-9]{2}-[0-9]{2}$" class="form-control form-control-sm" type="text" name="periode_fin" id="periode_fin" aria-describedby="periode_finHelp">
                                <small id="periode_finHelp" class="form-text text-muted">Veuillez saisir la nouvelle valeur dans le champ.</small>
                            </div>
                        </div>

                    </div>

                  </div>
                </div>

                <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary btn-sm" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary btn-sm">Ajouter</button>
                </div>

              </form>

            </div>
        </div>


    </div>
</div>



<!-- Suppression de pub -->
<div class="modal fade" id="modal_pub_suppr">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Suppression pub</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form id="modal_pub_suppr_f" enctype="multipart/form-data" action="<?= site_url('dashboard','gestion_article/delete'); ?>" method="post">

                    <input type="hidden" name="pub_id_s" id="pub_id_s">
                    <p class="text-capitalize text-center m-3">Voulez-vous vraiment supprimer la pub <strong id="pub_titre_supp"></strong>.</p>
                    <div class="modal-footer row justify-content-center">
                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Annuler</button>
                        <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>
