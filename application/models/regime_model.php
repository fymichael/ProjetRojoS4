<?php

class Regime_model extends CI_Model {

    public function getOneRegime($id_objectif){
        $string="select * from regime where id_objectif = %d";
            $string = sprintf($string,$id_objectif);
            $query = $this->db->query($string);
            $array=[];
            foreach ($query->result_array() as $row){
                $array[]=$row;
            }
            return $array; 
    }
    public function getDetailsRegime($id_regime , $id_categorie){
        $string="select * from v_regimes_platS where id_regime = %d and  id_categorie_plats=%d";
        $string = sprintf($string,$id_regime,$id_categorie);
        $query = $this->db->query($string);
        $array=[];
        foreach ($query->result_array() as $row){
            $array[]=$row;
        }
        return $array;
    }
    public function getPriceRegime($regime){
        $data =[];
        $ind = 0 ;
        for($j = 0 ;$j < count($regime);$j++){
            $req = "SELECT * FROM v_regimes_platS where id_regime = %d";
            $string = sprintf($req,$regime[$i]['id_regime']);
            $query = $this->db->query($string);
            $array=[];
            $sum = 0 ; 
            foreach($query->result_array() as $row){
                $array[] = $row;
            }
            for($i = 0 ; $i < count($array);$i++){
                $sum = $sum+$array[$i]['prix_plats'];
            }
            $data[$ind] = $sum;
            $ind++;
        }
        return $data;
    }
    public function getDetails($regime){
        $req = "SELECT * FROM v_regimes_platS where id_regime = %d";
        $string = sprintf($req,$regime);
        $query = $this->db->query($string);
        $array=[]; 
        foreach($query->result_array() as $row){
            $array[] = $row;
        }
        return $array;
    }
    public function getPrice($regime){
        $req = "SELECT * FROM v_regimes_platS where id_regime = %d";
        $string = sprintf($req,$regime);
        $query = $this->db->query($string);
        $array=[];
        $sum = 0 ; 
        foreach($query->result_array() as $row){
            $array[] = $row;
        }
        for($i = 0 ; $i < count($array);$i++){
            $sum = $sum+$array[$i]['prix_plats'];
        }
        return $sum;
    }
    public function getOnePrice($regime,$duree){
        $vola = getPrice($regime)*$duree;
        return $vola;
    }
    public function insertRegimeUser($user,$id_regime){
        $req = "INSERT INTO regime_user values(null,%d,%d,now())";
        $req=sprintf($req,$id_regime,$user);
        $this->db->query($req);
    }



}