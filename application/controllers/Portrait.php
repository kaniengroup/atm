<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Portrait extends CI_Controller
{
    public function index()
    {
        $elements = ['page'=>'portrait'];
        $this->load->view('pages/main_layout',$elements);
    }
}