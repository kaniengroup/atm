<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update_user_model extends CI_Model
{

	public function update_nomComplet($data)
	{
		$libelle = $data['libelle'];
        $user_id = $data['user_id'];

		if (!is_int($user_id)) {
            $user_id = intval($user_id);
        }

        $libelle = htmlspecialchars($libelle);

		// Mise à jour du nom profil
        $query = 'update user set nomComplet = "'.$libelle.'" where id = '.$user_id;
        $req = $this->db->simple_query($query); 

        $reponse['reponse'] = "false";

        if ($req) {
            $reponse['reponse'] = "true";
        }
        // Mise à jour du nom profil

        return $reponse['reponse'];
	}


	public function update_password($data)
	{
		$libelle_m = $data['libelle1'];
		$libelle_n = $data['libelle2'];
		$libelle_c = $data['libelle3'];
        $user_id = $data['user_id'];

		if (!is_int($user_id)) {
            $user_id = intval($user_id);
        }

        $libelle_m = md5($libelle_m);
        $libelle_n = md5($libelle_n);
        $libelle_c = md5($libelle_c);

        $query = $this->db->query("select password from user where id = $user_id and password = '$libelle_m'");

        $reponse['reponse'] = "false";

		if ($query->num_rows() > 0) {			
			if ($libelle_n == $libelle_c) {
				// Mise à jour du nom profil
	       		$query = 'update user set password = "'.$libelle_n.'" where id = '.$user_id;
	        	$req = $this->db->simple_query($query); 

		        if ($req) {
		            $reponse['reponse'] = "true";
		        }
		        // Mise à jour du nom profil
			}
		}

        return $reponse['reponse'];
	}


	
}