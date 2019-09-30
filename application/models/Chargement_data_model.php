<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Chargement_data_model extends CI_Model
{

	public function get_data_user($userLogin)
	{
		// Chargement du solde
		$query = $this->db->query("select * from user where login ='$userLogin'");
		$infos_user = $query->result_array();
		// Chargement du solde

		$query->free_result();

		return $infos_user;

	}

	public function get_list_user()
	{
		// Chargement du solde
		$query = $this->db->query("select * from user");
		$infos = $query->result_array();
		// Chargement du solde

		$query->free_result();

		return $infos;

	}

	public function get_list_actualite()
	{
		// Chargement du solde
		$query = $this->db->query("select * from article order by date_pub ASC");
		$infos['list_actualites'] = $query->result_array();
		$infos['nbre_actualite'] = $query->num_rows();
		// Chargement du solde

		$query->free_result();

		return $infos;

	}

	public function get_list_actualite_recents()
	{

		// Chargement du solde
		$query = $this->db->query("select * from article  order by date_pub ASC LIMIT 5");
		$infos = $query->result_array();
		// Chargement du solde

		$query->free_result();

		return $infos;

	}

	public function get_list_statut()
	{
		// Chargement du solde
		$query = $this->db->query("select * from statut");
		$infos = $query->result_array();
		// Chargement du solde

		$query->free_result();

		return $infos;

	}

	public function get_list_etat()
	{
		// Chargement du solde
		$query = $this->db->query("select * from etat");
		$infos = $query->result_array();
		// Chargement du solde

		$query->free_result();

		return $infos;

	}

	// Debur infos user
	public function get_user_info($id_user)
	{
		// Chargement du solde
		$query = $this->db->query("select * from user where id=$id_user");
		$infos_user = $query->result_array();
		// Chargement du solde

		$query->free_result();

		return $infos_user;

	}
	// Fin infos user

	// Debur infos pub
	public function get_pub_info($id_pub)
	{
		// Chargement du solde
		$query = $this->db->query("select * from article where id=$id_pub");
		$infos_pub = $query->result_array();
		// Chargement du solde

		$query->free_result();

		return $infos_pub;

	}
	// Fin infos pub

	
	
}