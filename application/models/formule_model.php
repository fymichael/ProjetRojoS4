<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Formule_model extends CI_Model
{
    public function getOneFormule($id_objectif){
            $string="select * from formule where id_objectif = %d order by id_formule desc limit 1";
            $string = sprintf($string,$id_objectif);
            $query = $this->db->query($string);
            $array=[];
            foreach ($query->result_array() as $row){
                $array[]=$row;
            }
            return $array; 
    }
    public function getDuree($duree , $poids , $objectif){
        return ($objectif*$duree)/$poids;
    }
    
}
?>