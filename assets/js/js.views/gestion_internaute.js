
var lien_site = 'http://localhost/atm-v2/';



//Récuperer la valeur de l'identifiant
function get_internaute_info(id_internaute=0) {

    if (id_internaute==0) {
        $('#msg_chargement').show("slow");
    } else {
        
        $.ajax({
            type: "POST",
            dataType: "json",
            url: lien_site+"charge_data_users/get_internaute_info",
            data: {postID_internaute:id_internaute},
            success: function(data){
                var internaute_data = data;
              
                internaute_data.forEach(function(internaute) 
                {
                    $('#pseudo_i').val(internaute['pseudo']);
                    $('#email_i').val(internaute['email']);
                    $('#date_creation_i').val(internaute['date_creation']);
                    $('#statut_i').val(internaute['etat']);
                });
                $('#msg_chargement').hide("hide");
            
            },
            error: function(data){
                $('#msg_chargement').show("slow");             
            }
            
        });
    }
}

