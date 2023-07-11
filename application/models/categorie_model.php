<?php

class Categorie_model extends CI_Model {

    public function getAllCategorie(){
        $string="select * from categorie_plats";
            $query = $this->db->query($string);
            $array=[];
            foreach ($query->result_array() as $row){
                $array[]=$row;
            }
            return $array; 
    }

}