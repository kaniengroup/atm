$('#newsletter').validate({
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
        newsletter: {
            required: "<div class='alert alert-danger'> Veuillez renseigner une adresse e-mail valide.</div>",
            valid: "<div class='alert alert-success'>valide</div>"
        }
        
    }
});