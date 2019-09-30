<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gestion_blog_model extends CI_Model
{

    public function add_blog($data)
    {
        $titre = $data['titre'];
        $contenu = $data['contenu'];
        $etat = $data['etat'];
        $date_pub = $data['date_pub'];
        $periode_pub_debut = $data['periode_pub_debut'];
        $periode_pub_fin = $data['periode_pub_fin'];
        $user = $data['user'];

        $datestring = "%Y-%m-%d";
        $time = time();
        $date_creation = mdate($datestring, $time);
        $lien_img = "";

        $titre = htmlspecialchars($titre);
        $contenu = htmlspecialchars($contenu);
        $etat = htmlspecialchars($etat);
        $user = htmlspecialchars($user);

        if ($etat_blog=="Publier") {
            $periode_pub_debut = "";
            $periode_pub_fin = "";
        } else if ($etat_blog=="Ne pas publier") {
            $date_pub = "";
            $periode_pub_debut = "";
            $periode_pub_fin = "";
        } else if ($etat_blog=="Publier sur une période") {
            $date_pub = "";
        }
        
        $reponse['reponse'] = "false";

        $query = 'insert into blog(titre,contenu,date_creation,date_pub,periode_pub_debut,periode_pub_fin,lien_img,etat,user) values("'.$titre.'","'.$contenu.'","'.$date_creation.'","'.$date_pub.'","'.$periode_pub_debut.'","'.$periode_pub_fin.'","'.$lien_img.'","'.$etat.'","'.$user.'")';
        $req = $this->db->simple_query($query); 
        
        if ($req) {
            $reponse['reponse'] = "true";
        }
        
        return $reponse['reponse'];
    }


    public function update_blog($data)
    {
        $pub_id = $data['pub_id'];
        $titre = $data['titre'];
        $contenu = $data['contenu'];
        $etat = $data['etat'];
        $date_pub = $data['date_pub'];
        $periode_pub_debut = $data['periode_pub_debut'];
        $periode_pub_fin = $data['periode_pub_fin'];

        $lien_img = "";

        if (!is_int($pub_id)) {
            $pub_id = intval($pub_id);
        }

        $titre = htmlspecialchars($titre);
        $contenu = htmlspecialchars($contenu);
        $etat = htmlspecialchars($etat);

        if ($etat=="Publier") {
            $periode_pub_debut = "";
            $periode_pub_fin = "";
        } else if ($etat=="Ne pas publier") {
            $date_pub = "";
            $periode_pub_debut = "";
            $periode_pub_fin = "";
        } else if ($etat=="Publier sur une période") {
            $date_pub = "";
        }
        
        $reponse['reponse'] = "false";

        if ($pub_id!=0) {
            $query = 'update blog set titre = "'.$titre.'", contenu = "'.$contenu.'", etat = "'.$etat.'", date_pub = "'.$date_pub.'", periode_pub_debut = "'.$periode_pub_debut.'", periode_pub_fin = "'.$periode_pub_fin.'" where id = '.$pub_id;
            $req = $this->db->simple_query($query); 
            
            if ($req) {
                $reponse['reponse'] = "true";
            }
        }
        
        return $reponse['reponse'];
    }

    public function delete_blog($data)
    {
        $pub_id = $data['pub_id'];
    
        if (!is_int($pub_id)) {
            $pub_id = intval($pub_id);
        }
        
        $reponse['reponse'] = "false";

        if ($pub_id!=0) {
            // Delete user
            $query = 'delete from blog where id = '.$pub_id;
            $req = $this->db->simple_query($query); 
            
            if ($req) {
                $reponse['reponse'] = "true";
            }
            // Delete user
        }

        return $reponse['reponse'];
    }

}