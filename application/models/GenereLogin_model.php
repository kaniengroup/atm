<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class GenereLogin_model extends CI_Model
{

	public function get_login()
	{
		
		$query = $this->db->query("select * from genere_login where id = 1");
        $infos_code = $query->result_array();
        
        //ATM-0099
        $nombre1 = "";
        $nombre2 = "";
        foreach ($infos_code as $code) :
	        $nombre1 = $code["nombre1"];
	        $nombre2 = $code["nombre2"];
        endforeach;

        $nombre2 = intval($nombre2);
        $nombre1 = intval($nombre1);

        $data['reponse1'] = "true";
        $data['reponse2'] = "false";

        if ($nombre2>0) {
        	$nombre2--;
        } else {
        	$nombre2=99;

        	if ($nombre1<99) {
        		$nombre1++;

        	} else {
        		$data['reponse1'] = "false";
        	}
        }

        if ($nombre2<10) {
        	$nombre2="0".$nombre2;
        }

        if ($nombre1<10) {
        	$nombre1="0".$nombre1;
        }

        

        $data['login'] = "";

		if ($data['reponse1']=="true") {

            $data['login'] = "ATM".'-'.$nombre1.$nombre2;
			
			$datestring = "%Y-%m-%d";
		    $time = time();
		    $date_jour = mdate($datestring, $time);

		    $query = 'update genere_login set nombre1 = "'.$nombre1.'", nombre2 = "'.$nombre2.'", date_modif = "'.$date_jour.'" where id = 1';
            $req = $this->db->simple_query($query);

            if ($req) {
            	$data['reponse2'] = "true";
            }

		} 
		
		return $data;
		
	}

}