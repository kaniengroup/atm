<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		//  Obligatoire
        parent::__construct();

	}

	private function date_jour()
	{
        $datestring = "%Y-%m-%d";
        $time = time();
        return mdate($datestring, $time);
	}


	public function index()
	{

		$this->si_loguer();

		$data['titre_page'] = '';
		$data['titre'] = "Tableau de bord";
		$data['page'] = "pages/view_index";

		$datestring = '%hH:%i';
		$time = time();
		$data['date_jour'] = mdate($datestring, $time);

		$this->load->model('chargement_data_model');
		$infos_user = $this->get_data_user();

		$data['login_user'] = "";
		$data['nomComplet'] = "";

	    foreach ($infos_user as $rep_user) :
	        $data['login_user'] = $rep_user['login'];
	        $data['nomComplet'] = $rep_user['nomComplet'];
	    endforeach;

    	$this->load->view('layouts/view_main',$data,false);
	}

	public function profil_user($update_user='')
	{

		$this->si_loguer();

		$data['reponse'] = "";

	    if ($update_user!="") {
	    	$this->load->model('update_user_model');
	    	switch ($update_user) {
	    		case 'nomComplet':
	    		{
	    			$data1 = array(
					'libelle' => $this->input->post('nomComplet_m'),
					'user_id'=>$this->input->post('user_id')
					);
					redirect('dashboard/profil_user?req='.$this->update_nomComplet($data1));
	    		}
	    		break;
	    		case 'password':
	    		{
	    			$data1 = array(
					'libelle1' => $this->input->post('user_password_mA'),
					'libelle2' => $this->input->post('user_password_mN'),
					'libelle3' => $this->input->post('user_password_mNC'),
					'user_id'=>$this->input->post('user_id')
					);
					redirect('dashboard/profil_user?req='.$this->update_password($data1));
	    		}
	    		break;

	    		default:
	    			# code...
	    			break;
	    	}

	    }

	    if ($this->input->get('req')) {
	    	$data['reponse'] = $this->input->get('req');
	    }

		$data['titre_page'] = 'ATM';
		$data['titre'] = "Profil User";
		$data['page'] = "pages/view_profil_user";
		$data['js_page'] = "profil_user";

		$this->load->model('chargement_data_model');
		$infos_user = $this->get_data_user();

		$data['login_user'] = "";
		$data['nomComplet'] = "";

	    foreach ($infos_user as $rep_user) :
	        $data['user_id'] = $rep_user['id'];
	        $data['login_user'] = $rep_user['login'];
	        $data['nomComplet'] = $rep_user['nomComplet'];
	    endforeach;

    	$this->load->view('layouts/view_main',$data,false);
	}

	private function update_nomComplet($data)
	{
	    return $this->update_user_model->update_nomComplet($data);
	}

	private function update_password($data)
	{
	    return $this->update_user_model->update_password($data);
	}


	public function gestion_article($action_pub="")
	{

		$this->si_loguer();

		$data['titre_page'] = 'ATM';
		$data['titre'] = "Gestion d'article";
		$data['page'] = "pages/view_gestion_article";
		$data['js_page'] = "gestion_article";

		$data['reponse'] = "";

		if ($action_pub!="") {
	    	$this->load->model('gestion_article_model');
	    	switch ($action_pub) {
	    		case 'add':
	    		{
	    			$data1 = array(
					'titre' => $this->input->post('titre'),
					'contenu' => $this->input->post('contenu'),
					'etat' => $this->input->post('etat_article'),
					'date_pub' => $this->input->post('date_pub'),
					'periode_pub_debut' => $this->input->post('periode_debut'),
					'periode_pub_fin' => $this->input->post('periode_fin'),
					'user' => $this->session->userdata('userLogin')
					);
					redirect('dashboard/gestion_article?req='.$this->add_article($data1));
	    		}
	    		break;
	    		case 'delete':
	    		{
	    			$data1 = array(
					'pub_id' => $this->input->post('pub_id_s')
					);
					redirect('dashboard/gestion_article?req='.$this->delete_article($data1));
	    		}
	    		break;
	    		case 'update':
	    		{
	    			$data1 = array(
					'pub_id' => $this->input->post('pub_id_m'),
					'titre' => $this->input->post('titre_m'),
					'contenu' => $this->input->post('contenu_m'),
					'etat' => $this->input->post('etat_article_m'),
					'date_pub' => $this->input->post('date_pub_m'),
					'periode_pub_debut' => $this->input->post('periode_debut_m'),
					'periode_pub_fin' => $this->input->post('periode_fin_m')
					);
					redirect('dashboard/gestion_article?req='.$this->update_article($data1));
	    		}
	    		break;

	    		default:
	    			# code...
	    			break;
	    	}
	    }

	   	if ($this->input->get('req')) {
	    	$data['reponse'] = $this->input->get('req');
	    }

		$this->load->model('chargement_data_model');
		$infos_user = $this->get_data_user();
		$data['list_etat'] = $this->get_list_etat();
		$data_actualite = $this->get_list_article();
		$data['list_article'] = $data_actualite['list_actualites'];
		$data['date_jour'] = $this->date_jour();

		$data['login_user'] = "";
		$data['nomComplet'] = "";

	    foreach ($infos_user as $rep_user) :
	        $data['login_user'] = $rep_user['login'];
	        $data['nomComplet'] = $rep_user['nomComplet'];
	    endforeach;

    	$this->load->view('layouts/view_main',$data,false);
	}


	public function gestion_blog($action_pub="")
	{

		$this->si_loguer();

		$data['titre_page'] = 'ATM';
		$data['titre'] = "Gestion de blog";
		$data['page'] = "pages/view_gestion_blog";
		$data['js_page'] = "gestion_blog";

		$data['reponse'] = "";

		if ($action_pub!="") {
	    	$this->load->model('gestion_blog_model');
	    	switch ($action_pub) {
	    		case 'add':
	    		{
	    			$data1 = array(
					'titre' => $this->input->post('titre'),
					'contenu' => $this->input->post('contenu'),
					'etat' => $this->input->post('etat_blog'),
					'date_pub' => $this->input->post('date_pub'),
					'periode_pub_debut' => $this->input->post('periode_debut'),
					'periode_pub_fin' => $this->input->post('periode_fin'),
					'user' => $this->session->userdata('userLogin')
					);
					redirect('dashboard/gestion_blog?req='.$this->add_blog($data1));
	    		}
	    		break;
	    		case 'delete':
	    		{
	    			$data1 = array(
					'pub_id' => $this->input->post('pub_id_s')
					);
					redirect('dashboard/gestion_blog?req='.$this->delete_blog($data1));
	    		}
	    		break;
	    		case 'update':
	    		{
	    			$data1 = array(
					'pub_id' => $this->input->post('pub_id_m'),
					'titre' => $this->input->post('titre_m'),
					'contenu' => $this->input->post('contenu_m'),
					'etat' => $this->input->post('etat_blog_m'),
					'date_pub' => $this->input->post('date_pub_m'),
					'periode_pub_debut' => $this->input->post('periode_debut_m'),
					'periode_pub_fin' => $this->input->post('periode_fin_m')
					);
					redirect('dashboard/gestion_blog?req='.$this->update_blog($data1));
	    		}
	    		break;

	    		default:
	    			# code...
	    			break;
	    	}
	    }

	   	if ($this->input->get('req')) {
	    	$data['reponse'] = $this->input->get('req');
	    }

		$this->load->model('chargement_data_model');
		$infos_user = $this->get_data_user();
		$data['list_etat'] = $this->get_list_etat();
		$data_blog = $this->get_list_blog();
		$data['list_blog'] = $data_blog['list_blog'];
		$data['date_jour'] = $this->date_jour();

		$data['login_user'] = "";
		$data['nomComplet'] = "";

	    foreach ($infos_user as $rep_user) :
	        $data['login_user'] = $rep_user['login'];
	        $data['nomComplet'] = $rep_user['nomComplet'];
	    endforeach;

    	$this->load->view('layouts/view_main',$data,false);
	}


	public function gestion_user($action_user="")
	{

		$this->si_loguer();

		$data['titre_page'] = 'ATM';
		$data['titre'] = "Gestion user";
		$data['page'] = "pages/view_gestion_user";
		$data['js_page'] = "gestion_user";

		$data['reponse'] = "";

		if ($action_user!="") {
	    	$this->load->model('gestion_user_model');
	    	switch ($action_user) {
	    		case 'add':
	    		{
	    			$data1 = array(
					'nomComplet' => $this->input->post('nomComplet'),
					'statut' => $this->input->post('statut')
					);
					redirect('dashboard/gestion_user?req='.$this->add_user($data1));
	    		}
	    		break;
	    		case 'delete':
	    		{
	    			$data1 = array(
					'user_id' => $this->input->post('user_id_s')
					);
					redirect('dashboard/gestion_user?req='.$this->delete_user($data1));
	    		}
	    		break;
	    		case 'update':
	    		{
	    			$data1 = array(
					'statut' => $this->input->post('statut_m'),
					'user_id' => $this->input->post('user_id_m')
					);
					redirect('dashboard/gestion_user?req='.$this->update_user($data1));
	    		}
	    		break;

	    		default:
	    			# code...
	    			break;
	    	}
	    }

	   	if ($this->input->get('req')) {
	    	$data['reponse'] = $this->input->get('req');
	    }

		$this->load->model('chargement_data_model');
		$infos_user = $this->get_data_user();
		$data['list_statut'] = $this->get_list_statut();
		$data['list_user'] = $this->get_list_user();

		$data['login_user'] = "";
		$data['nomComplet'] = "";

	    foreach ($infos_user as $rep_user) :
	        $data['login_user'] = $rep_user['login'];
	        $data['nomComplet'] = $rep_user['nomComplet'];
	    endforeach;

    	$this->load->view('layouts/view_main',$data,false);
	}

	// Fonctions ajouter article
	private function add_article($data)
	{
	    return $this->gestion_article_model->add_article($data);
	}

	// Fonctions update article
	private function update_article($data)
	{
	    return $this->gestion_article_model->update_article($data);
	}

	// Fonctions supprimer article
	private function delete_article($data)
	{
	    return $this->gestion_article_model->delete_article($data);
	}

	// Fonctions ajouter article
	private function add_blog($data)
	{
	    return $this->gestion_blog_model->add_blog($data);
	}

	// Fonctions update article
	private function update_blog($data)
	{
	    return $this->gestion_blog_model->update_blog($data);
	}

	// Fonctions supprimer article
	private function delete_blog($data)
	{
	    return $this->gestion_blog_model->delete_blog($data);
	}

	// Fonctions ajouter user
	private function add_user($data)
	{
	    return $this->gestion_user_model->add_user($data);
	}

	// Fonctions supprimer user
	private function delete_user($data)
	{
	    return $this->gestion_user_model->delete_user($data);
	}

	// Fonctions supprimer user
	private function update_user($data)
	{
	    return $this->gestion_user_model->update_user($data);
	}

	// Fonctions liste user
	private function get_list_user()
	{
	    return $this->chargement_data_model->get_list_user();
	}

	// Fonctions liste article
	private function get_list_article()
	{
	    return $this->chargement_data_model->get_list_actualite();
	}

	// Fonctions liste blog
	private function get_list_blog()
	{
	    return $this->chargement_data_model->get_list_blog();
	}

	// Fonctions liste user
	private function get_list_statut()
	{
	    return $this->chargement_data_model->get_list_statut();
	}

	// Fonctions liste etat
	private function get_list_etat()
	{
	    return $this->chargement_data_model->get_list_etat();
	}
	/************************* user add cea *******************************/



	/************************* Données communes *******************************/
	// Fonction get data user en cours
	private function get_data_user()
	{
	    return $this->chargement_data_model->get_data_user($this->session->userdata('userLogin'));
	}

	// Fonction verification de logue
	private function si_loguer()
	{
		$this->load->model('connexion_model');
	    if($this->session->userdata('userLogin') || $this->session->userdata('logged'))
	    {
	      	if (!$this->connexion_model->user_exist($this->session->userdata('userLogin'))) {
	      		$this->deconnexion();
	      	}
	    } else {
	      	$this->deconnexion();
	    }
	}

	// Fonction de deconnexion
	public function deconnexion()
	{
		$this->session->unset_userdata('userLogin');
	    $this->session->unset_userdata('logged');
	    $this->session->sess_destroy();
	    redirect(site_url('connexion'));
	}





}
