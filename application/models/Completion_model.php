<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Completion_model extends CI_Model
{

    public function getWeight($lastWeight, $weight){
        return $weight-$lastWeight;
    }
    public function addCompletion($id_user,$taille, $poids, $idObjectif, $objectif){
        $req = "insert into details_user values (null, %d, %d, %d, %d, %d)";
        $req = sprintf($req, $id_user, $taille, $poids, $idObjectif, $objectif);
        echo $req;
        $this->db->query($req);
    }
    public function getOneCompletion($id_user,$taille, $poids, $idObjectif, $objectif){
            $string="select * from details_user where id_utilisateur = %d and taille = %d and poids=%d and id_objectif = %d and objectif = %d";
            $string = sprintf($string,$id_user,$taille, $poids, $idObjectif, $objectif);
            $query = $this->db->query($string);
            $array=[];
            foreach ($query->result_array() as $row){
                $array[]=$row;
            }
            return $array; 
    }
    public function getById($id_user){
        $string="select * from details_user where id_utilisateur = %d";
        $string = sprintf($string,$id_user);
        $query = $this->db->query($string);
        $array=[];
        foreach ($query->result_array() as $row){
            $array[]=$row;
        }
        return $array; 
}

}
?>