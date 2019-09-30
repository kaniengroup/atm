<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Connexion_model extends CI_Model
{

	public function user_authentification($login_user,$password)
	{

		$query = $this->db->query("select login from user where login ='$login_user' and password ='$password'");

		if ($query->num_rows() > 0) {			
			return true;
		} else {
		 	return false;
		}
		
	}

	public function user_exist($login_user)
	{

		$query = $this->db->query("select login from user where login ='$login_user'");

		if ($query->num_rows() > 0) {			
			return true;
		} else {
		 	return false;
		}
		
	}

}