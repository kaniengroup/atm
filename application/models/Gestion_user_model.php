<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gestion_user_model extends CI_Model
{

    private function get_login()
    {
        $this->load->model('genereLogin_model');
        return $this->genereLogin_model->get_login();
    }

	public function add_user($data)
    {
        $nomComplet = $data['nomComplet'];
        $statut = $data['statut'];
        $password = "password1";

        $nomComplet = htmlspecialchars($nomComplet);
        $statut = htmlspecialchars($statut);
        $password = md5($password);

        $login_genere = $this->get_login();
        $reponse1 = $login_genere['reponse1'];
        $reponse2 = $login_genere['reponse2'];
        $login = $login_genere['login'];
        
        $reponse['reponse'] = "false";

        if ($reponse1=="true" && $reponse1="true" && $login!="") {
            // Insertion de user
            $query = 'insert into user(login,nomComplet,password,statut) values("'.$login.'","'.$nomComplet.'","'.$password.'","'.$statut.'")';
            $req = $this->db->simple_query($query); 
            
            if ($req) {
                $reponse['reponse'] = "true";
            }
            // Mise à jour du nom profil
        }

        return $reponse['reponse'];
    }


    public function update_user($data)
    {
        $user_id = $data['user_id'];
        $statut = $data['statut'];
    
        if (!is_int($user_id)) {
            $user_id = intval($user_id);
        }

        $statut = htmlspecialchars($statut);
        
        $reponse['reponse'] = "false";

        if ($user_id!=0) {
            // Delete user
            $query = 'update user set statut = "'.$statut.'" where id = '.$user_id;
            $req = $this->db->simple_query($query); 
            
            if ($req) {
                $reponse['reponse'] = "true";
            }
            // Delete user
        }

        return $reponse['reponse'];
    }


    public function delete_user($data)
    {
        $user_id = $data['user_id'];
    
        if (!is_int($user_id)) {
            $user_id = intval($user_id);
        }
        
        $reponse['reponse'] = "false";

        if ($user_id!=0) {
            // Delete user
            $query = 'delete from user where id = '.$user_id;
            $req = $this->db->simple_query($query); 
            
            if ($req) {
                $reponse['reponse'] = "true";
            }
            // Delete user
        }

        return $reponse['reponse'];
    }
	
}