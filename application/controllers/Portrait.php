<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Portrait extends CI_Controller
{
    public function index()
    {
    	$data['titre_page'] = "ATM";
        $elements['page'] = "portrait";
        $this->load->view('pages/main_layout',$elements);
    }
}