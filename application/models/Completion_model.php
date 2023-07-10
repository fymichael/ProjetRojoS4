<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Completion_model extends CI_Model
{
    public function addCompletion($taille, $poids, $idObjectif, $objectif){
        $req = "insert into completion values (null, %d, %d, %d, %d)";
        $req = sprintf($req, $taille, $poids, $idObjectif, $objectif);
        $this->db->query($req);
    }
}
?>