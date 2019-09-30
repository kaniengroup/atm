<?php 

defined('BASEPATH') OR exit('No direct script access allowed');


class Connexion extends CI_Controller
{

	/*public function __construct()
	{
		  Obligatoire
        parent::__construct();
		
	}*/

	public function index()
	{
		$this->login();
	}

	public function login()
	{

		if($this->session->userdata('userLogin') || $this->session->userdata('logged'))
	    {
	      redirect('accueil');
	    }
		
		$data['titre_page'] = 'ATM-Admin | Login';
		$data['message_infos'] = "";

		// Définition des règles de control du formulaire
		$this->form_validation->set_rules('userLogin', '"Identidiant"', 'trim|required');
    	$this->form_validation->set_rules('userPassword', '"Mot de passe"','trim|required|md5');

		if($this->form_validation->run() == true ) {
	        //  Le formulaire est valide
	        $userLogin = $this->input->post('userLogin');
			$userPassword = $this->input->post('userPassword');

	        if ($this->verif_acces($userLogin,$userPassword)) {

				$data = array('userLogin'=>$userLogin, 'logged'=>true);
		        $this->session->set_userdata($data);
		        
		        redirect('dashboard');
			        	
	        } else {
	        	$data['message_infos'] = "<div class='alert alert-danger role='alert'>Login ou mot de passe incorrect !!!</div>";
	        	$this->load->view('connexion/view_login',$data,false);
	        }	        
	        
	    } else if (isset($_POST['userLogin'])) {
	    	$data['message_infos'] = "<div class='alert alert-info' role='alert'>Veuillez renseigner correctement les champs.</div>";
	    	$this->load->view('connexion/view_login',$data,false);
	    } else {
	    	$this->load->view('connexion/view_login',$data,false);
	    }

	}

	private function verif_acces($userLogin='', $pwd='')
	{
		$this->load->model('connexion_model');
	    
	    if ($this->connexion_model->user_authentification($userLogin,$pwd)) {
	    	return true;
	    } else {
	    	return false;
	    }
	    
	}


}









?>