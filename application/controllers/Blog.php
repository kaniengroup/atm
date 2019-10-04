<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function index()
    {
        
        $rep_blog = $this->get_list_blog();     
        $data['list_article'] = $rep_blog['list_blog'];
        $data['nbre_article_total'] = $rep_blog['nbre_blog'];

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
        $data['page']='blog';
        $this->load->view('pages/main_layout',$data);
    }

    public function view($idblog=0)
    {

        if (!isset($idblog) || intval($idblog)==0) {
            redirect('blog');
        } else {
            $idblog = intval($idblog);
            // Récupération des détails de l'article
            $data['details_blog'] = $this->get_details_blog($idblog);
        }

        if ($this->input->post('btn_login')) {

            $data1 = array(
                'email' => $this->input->post('cx_email'),
                'pwd'=>$this->input->post('cx_pwd')
            );

            $result = $this->login_internaute($data1);

            $reponse = $result['reponse'];
            $pseudo = $result['pseudo'];
            $email = $result['email'];

            if ($reponse=="true") {
                $data = array('userPseudo'=>$pseudo, 'userEmail'=>$email, 'logged'=>true);
                $this->session->set_userdata($data);

                redirect("blog/view/$idblog");
            } else {

                redirect("blog/login/$idblog?req=$reponse");
            }

        }

        $data['titre_page'] = "ATM";
        $data['page']='details_blog';
        $this->load->view('pages/main_layout',$data);
    }

    public function create($idblog=0)
    {
        if (!isset($idblog) || intval($idblog)==0) {
            redirect('blog');
        } else {
            $data['idblog'] = intval($idblog);
        }

        if ($this->input->post('envoyer')) {
            $data1 = array(
                'pseudo' => $this->input->post('pseudo'),
                'email'=>$this->input->post('email'),
                'pwd'=>$this->input->post('pwd'),
                'idblog'=>$this->input->post('idblog')
            );
            $result = $this->ajouter_internaute($data1);
            redirect("blog/create/$idblog?req=".$result);
        }

        if ($this->input->get('req')) {
            $data['reponse'] = $this->input->get('req');
        }

        $data['titre_page'] = "ATM";
        $data['page']='inscription_atm';
        $data['js_page']='inscription_internaute';
        $this->load->view('pages/main_layout',$data);
    }

    public function login($idblog=0)
    {
        if (!isset($idblog) || intval($idblog)==0) {
            redirect('blog');
        } else {
            $data['idblog'] = intval($idblog);
        }

        if ($this->input->get('req')) {
            $data['reponse'] = $this->input->get('req');
        }

        $data['titre_page'] = "ATM";
        $data['page']='login_atm';
        $data['js_page']='inscription_internaute';
        $this->load->view('pages/main_layout',$data);
    }

    // Fonctions liste publication
    private function get_list_blog()
    {
        $this->load->model('chargement_data_model');
        return $this->chargement_data_model->get_list_blog_a_jour();
    }

    // Récupération des détails d'un blog
    private function get_details_blog($idblog)
    {
        $this->load->model('chargement_data_model');
        return $this->chargement_data_model->get_details_blog($idblog);
    }

    // Début Gestion des annonces
    private function ajouter_internaute($data){
        $this->load->model('gestion_internaute_model');
        return $this->gestion_internaute_model->ajouter_internaute($data);
    }

     // Début Gestion des annonces
    private function login_internaute($data){
        $this->load->model('gestion_internaute_model');
        return $this->gestion_internaute_model->login_internaute($data);
    }


    // Fonction de deconnexion
    public function deconnexion()
    {
        $this->session->unset_userdata('userEmail');
        $this->session->unset_userdata('userPseudo');
        $this->session->unset_userdata('logged');
        $this->session->sess_destroy();
        redirect(site_url('accueil'));
    }
}