<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Charge_data_pubs extends CI_Controller {


	/*************************** Pub *******************************/
	public function get_article_info()
	{
		$id_pub = $this->input->post('postID_pub');
		$this->load->model('chargement_data_model');
		$pub_data = $this->chargement_data_model->get_article_info($id_pub);

    	echo json_encode($pub_data);
	}
	/*************************** Pub *******************************/


	/*************************** Pub *******************************/
	public function get_blog_info()
	{
		$id_pub = $this->input->post('postID_pub');
		$this->load->model('chargement_data_model');
		$pub_data = $this->chargement_data_model->get_blog_info($id_pub);

    	echo json_encode($pub_data);
	}
	/*************************** Pub *******************************/

}
