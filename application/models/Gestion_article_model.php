<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gestion_article_model extends CI_Model
{

    public function add_article($data)
    {
        $titre = $data['titre'];
        $contenu = $data['contenu'];
        $etat = $data['etat'];
        $idcategorie = $data['idcategorie'];
        $date_pub = $data['date_pub'];
        $periode_pub_debut = $data['periode_pub_debut'];
        $periode_pub_fin = $data['periode_pub_fin'];
        $user = $data['user'];

        $datestring = "%Y-%m-%d";
        $time = time();
        $date_creation = mdate($datestring, $time);

        $lien_img = "";

        if (!is_int($idcategorie)) {
            $idcategorie = intval($idcategorie);
        }


        $titre = htmlspecialchars($titre);
        $contenu = htmlspecialchars($contenu);
        $etat = htmlspecialchars($etat);
        $user = htmlspecialchars($user);

        $date_pub = date("Y-m-d",strtotime($date_pub));
        $periode_pub_debut = date("Y-m-d",strtotime($periode_pub_debut));
        $periode_pub_fin = date("Y-m-d",strtotime($periode_pub_fin));

        if ($etat_article=="Publier") {
            $periode_pub_debut = "";
            $periode_pub_fin = "";
        } else if ($etat_article=="Ne pas publier") {
            $date_pub = "";
            $periode_pub_debut = "";
            $periode_pub_fin = "";
        } else if ($etat_article=="Publier sur une période") {
            $date_pub = "";
        }
        
        $reponse['reponse'] = "false";

        $query = 'insert into article(titre,contenu,date_creation,date_pub,periode_pub_debut,periode_pub_fin,lien_img,etat,user,idcategorie) values("'.$titre.'","'.$contenu.'","'.$date_creation.'","'.$date_pub.'","'.$periode_pub_debut.'","'.$periode_pub_fin.'","'.$lien_img.'","'.$etat.'","'.$user.'",'.$idcategorie.')';
        $req = $this->db->simple_query($query); 
        
        if ($req) {
            $reponse['reponse'] = "true";
        }
        
        return $reponse['reponse'];
    }


    public function update_article($data)
    {
        $pub_id = $data['pub_id'];
        $titre = $data['titre'];
        $contenu = $data['contenu'];
        $etat = $data['etat'];
        $idcategorie = $data['idcategorie'];
        $date_pub = $data['date_pub'];
        $periode_pub_debut = $data['periode_pub_debut'];
        $periode_pub_fin = $data['periode_pub_fin'];

        $lien_img = "";

        if (!is_int($pub_id)) {
            $pub_id = intval($pub_id);
        }

        if (!is_int($idcategorie)) {
            $idcategorie = intval($idcategorie);
        }

        $titre = htmlspecialchars($titre);
        $contenu = htmlspecialchars($contenu);
        $etat = htmlspecialchars($etat);

        $date_pub = date("Y-m-d",strtotime($date_pub));
        $periode_pub_debut = date("Y-m-d",strtotime($periode_pub_debut));
        $periode_pub_fin = date("Y-m-d",strtotime($periode_pub_fin));

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
            $query = 'update article set titre = "'.$titre.'", contenu = "'.$contenu.'", etat = "'.$etat.'", date_pub = "'.$date_pub.'", periode_pub_debut = "'.$periode_pub_debut.'", periode_pub_fin = "'.$periode_pub_fin.'", idcategorie = '.$idcategorie.' where id = '.$pub_id;
            $req = $this->db->simple_query($query); 
            
            if ($req) {
                $reponse['reponse'] = "true";
            }
        }
        
        return $reponse['reponse'];
    }

    public function delete_article($data)
    {
        $pub_id = $data['pub_id'];
    
        if (!is_int($pub_id)) {
            $pub_id = intval($pub_id);
        }
        
        $reponse['reponse'] = "false";

        if ($pub_id!=0) {
            // Delete user
            $query = 'delete from article where id = '.$pub_id;
            $req = $this->db->simple_query($query); 
            
            if ($req) {
                $reponse['reponse'] = "true";
            }
            // Delete user
        }

        return $reponse['reponse'];
    }

}