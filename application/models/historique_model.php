<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Historique_model extends CI_Model
{
    public function addHistory($id_details){
        $req = "insert into historique values (%d, now())";
        $req = sprintf($req,$id_details);
        $this->db->query($req);
    }
}
?>