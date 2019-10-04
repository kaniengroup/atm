
var lien_site = 'http://localhost/atm/';


// Validation du formulaire
$('#form_create_internaute').validate({
    onKeyup : true,
    onChange : true,
    onBlur : true,
    eachValidField : function() {

        $(this).closest('div').removeClass('error').addClass('success');
    },
    eachInvalidField : function() {

        $(this).closest('div').removeClass('success').addClass('error');
    },
    conditional : {
        c_pwd : function() {
            return $(this).val() == $('#pwd').val();
        }
    },
    description : {
        pseudo : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        },
        email : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        },
        pwd : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        },
        c_pwd : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            valid : '<div class="alert alert-success">Valide</div>',
            conditional : '<div class="alert alert-danger">Les mots de passe ne sont pas conformes.</div>'
        }
    }
});


// Validaztion du formulaire
$('#form_mdp_reini_internaute').validate({
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
        email_reini : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        }
    }
});


// Validation du formulaire
$('#form_login_internaute').validate({
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
        cx_email : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        },
        cx_pwd : {
            required : '<div class="alert alert-danger">Veuillez remplir le champ SVP</div>',
            valid : '<div class="alert alert-success">Valide</div>'
        }
    }
});

