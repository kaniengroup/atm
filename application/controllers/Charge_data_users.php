<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Charge_data_users extends CI_Controller {


	/*************************** User *******************************/
	public function get_user_info()
	{
		$id_user = $this->input->post('postID_user');
		$this->load->model('chargement_data_model');
		$user_data = $this->chargement_data_model->get_user_info($id_user);

    	echo json_encode($user_data);
	}
	/*************************** User *******************************/

}

