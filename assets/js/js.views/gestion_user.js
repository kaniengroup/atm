
var lien_site = 'http://localhost:80/atm/';


// Validation du formulaire
$('#form_add_user').validate({
    onKeyup : true,
    eachValidField : function() {

        $(this).closest('div').removeClass('error').addClass('success');
    },
    eachInvalidField : function() {

        $(this).closest('div').removeClass('success').addClass('error');
    },
    description : {
        nomComplet : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        },
        statut : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        },
        pwd_user : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        }
    }
});

// Validation du formulaire
$('#form_modif_user').validate({
    onKeyup : true,
    eachValidField : function() {

        $(this).closest('div').removeClass('error').addClass('success');
    },
    eachInvalidField : function() {

        $(this).closest('div').removeClass('success').addClass('error');
    },
    description : {
        statut_m : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        }
    }
});

//Récuperer la valeur de l'identifiant
function get_user_info(id_user=0) {

    if (id_user==0) {
        $('#msg_chargement').show("slow");
    } else {
        
        $.ajax({
            type: "POST",
            dataType: "json",
            url: lien_site+"charge_data_users/get_user_info",
            data: {postID_user:id_user},
            success: function(data){
                var user_data = data;
              
                user_data.forEach(function(user) 
                {
                    $('#login_i').val(user['login']);
                    $('#nomComplet_i').val(user['nomComplet']);
                    $('#statut_i').val(user['statut']);
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
function get_user_info2(id_user=0) {

    if (id_user==0) {
        $('#msg_chargement').show("slow");
    } else {
        
        $.ajax({
            type: "POST",
            dataType: "json",
            url: lien_site+"charge_data_users/get_user_info",
            data: {postID_user:id_user},
            success: function(data){
                var user_data = data;
              
                user_data.forEach(function(user) 
                {
                    $('#user_id_m').val(user['id']);
                    $('#login_m').val(user['login']);
                    $('#nomComplet_m').val(user['nomComplet']);
                    $('#statut_m').val(user['statut']);
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
function get_user_id(id_user, login_user) {
    
    $('#user_id_s').val(id_user);
    $('#user_login_supp').text(login_user);
               
}