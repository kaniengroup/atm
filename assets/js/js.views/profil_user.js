
$('#modal_nomComplet_f').validate({
    onKeyup : true,
    eachValidField : function() {

        $(this).closest('div').removeClass('error').addClass('success');
    },
    eachInvalidField : function() {

        $(this).closest('div').removeClass('success').addClass('error');
    },
    description : {
        nomComplet_m : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        }
    }
});


$('#modal_password_f').validate({
    onKeyup : true,
    eachValidField : function() {

        $(this).closest('div').removeClass('error').addClass('success');
    },
    eachInvalidField : function() {

        $(this).closest('div').removeClass('success').addClass('error');
    },
    conditional : {
        user_password_mNC : function() {
            return $(this).val() == $('#user_password_mN').val();
        }
    },
    description : {
        user_password_mA : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        },
        user_password_mN : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        },
        user_password_mNC : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            valid : '<div class="alert alert-success">Valide</div>',
            conditional : '<div class="alert alert-danger">Les mots de passe ne sont pas conformes.</div>'
        }
    }
});


//Récuperer la valeur du login
function get_nomComplet() {
    $('#nomComplet_m').val($('#nomComplet').val());
}


$(function (){

    //Chargement de la valeur au click du bouton
    $('#btn_nomComplet').click(function () {
        get_nomComplet();
    });


});









