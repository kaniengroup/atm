
var lien_site = 'http://localhost/atm/';


// Validation du formulaire
$('#form_add_pub').validate({
    onKeyup : true,
    onChange : true,
    onBlur : true,
    eachValidField : function() {

        $(this).closest('div').removeClass('error').addClass('success');
    },
    eachInvalidField : function() {

        $(this).closest('div').removeClass('success').addClass('error');
    },
    description : {
        titre : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        },
        contenu : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        },
        etat_blog : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        },
        date_pub : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            pattern : '<div class="alert alert-danger">Veuillez saisir votre Numéro. EX: 9999-99-99</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        },
        periode_debut : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            pattern : '<div class="alert alert-danger">Veuillez saisir votre Numéro. EX: 9999-99-99</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        },
        periode_fin : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            pattern : '<div class="alert alert-danger">Veuillez saisir votre Numéro. EX: 9999-99-99</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        }
    }
});

// Validation du formulaire
$('#form_update_pub').validate({
    onKeyup : true,
    onChange : true,
    onBlur : true,
    eachValidField : function() {

        $(this).closest('div').removeClass('error').addClass('success');
    },
    eachInvalidField : function() {

        $(this).closest('div').removeClass('success').addClass('error');
    },
    description : {
        titre_m : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        },
        contenu_m : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        },
        etat_blog_m : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        },
        date_pub_m : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            pattern : '<div class="alert alert-danger">Veuillez saisir votre Numéro. EX: 9999-99-99</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        },
        periode_debut_m : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            pattern : '<div class="alert alert-danger">Veuillez saisir votre Numéro. EX: 9999-99-99</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        },
        periode_fin_m : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            pattern : '<div class="alert alert-danger">Veuillez saisir votre Numéro. EX: 9999-99-99</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        }
    }
});


//Récuperer la valeur de l'identifiant
function get_pub_info(id_pub=0) {

    if (id_pub==0) {
        $('#msg_chargement').show("slow");
    } else {

        $.ajax({
            type: "POST",
            dataType: "json",
            url: lien_site+"charge_data_pubs/get_blog_info",
            data: {postID_pub:id_pub},
            success: function(data){
                var pub_data = data;

                pub_data.forEach(function(pub)
                {
                    $('#titre_i').val(pub['titre']);
                    $('#contenu_i').text(pub['contenu']);
                    $('#compte_i').val(pub['user']);
                    $('#date_creation_i').val(pub['date_creation']);
                    $('#etat_blog_i').val(pub['etat']);
                    $('#date_pub_i').val(pub['date_pub']);
                    $('#periode_debut_i').val(pub['periode_pub_debut']);
                    $('#periode_fin_i').val(pub['periode_pub_fin']);
                });
                $('#msg_chargement').hide("hide");

            },
            error: function(data){
                $('#msg_chargement').show("slow");
            }

        });
    }
}


//Récuperer la valeur de l'identifiant
function get_pub_info2(id_pub=0) {

    $('#date_publication_m').show();
    $('#periode_publication_m').show();

    if (id_pub==0) {
        $('#msg_chargement').show("slow");
    } else {

        $.ajax({
            type: "POST",
            dataType: "json",
            url: lien_site+"charge_data_pubs/get_blog_info",
            data: {postID_pub:id_pub},
            success: function(data){
                var pub_data = data;

                pub_data.forEach(function(pub)
                {
                    $('#pub_id_m').val(pub['id']);
                    $('#titre_m').val(pub['titre']);
                    $('#contenu_m').text(pub['contenu']);
                    $('#compte_m').val(pub['user']);
                    $('#date_creation_m').val(pub['date_creation']);
                    $('#etat_blog_m').val(pub['etat']);
                    $('#date_pub_m').val(pub['date_pub']);
                    $('#periode_debut_m').val(pub['periode_pub_debut']);
                    $('#periode_fin_m').val(pub['periode_pub_fin']);

                    if (pub['date_pub']=="0000-00-00") {
                        $('#date_pub_m').val("");
                    }

                    if (pub['periode_pub_debut']=="0000-00-00") {
                        $('#periode_debut_m').val("");
                    }

                    if (pub['periode_pub_fin']=="0000-00-00") {
                        $('#periode_fin_m').val("");
                    }

                    if (pub['etat']=="Publier") {
                        $('#periode_publication_m').hide(500);

                        $("#periode_debut_m").val("9999-99-99");
                        $("#periode_fin_m").val("9999-99-99");

                        $('#date_publication_m').show(500);
                   } else if (pub['etat']=="Ne pas publier") {
                        $('#date_publication_m').hide(500);
                        $('#periode_publication_m').hide(500);

                        $("#date_pub_m").val("9999-99-99");
                        $("#periode_debut_m").val("9999-99-99");
                        $("#periode_fin_m").val("9999-99-99");

                   } else if (pub['etat']=="Publier sur une période") {
                        $('#date_publication_m').hide(500);

                        $("#date_pub_m").val("9999-99-99");

                        $('#periode_publication_m').show(500);
                   }

                });
                $('#msg_chargement').hide("hide");

            },
            error: function(data){
                $('#msg_chargement').show("slow");
            }

        });
    }
}

//Suppression la valeur de l'identifiant
function get_pub_id(id_pub, titre_pub) {

    $('#pub_id_s').val(id_pub);
    $('#pub_titre_supp').text(titre_pub);

}


$('#etat_blog').change(function () {

   var etat_blog = $(this).val();

   if (etat_blog=="Publier") {
        $('#periode_publication').hide(500);

        $("#periode_debut").val("9999-99-99");
        $("#periode_fin").val("9999-99-99");

        $("#date_pub").val("");
        $('#date_publication').show(500);
   } else if (etat_blog=="Ne pas publier") {
        $('#date_publication').hide(500);
        $('#periode_publication').hide(500);

        $("#date_pub").val("9999-99-99");
        $("#periode_debut").val("9999-99-99");
        $("#periode_fin").val("9999-99-99");

   } else if (etat_blog=="Publier sur une période") {
        $('#date_publication').hide(500);

        $("#date_pub").val("9999-99-99");

        $("#periode_debut").val("");
        $("#periode_fin").val("");
        $('#periode_publication').show(500);
   }

});

$('#etat_blog_m').change(function () {

   var etat_blog = $(this).val();

   if (etat_blog=="Publier") {
        $('#periode_publication_m').hide(500);

        $("#periode_debut_m").val("9999-99-99");
        $("#periode_fin_m").val("9999-99-99");

        $("#date_pub_m").val("");
        $('#date_publication_m').show(500);
   } else if (etat_blog=="Ne pas publier") {
        $('#date_publication_m').hide(500);
        $('#periode_publication_m').hide(500);

        $("#date_pub_m").val("9999-99-99");
        $("#periode_debut_m").val("9999-99-99");
        $("#periode_fin_m").val("9999-99-99");

   } else if (etat_blog=="Publier sur une période") {
        $('#date_publication_m').hide(500);

        $("#date_pub_m").val("9999-99-99");

        $("#periode_debut_m").val("");
        $("#periode_fin_m").val("");
        $('#periode_publication_m').show(500);
   }

});
