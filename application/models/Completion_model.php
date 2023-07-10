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
}
?>