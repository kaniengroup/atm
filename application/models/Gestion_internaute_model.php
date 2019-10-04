<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gestion_internaute_model extends CI_Model
{

	public function ajouter_internaute($data)
    {

        $pseudo = $data['pseudo'];
        $email = $data['email'];
        $mdp = $data['pwd'];
        $idblog = $data['idblog'];
        $statut = "en attente";

        $pseudo = htmlspecialchars($pseudo);
        $email = htmlspecialchars($email);
        $mdp = md5($mdp);

        if (!is_int($idblog)) {
            $idblog = intval($idblog);
        }

        $datestring = "%Y-%m-%d";
        $time = time();
        $date_creation = mdate($datestring, $time);
        
        $reponse['reponse'] = "false";

        if (!$this->internaute_existe($email)) {
           // Insertion d'internaute
            $query = 'insert into internaute(pseudo,email,mdp,date_creation,statut) values("'.$pseudo.'","'.$email.'","'.$mdp.'","'.$date_creation.'","'.$statut.'")';
            $req = $this->db->simple_query($query); 
            
            if ($req) {
                $reponse['reponse'] = "true";
            } else {
                $reponse['reponse'] = "false";
            }
        } else {
            $reponse['reponse'] = "false-0";
        }
    
        return $reponse['reponse'];
    }


    public function login_internaute($data)
    {

        $email = $data['email'];
        $pwd = $data['pwd'];

        $email = htmlspecialchars($email);
        $pwd = md5($pwd);

        $query = $this->db->query("select * from internaute where email='$email' and mdp='$pwd'");
        $infos_user = $query->result_array();

        $reponse['pseudo'] = "";
        $reponse['email'] = "";
        $reponse['reponse'] = "false";

        if ($query->num_rows()>0) {
            $reponse['reponse'] = "true";
            foreach ($infos_user as $rep_user) :
                $reponse['pseudo'] = $rep_user['pseudo'];
                $reponse['email'] = $rep_user['email'];
            endforeach;
        }
   
        $query->free_result();

        return $reponse;
    }


    public function internaute_existe($email){

        $query = $this->db->query("select email from internaute where email='$email'");

        if ($query->num_rows()>0) {
            return true;
        } else {
            return false;
        }
    }
	
}