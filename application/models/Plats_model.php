<?php
class Plats_model extends CI_Model
{
    public function addPlats($nom_plats, $prix_plats, $id_categorie_plats){
        $req = "insert into plats values (null, %d,'%s', %d)";
        $req = sprintf($req, $id_categorie_plats, $nom_plats, $prix_plats);
        $this->db->query($req);
    }
    public function updatePlats($nom_plats, $prix_plats, $id_plats, $id_categorie_plats){
        $req = "update plats set id_categorie_plats = %d, nom_plats = '%s', prix_plats = '%s' where id_plats = %d";
        $req = sprintf($req, $id_categorie_plats, $nom_plats, $prix_plats, $id_plats);
        $this->db->query($req);
    }
    public function getAllPlats(){
        $req = "select * from plats";
        $result = $this->db->query($req);
        $plats = array();
        foreach ($result->result_array() as $row) {
            array_push($plats,$row);
        }
        return $plats;
    }
    public function getPlatsById($id_plats){
        $req = "select * from plats where id_plats = %d";
        $req = sprintf($req, $id_plats);
        $result = $this->db->query($req);
        $plats = array();
        foreach ($result->result_array() as $row) {
            array_push($plats,$row);
        }
        return $plats;
    }
    public function deletePlats($id_plats){
        $req = "delete from plats where id_plats = %d";
        $req = sprintf($req, $id_plats);
        $this->db->query($req);
    }
}
?>