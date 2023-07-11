<?php

class Payement extends CI_Model {

    public function getPayement($id_regime_user){
        $string="select * from payement id_regime_user=%d";
            $query = $this->db->query($string,$id_regime_user);
            $array=[];
            foreach ($query->result_array() as $row){
                $array[]=$row;
            }
            return $array; 
    }

}