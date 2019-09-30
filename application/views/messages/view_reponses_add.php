
<?php
if (isset($reponse) && $reponse=="true") {
?>  
    <div class="row justify-content-around">
        <div class="col-10">
            <div class="alert alert-success" role="alert">
                <strong>Ajout !</strong> Effectué avec succès.
            </div>
        </div>
    </div>
<?php
} else if (isset($reponse) && $reponse=="false") {
?>  
    <div class="row justify-content-around">
        <div class="col-10">
            <div class="alert alert-danger" role="alert">
                <strong>Ajout !</strong> Echoué.
            </div>
        </div>
    </div>
<?php
}
?>
