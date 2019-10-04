<div class="container">
    <div class="row">  
        <img class="img-fluid" src="<?php echo base_url('assets/img/sliders/slide1.jpg'); ?>" alt="First slide">           
    </div>
    <div class="container">
        &nbsp;
    </div>
    <div class="row bg-white">
        <div class="col-md-12 text-center">
            <h2 class="fb-color title_one text-white p-1">CONTACTS</h2>
        </div>
    </div>
    <section class="h-100 row bg-white">
        <header class="container h-100">
            <div class="d-flex align-items-center justify-content-center h-100">
                <div class="d-flex flex-column col-12">
                        <div class="">
                            <div class="col-md-8 offset-md-2  text-justify justify-content-center">
                                <div class="card border-primary p-3">
                                    <div class="card-body">
                                            <form id="contact_form">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="nom" class="">Nom</label>
                                                            <input type="text" class="form-control" id="nom" name="nom" data-required="true" data-describedby="nomHelp" data-description="nom" aria-describedby="nomHelp">
                                                            <small id="nomHelp" class="text-muted"></small>
                                                        </div>  
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="prenoms" class="">Prénoms</label>
                                                            <input type="text" class="form-control" id="prenoms" name="prenoms" data-required="true" data-describedby="prenomsHelp" data-description="prenoms" aria-describedby="prenomsHelp">
                                                            <small id="prenomsHelp" class="text-muted"></small>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="email" class="">Email</label>
                                                            <input type="email" class="form-control" id="email" name="email" data-required="true" data-describedby="emailHelp" data-description="email" aria-describedby="emailHelp">
                                                            <small id="emailHelp" class="text-muted"></small>
                                                        </div>  
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="objet" class="">Objet</label>
                                                            <input type="text" class="form-control" id="objet" name="objet" data-required="true" data-describedby="objetHelp" data-description="objet" aria-describedby="objetHelp">
                                                            <small id="objetHelp" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="message" class="">Message</label>
                                                            <textarea class="form-control" id="message" name="message" data-required="true" data-describedby="messageHelp" data-description="message" aria-describedby="messageHelp"  rows="3"></textarea>
                                                            <small id="messageHelp" class="text-muted"></small>
                                                        </div>
                                                    </div>
                                                    
                                            <button type="submit" id="envoyer" class="btn text-white fb-color">Envoyer</button>
                                            </form>
                                            </div>
                                    </div>
                                </div>   
                            </div>
                        </div>
                </div>
            </div>
        </header>
    </section>
</div>
