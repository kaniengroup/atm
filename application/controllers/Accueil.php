<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

    public function index(){
        $data = ['page'=>'accueil'];
        $data['titre_page'] = "ATM";
        $data['list_articles_recents'] = $this->get_list_actualite_recents();
        $this->load->view('pages/main_layout',$data);
    }

    private function get_list_actualite_recents()
	{
		$this->load->model('chargement_data_model');
	    return $this->chargement_data_model->get_list_actualite_recents();
    }

}
