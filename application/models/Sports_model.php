<?php
class Sports_model extends CI_Model
{
    public function addSports($nom_sports, $prix_sports){
        $req = "insert into sports values (null, '%s', %d)";
        $req = sprintf($req, $nom_sports, $prix_sports);
        $this->db->query($req);
    }
    public function updateSports($nom_sports, $prix_sports, $id_sports){
        $req = "update sports set nom_sports = '%s', prix_sports = '%s' where id_sports = %d";
        $req = sprintf($req, $nom_sports, $prix_sports, $id_sports);
        echo $req;
        $this->db->query($req);
    }
    public function getAllSports(){
        $req = "select * from sports";
        $result = $this->db->query($req);
        $sports = array();
        foreach ($result->result_array() as $row) {
            array_push($sports,$row);
        }
        return $sports;
    }
    public function getSportsById($id_sports){
        $req = "select * from sports where id_sports = %d";
        $req = sprintf($req, $id_sports);
        $result = $this->db->query($req);
        $sports = array();
        foreach ($result->result_array() as $row) {
            array_push($sports,$row);
        }
        return $sports;
    }
    public function deleteSports($id_sports){
        $req = "delete from sports where id_sports = %d";
        $req = sprintf($req, $id_sports);
        $this->db->query($req);
    }
}
?>