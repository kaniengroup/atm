<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Contacts extends CI_Controller
{
    public function index()
    {

    	$data['titre_page'] = "ATM";
    	$data['js_page'] = "contact_form";
        $data['page']='contacts';
        $this->load->view('pages/main_layout',$data);
    }

    
}