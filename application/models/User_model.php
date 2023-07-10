<?php

class User_model extends CI_Model {


    public function getOneUser($email,$mdp){
        $string=sprintf("select * from utilisateur where email='%s' and mot_de_passe='%s'",$email,$mdp);
        echo $string;
        $query = $this->db->query($string);
        $array=[];
        foreach ($query->result_array() as $row){
            $array[]=$row;
        }
        return $array;
    }
    public function insertUser($nom_user,$email,$mdp,$idgenre,$status,$dtn){
        $string=sprintf("insert into utilisateur values (default,'%s','%s','%s',%d,%d,'%s')",$nom_user,$email,$mdp,$idgenre,$status,$dtn);
        // echo $string;
        $this->db->query($string);
    }




//    public function upload_image($nom_image) {
//        $config['upload_path'] = 'C:\xampp\htdocs\ci306\image';
//        $config['allowed_types'] = 'jpg|jpeg|png';
//        $config['max_size'] = 2048;
//        $config['encrypt_name'] = TRUE;
//
//        $this->load->library('upload', $config);
//
//        if (!$this->upload->do_upload($nom_image)) {
//            return $this->upload->display_errors();
//        } else {
//            $data = $this->upload->data();
//            return $data['file_name'];
//        }
//    }


}