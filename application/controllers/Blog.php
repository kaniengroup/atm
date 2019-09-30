<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function index()
    {
      
        $nbre_article_total = 48;
        $nbre_article_par_page = 5;
        $nbre_page = 0;
        $nbre_article_derniere_page = 0;

        if ($nbre_article_total>$nbre_article_par_page) {
            $nbre_page = intval($nbre_article_total/$nbre_article_par_page);
            $reste_division = $nbre_article_total%$nbre_article_par_page;
            if ($reste_division!=0) {
                $nbre_page++;
                $nbre_article_derniere_page = $reste_division;
            }
        } else {
        $nbre_page = 1; 
        }
        $data = ['nbre_article_total' => $nbre_article_total,
                 'nbre_article_par_page' => $nbre_article_par_page,
                 'nbre_page' => $nbre_page,
                 'nbre_article_derniere_$page' => $nbre_article_derniere_page
                ];
        $data['page']='blog';
        $this->load->view('pages/main_layout',$data);
    }
}