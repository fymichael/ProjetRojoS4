<?php
class Code_model extends CI_Model
{
    public function addCode($nom_Code, $prix_Code)
    {
        $req = "insert into Code values (null, '%s', %d, %d)";
        $req = sprintf($req, $nom_Code, $prix_Code);
        $this->db->query($req);
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
        $request = "UPDATE code set etat =%d  WHERE code ='%s'";
        $request=sprintf($request,$etat,$code);
        // echo $request;
        $this->db->query($request);
    }
    public function getAllCode()
    {
        $req = "select * from Code";
        $result = $this->db->query($req);
        $Code = array();
        foreach ($result->result_array() as $row) {
            array_push($Code, $row);
        }
        return $Code;
    }
    public function getCodeById($id_Code)
    {
        $req = "select * from Code where id_Code = %d";
        $req = sprintf($req, $id_Code);
        $result = $this->db->query($req);
        $Code = array();
        foreach ($result->result_array() as $row) {
            array_push($Code, $row);
        }
        return $Code;
    }
    public function deleteCode($id_Code)
    {
        $req = "delete from Code where id_Code = %d";
        $req = sprintf($req, $id_Code);
        $this->db->query($req);
    }
}
?>