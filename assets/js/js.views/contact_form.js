$('#contact_form').validate({
    onKeyup: true,
    onChange: true,
    onBlur: true,
    eachValideField: function(){
        $(this).closest('div').removeClass('error').addClass('success');
    },
    eachInvalidField: function(){
        $(this).closest('div').removeClass('sucess').addClass('error');
    },
    description: {
        nom: {
            required: "<div class='alert alert-danger'> Veuillez renseinger votre nom.</div>",
            valid: "<div class='alert alert-success'>valide</div>"
        },
        prenoms: {
            required: "<div class='alert alert-danger'> Veuillez renseinger votre prénoms.</div>",
            valid: "<div class='alert alert-success'>valide</div>"
        },
        email: {
            required: "<div class='alert alert-danger'> Veuillez renseinger votre email.</div>",
            valid: "<div class='alert alert-success'>valide</div>",
            email: true
        },
        objet: {
            required: "<div class='alert alert-danger'> Veuillez renseinger l'objet de votre message.</div>",
            valid: "<div class='alert alert-success'>valide</div>"
        },
        message: {
            required: "<div class='alert alert-danger'> Veuillez renseinger votre message.</div>",
            valid: "<div class='alert alert-success'>valide</div>"
        }
    }
});