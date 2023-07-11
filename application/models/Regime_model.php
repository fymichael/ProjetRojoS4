<?php
class Regime_model extends CI_Model
{
    public function addRegime($nom_Regime, $id_objectif){
        $req = "insert into regime values (null, %d, '%s')";
        $req = sprintf($req, $id_objectif, $nom_Regime);
        $this->db->query($req);
    }
    public function addDetailsRegime($id_regime, $id_plats, $id_sports){
        $req = "insert into details_regime values (null, %d, %d, %d)";
        $req = sprintf($req, $id_regime, $id_plats, $id_sports);
        $this->db->query($req);
    }
    public function updateRegime($nom_Regime, $id_objectif, $id_Regime){
        $req = "update Regime set nom_regime = '%s', id_objectif = %d where id_regime = %d";
        $req = sprintf($req, $nom_Regime, $id_objectif, $id_Regime);
        $this->db->query($req);
    }
    public function getLastRegime(){
        $req = "select id_regime from regime order by id_regime desc limit 1";
        $result = $this->db->query($req);
        $idRegime = 0;
        foreach ($result->result_array() as $row) {
            $idRegime = $row['id'];
        }
        return $idRegime;
    }
    public function getAllRegime(){
        $req = "select * from Regime";
        $result = $this->db->query($req);
        $Regime = array();
        foreach ($result->result_array() as $row) {
            array_push($Regime,$row);
        }
        return $Regime;
    }
    public function getRegimeById($id_Regime){
        $req = "select * from regime where id_regime = %d";
        $req = sprintf($req, $id_Regime);
        $result = $this->db->query($req);
        $Regime = array();
        foreach ($result->result_array() as $row) {
            array_push($Regime,$row);
        }
        return $Regime;
    }
    public function deleteRegime($id_Regime){
        $req = "delete from regime where id_regime = %d";
        $req = sprintf($req, $id_Regime);
        $this->db->query($req);
    }
}
?>