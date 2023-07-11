<?php
class Code_model extends CI_Model
{
    public function validateCode($id_code){
        $req = "update Code set etat = 10 where id_Code = %d";
        $req = sprintf($req, $id_code);
        $this->db->query($req);
    }
    public function getEtatLettre($etat){
        if($etat == 1) return 'intact';
        else if($etat == 5) return 'en attente de confirmation';
        else if($etat == 10) return 'valider';
    }
    public function addCode($nom_Code, $prix_Code)
    {
        $req = "insert into Code values (null, '%s', %d, %d)";
        $req = sprintf($req, $nom_Code, $prix_Code, 1);
        $this->db->query($req);
    }
    public function updateCode($nom_Code, $prix_Code, $id_Code, $etat)
    {
        $req = "update Code set code = '%s', montant = %d, etat=%d where id_Code = %d";
        $req = sprintf($req, $nom_Code, $prix_Code, $etat, $id_Code);
        $this->db->query($req);
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
    public function getCodeEnAttente()
    {
        $req = "select * from code where etat = 5";
        echo $req;
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