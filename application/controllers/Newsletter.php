<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Newsletter extends CI_Controller {

    public function index(){
        $data['page']='abonnement_newsletter';
        $data['titre_page'] = "ATM - Abonnement Newsletter";        
        $this->load->view('pages/main_layout',$data);
    }

}
