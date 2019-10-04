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

	public function get_list_internaute()
	{
		// Chargement du solde
		$query = $this->db->query("select * from internaute");
		$infos = $query->result_array();
		// Chargement du solde

		$query->free_result();

		return $infos;

	}

	public function get_list_actualite_a_jour()
	{
		$datestring = "%Y-%m-%d";
        $time = time();
        $date = mdate($datestring, $time);

		// Chargement du solde
		$query = $this->db->query("select article.id, article.titre, article.contenu, article.date_creation, article.date_pub, article.periode_pub_debut, article.periode_pub_fin, article.lien_img, article.etat, article.user, article.idcategorie, categorie.libelle as categorie from article join categorie where article.idcategorie=categorie.id and (etat='Publier' or (etat='Publier sur une période' and periode_pub_fin>='$date')) order by date_pub ASC");
		$infos['list_actualites'] = $query->result_array();
		$infos['nbre_actualite'] = $query->num_rows();
		// Chargement du solde

		$query->free_result();

		return $infos;

	}

	public function get_list_actualite()
	{

		// Chargement du solde
		$query = $this->db->query("select article.id, article.titre, article.contenu, article.date_creation, article.date_pub, article.periode_pub_debut, article.periode_pub_fin, article.lien_img, article.etat, article.user, article.idcategorie, categorie.libelle as categorie from article join categorie where article.idcategorie=categorie.id order by date_pub ASC");
		$infos['list_actualites'] = $query->result_array();
		$infos['nbre_actualite'] = $query->num_rows();
		// Chargement du solde

		$query->free_result();

		return $infos;

	}

	public function get_details_actualite($idactualite)
	{

		// Chargement du solde
		$query = $this->db->query("select article.id, article.titre, article.contenu, article.date_creation, article.date_pub, article.periode_pub_debut, article.periode_pub_fin, article.lien_img, article.etat, article.user, article.idcategorie, categorie.libelle as categorie from article join categorie where article.idcategorie=categorie.id and article.id=$idactualite");
		$infos = $query->result_array();
		// Chargement du solde

		$query->free_result();

		return $infos;

	}

	public function get_details_blog($idblog)
	{

		// Chargement du solde
		$query = $this->db->query("select blog.id, blog.titre, blog.contenu, blog.date_creation, blog.date_pub, blog.periode_pub_debut, blog.periode_pub_fin, blog.lien_img, blog.etat, blog.user, blog.nombre_vue, blog.idcategorie, categorie.libelle as categorie from blog join categorie where blog.idcategorie=categorie.id and blog.id=$idblog");
		$infos = $query->result_array();
		// Chargement du solde

		$query->free_result();

		return $infos;

	}

	public function get_list_blog()
	{
		// Chargement du solde
		$query = $this->db->query("select blog.id, blog.titre, blog.contenu, blog.date_creation, blog.date_pub, blog.periode_pub_debut, blog.periode_pub_fin, blog.lien_img, blog.etat, blog.user, blog.nombre_vue, blog.idcategorie, categorie.libelle as categorie from blog join categorie where blog.idcategorie=categorie.id order by date_pub ASC");
		$infos['list_blog'] = $query->result_array();
		$infos['nbre_blog'] = $query->num_rows();
		// Chargement du solde

		$query->free_result();

		return $infos;

	}

	public function get_list_blog_a_jour()
	{
		$datestring = "%Y-%m-%d";
        $time = time();
        $date = mdate($datestring, $time);

		// Chargement du solde
		$query = $this->db->query("select blog.id, blog.titre, blog.contenu, blog.date_creation, blog.date_pub, blog.periode_pub_debut, blog.periode_pub_fin, blog.lien_img, blog.etat, blog.user, blog.nombre_vue, blog.idcategorie, categorie.libelle as categorie from blog join categorie where blog.idcategorie=categorie.id and (etat='Publier' or (etat='Publier sur une période' and periode_pub_fin>='$date')) order by date_pub ASC");
		$infos['list_blog'] = $query->result_array();
		$infos['nbre_blog'] = $query->num_rows();
		// Chargement du solde

		$query->free_result();

		return $infos;

	}

	public function get_list_actualite_recents()
	{
		$datestring = "%Y-%m-%d";
        $time = time();
        $date = mdate($datestring, $time);

		// Chargement du solde
		$query = $this->db->query("select article.id, article.titre, article.contenu, article.date_creation, article.date_pub, article.periode_pub_debut, article.periode_pub_fin, article.lien_img, article.etat, article.user, article.idcategorie, categorie.libelle as categorie from article join categorie where article.idcategorie=categorie.id and (etat='Publier' or (etat='Publier sur une période' and periode_pub_fin>='$date')) order by date_pub ASC LIMIT 10");
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

	public function get_list_categorie()
	{
		// Chargement du solde
		$query = $this->db->query("select * from categorie");
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

	// Debur infos user
	public function get_internaute_info($id_user)
	{
		// Chargement du solde
		$query = $this->db->query("select * from internaute where id=$id_user");
		$infos_user = $query->result_array();
		// Chargement du solde

		$query->free_result();

		return $infos_user;

	}
	// Fin infos user

	// Debur infos pub
	public function get_article_info($id_pub)
	{
		// Chargement du solde
		$query = $this->db->query("select article.id, article.titre, article.contenu, article.date_creation, article.date_pub, article.periode_pub_debut, article.periode_pub_fin, article.lien_img, article.etat, article.user, article.idcategorie, categorie.libelle as categorie from article join categorie where article.idcategorie=categorie.id and article.id=$id_pub");
		$infos_pub = $query->result_array();
		// Chargement du solde

		$query->free_result();

		return $infos_pub;

	}
	// Fin infos pub

	// Debur infos pub
	public function get_blog_info($id_pub)
	{
		// Chargement du solde
		$query = $this->db->query("select blog.id, blog.titre, blog.contenu, blog.date_creation, blog.date_pub, blog.periode_pub_debut, blog.periode_pub_fin, blog.lien_img, blog.etat, blog.user, blog.nombre_vue, blog.idcategorie, categorie.libelle as categorie from blog join categorie where blog.idcategorie=categorie.id and blog.id=$id_pub");
		$infos_pub = $query->result_array();
		// Chargement du solde

		$query->free_result();

		return $infos_pub;

	}
	// Fin infos pub


	// Début Donnes stats
	public function get_data_stats()
	{
		// Chargement du solde
		$query = $this->db->query("select id from article");
		$infos['nbre_article'] = $query->num_rows();

		$query = $this->db->query("select id from article where etat='Publier' or etat='Publier sur une période'");
		$infos['nbre_article_ligne'] = $query->num_rows();

		$query = $this->db->query("select id from blog");
		$infos['nbre_blog'] = $query->num_rows();

		$query = $this->db->query("select id from blog where etat='Publier' or etat='Publier sur une période'");
		$infos['nbre_blog_ligne'] = $query->num_rows();

		$query = $this->db->query("select id from internaute");
		$infos['nbre_internaute'] = $query->num_rows();

		$query = $this->db->query("select id from user");
		$infos['nbre_user'] = $query->num_rows();
		// Chargement du solde

		$query->free_result();

		return $infos;

	}
	// Fin Donnes stats



}
