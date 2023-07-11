<?php
class Regime_model extends CI_Model
{
    public function addRegime($nom_Regime, $id_objectif)
    {
        $req = "insert into regime values (null, %d, '%s')";
        $req = sprintf($req, $id_objectif, $nom_Regime);
        $this->db->query($req);
    }
    public function addDetailsRegime($id_regime, $id_plats, $id_sports)
    {
        $req = "insert into details_regime values (null, %d, %d, %d)";
        $req = sprintf($req, $id_regime, $id_plats, $id_sports);
        $this->db->query($req);
    }
    public function updateRegime($nom_Regime, $id_objectif, $id_Regime)
    {
        $req = "update Regime set nom_regime = '%s', id_objectif = %d where id_regime = %d";
        $req = sprintf($req, $nom_Regime, $id_objectif, $id_Regime);
        $this->db->query($req);
    }
    public function getLastRegime()
    {
        $req = "select id_regime from regime order by id_regime desc limit 1";
        $result = $this->db->query($req);
        $idRegime = 0;
        foreach ($result->result_array() as $row) {
            $idRegime = $row['id_regime'];
        }
        return $idRegime;
    }
    public function getAllRegime()
    {
        $req = "select * from Regime";
        $result = $this->db->query($req);
        $Regime = array();
        foreach ($result->result_array() as $row) {
            array_push($Regime, $row);
        }
        return $Regime;
    }
    public function getRegimeById($id_Regime)
    {
        $req = "select * from regime where id_regime = %d";
        $req = sprintf($req, $id_Regime);
        $result = $this->db->query($req);
        $Regime = array();
        foreach ($result->result_array() as $row) {
            array_push($Regime, $row);
        }
        return $Regime;
    }
    public function deleteRegime($id_Regime)
    {
        $req = "delete from regime where id_regime = %d";
        $req = sprintf($req, $id_Regime);
        $this->db->query($req);
    }
    public function getOneRegime($id_objectif)
    {
        $string = "select * from regime where id_objectif = %d";
        $string = sprintf($string, $id_objectif);
        echo $string;
        $query = $this->db->query($string);
        $array = [];
        foreach ($query->result_array() as $row) {
            $array[] = $row;
        }
        return $array;
    }
    public function getDetailsRegime($id_regime, $id_categorie)
    {
        $string = "select * from v_regimes_platS where id_regime = %d and  id_categorie_plats=%d";
        $string = sprintf($string, $id_regime, $id_categorie);
        echo $string;
        $query = $this->db->query($string);
        $array = [];
        foreach ($query->result_array() as $row) {
            $array[] = $row;
        }
        return $array;
    }
    public function getPriceRegime($regime)
    {
        $data = [];
        $ind = 0;
        for ($j = 0; $j < count($regime); $j++) {
            $req = "SELECT * FROM v_regimes_platS where id_regime = %d";
            $string = sprintf($req, $regime[$j]['id_regime']);
            echo $req;
            $query = $this->db->query($string);
            $array = [];
            $sum = 0;
            foreach ($query->result_array() as $row) {
                $array[] = $row;
            }
            for ($i = 0; $i < count($array); $i++) {
                $sum = $sum + $array[$i]['prix_plats'];
            }
            $data[$ind] = $sum;
            $ind++;
        }
        return $data;
    }
    public function getDetails($regime)
    {
        $req = "SELECT * FROM v_regimes_platS where id_regime = %d";
        $string = sprintf($req, $regime);
        $query = $this->db->query($string);
        $array = [];
        foreach ($query->result_array() as $row) {
            $array[] = $row;
        }
        return $array;
    }
    public function getPrice($regime)
    {
        $req = "SELECT * FROM v_regimes_platS where id_regime = %d";
        $string = sprintf($req, $regime);
        $query = $this->db->query($string);
        $array = [];
        $sum = 0;
        foreach ($query->result_array() as $row) {
            $array[] = $row;
        }
        for ($i = 0; $i < count($array); $i++) {
            $sum = $sum + $array[$i]['prix_plats'];
        }
        return $sum;
    }
    public function getOnePrice($regime, $duree)
    {
        $vola = $this->getPrice($regime) * $duree;
        return $vola;
    }
    public function insertRegimeUser($user, $id_regime)
    {
        $req = "INSERT INTO regime_user values(null,%d,%d,now())";
        $req = sprintf($req, $id_regime, $user);
        $this->db->query($req);
    }
    public function getRegimeUser($user)
    {
        $req = "SELECT * FROM regime_user WHERE id_utilisateur=%d order by date_regime desc limit 1 ";
        $string = sprintf($req, $user);
        // echo $string;
        $query = $this->db->query($string);
        $array = [];
        foreach ($query->result_array() as $row) {
            $array[] = $row;
        }
        return $array;
    }

}
?>