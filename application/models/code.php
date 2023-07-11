<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Code extends CI_Model{

    public function getAllCodes(){
        $request = "SELECT * FROM code ";
        $query = $this->db->query($request);
        $array=[];
        foreach($query->result_array() as $row){
            $array[] = $row;
        }
        return $array;
    }
    public function getOneCode($code){
        $request = "SELECT * FROM code WHERE code =%d";
        $request=sprintf($request,$code);
        $query = $this->db->query($request);
        $array=[];
        foreach($query->result_array() as $row){
            $array[] = $row;
        }
        return $array;
    }
    public function updateCode($code,$etat){
        $request = "UPDATE code set etat =%d  WHERE code =%d";
        $request=sprintf($request,$etat,$code);
        $query = $this->db->query($request);
        $this->db->query($query);
    }


}
?>