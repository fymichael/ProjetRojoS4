<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Objectifs_model extends CI_Model
{
    public function getAllObjectifs(){
        $req = "select * from objectif";
        $query = $this->db->query($req);
        $objectifs = array();
        foreach ($query->result_array() as $row) {
            array_push($objectifs,$row);
        }
        return $objectifs;
    }
}
?>