<?php

class Genre_model extends CI_Model
{
//    public function getMyproduit($iduser){
//        $string=sprintf("select * from produit where iduser=%d",$iduser);
//        $query = $this->db->query($string);
//        $array=[];
//        foreach ($query->result_array() as $row){
//            $array[]=$row;
//        }
//        return $array;
//    }
//
    public function getAllGenre(){
        $string=sprintf("select * from genre");
        $query = $this->db->query($string);
        $array=[];
        foreach ($query->result_array() as $row){
            $array[]=$row;
        }
        return $array;
    }
//
//    public function ppid($id){
//        $string=sprintf("select * from produit where iduser=%d",$id['nom']);
//        $query = $this->db->query($string);
//        $array=[];
//        foreach ($query->result_array() as $row){
//            $array[]=$row;
//        }
//        return $array;
//    }
//
//    public function getProduitById($id){
//        $string=sprintf("select * from produit where idcategorie=%d",$id);
//        $query = $this->db->query($string);
//        $array=[];
//        foreach ($query->result_array() as $row){
//            $array[]=$row;
//        }
//        return $array;
//    }
//
//    public function getAllCategorie(){
//        $string=sprintf("select * from categorie");
//        $query = $this->db->query($string);
//        $array=[];
//        foreach ($query->result_array() as $row){
//            $array[]=$row;
//        }
//        return $array;
//    }
//
//
//    public function getProduit($id){
//        $string=sprintf("select * from produit where idproduit=%d",$id);
//        $query = $this->db->query($string);
//        $array=[];
//        foreach ($query->result_array() as $row){
//            $array[]=$row;
//        }
//        return $array;
//    }
//
//    public function insertProduit($idp1,$iduser1,$idp2,$iduser2){
//        $string=sprintf("insert into echange values (default,%d,%d,%d,%d,false)",$iduser1['nom'],$idp1,$iduser2,$idp2);
//        $this->db->query($string);
//    }
//
//    public function zenalefako($iduser){
//        $string=sprintf("select idechange,iduser1,idproduit1,p1.nomproduit as nomproduit1,p1.estimation as estimation1,p1.photo as photo1, iduser2,idproduit2,p2.nomproduit as nomrpoduit2,p2.estimation as estimation2,p2.photo as photo2,etat from echange join produit p1 on p1.idproduit = echange.idproduit1 join produit p2 on p2.idproduit = echange.idproduit2 where iduser1=%d and etat=false ",$iduser['nom']);
//        $query = $this->db->query($string);
//        $array=[];
//        foreach ($query->result_array() as $row){
//            $array[]=$row;
//        }
//        return $array;
//    }
//
//    public function zehazoko($iduser){
//        $string=sprintf("select idechange,iduser1,idproduit1,p1.nomproduit as nomproduit1,p1.estimation as estimation1,p1.photo as photo1, iduser2,idproduit2,p2.nomproduit as nomrpoduit2,p2.estimation as estimation2,p2.photo as photo2,etat from echange join produit p1 on p1.idproduit = echange.idproduit1 join produit p2 on p2.idproduit = echange.idproduit2 where iduser2=%d and etat=false ",$iduser['nom']);
//        $query = $this->db->query($string);
//        $array=[];
//        foreach ($query->result_array() as $row){
//            $array[]=$row;
//        }
//        return $array;
//    }
//
//    public function updateUser($produit1,$iduserako,$produit2,$user1,$idechange){
//        $string1=sprintf("update echange set etat=true where idechange=%d ",$idechange);
//        $string=sprintf("update produit set iduser=%d where idproduit=%d ",$iduserako,$produit1);
//        $string2=sprintf("update produit set iduser=%d where idproduit=%d ",$user1,$produit2);
//        $this->db->query($string);
//        $this->db->query($string2);
//        $this->db->query($string1);
//    }
//
//    public function recherche($motcle,$idcategorie,$iduser){
//        $string=sprintf("select * from produit where nomproduit='%s' and idcategorie=%d and iduser!=%d ",$motcle,$idcategorie,$iduser['nom']);
//        $query = $this->db->query($string);
//        $array=[];
//        foreach ($query->result_array() as $row){
//            $array[]=$row;
//        }
//        return $array;
//    }
//
//    public function mamafa($idpoduit){
//        $string=sprintf("delete from produit where idproduit=%d",$idpoduit);
//        $this->db->query($string);
//    }







}