<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Actualites extends CI_Controller
{
    public function index()
    {
 
        $rep_actualite = $this->get_list_actualite();     
        $data['list_article'] = $rep_actualite['list_actualites'];
        $data['nbre_article_total'] = $rep_actualite['nbre_actualite'];
        
        $nbre_article_par_page = 5;
        $nbre_page = 0;
        $nbre_article_derniere_page = 0;

        if ($data['nbre_article_total']>$nbre_article_par_page) {
            $nbre_page = intval($data['nbre_article_total']/$nbre_article_par_page);
            $reste_division = $data['nbre_article_total']%$nbre_article_par_page;
            if ($reste_division!=0) {
                $nbre_page++;
                $nbre_article_derniere_page = $reste_division;
            }
        } else {
            $nbre_page = 1; 
        }

        $data['nbre_article_par_page'] = $nbre_article_par_page;
        $data['nbre_page'] = $nbre_page;
        $data['nbre_article_derniere_page'] = $nbre_article_derniere_page;


        $data['titre_page'] = "ATM";
        $data['page']='actualites';
        $this->load->view('pages/main_layout',$data);
    }

    public function view($idactualite=0)
    {
        if (!isset($idactualite) || intval($idactualite)==0) {
            redirect('actualites');
        } else {
            $idactualite = intval($idactualite);
            // Récupération des détails de l'article
            $data['details_actualite'] = $this->get_details_actualite($idactualite);
        }

        $data['titre_page'] = "ATM";
        $data['page']='details_actualite';
        $this->load->view('pages/main_layout',$data);
    }
    
    // Fonctions liste publication
	private function get_list_actualite()
	{
		$this->load->model('chargement_data_model');
	    return $this->chargement_data_model->get_list_actualite_a_jour();
    }

    // Récupération des détails d'un article
    private function get_details_actualite($idactualite)
    {
        $this->load->model('chargement_data_model');
        return $this->chargement_data_model->get_details_actualite($idactualite);
    }
    

}