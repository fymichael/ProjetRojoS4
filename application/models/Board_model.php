<?php
class Board_model extends CI_Model
{
    public function countClient()
    {
        $req = "Select count(id_utilisateur) as nombreUtilisateur from utilisateur where status!=1";
        $query = $this->db->query($req);
        $array = 0;
        foreach ($query->result_array() as $row) {
            $array = $row['nombreUtilisateur'];
        }
        return $array;
    }
}
?>