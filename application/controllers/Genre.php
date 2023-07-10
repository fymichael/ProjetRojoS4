<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class genre extends CI_Controller
{
    public function listeAllGenre(){
        $this->load->model("genre_model");
        $data = array();
        $data['genre']=$this->genre_model->getAllGenre();
        $this->load->view('signup', $data);
    }
//
//
//    public function listeAllCategorie(){
//        $this->load->model("produit_model");
//        $this->load->library('session');
//        $data=array();
//        $data['allcategorie']=$this->produit_model->getAllCategorie();
//        $data['olona']=$this->session->user;
//        $this->load->view('ajoutProduit', $data);
//    }
//
//    public function addProduit(){
//        $this->load->model('User_model');
//        $this->load->library('session');
//
//        $nomProduit=$this->input->post('nomProduit');
//        $prixProduit=$this->input->post('prix');
//        $idcategorie=$this->input->post('categorie');
//        $field_name ='image_file';
//        $file_name = $this->employer_model->upload_image($field_name);
//
//        $this->employer_model->insertProduit($idcategorie,$this->session->user['nom'],$nomProduit,$file_name,$prixProduit);
//
//        redirect(base_url('genre/listeMyproduct'));
//
//    }
//
//    public function allProduct(){
//        $this->load->model('produit_model');
//        $this->load->library('session');
//        $data[]=array();
//        $data['produitAna']=$this->produit_model->ppid($this->session->user);
//        $this->session->set_userdata('bibity',$this->input->get('idproduit'));
//        $data['produit']=$this->produit_model->getProduit($this->input->get('idproduit'));
//        $this->load->view('echange',$data);
//    }
//
//    public function produitParId(){
//        $this->load->model('produit_model');
//        $this->load->library('session');
//        $data[]=array();
//        $data['produitAna']=$this->produit_model->ppid($this->session->user);
//        $data['entana']=$this->produit_model->getProduit($this->input->post('choix'));
//        $data['produit']=$this->produit_model->getProduit($this->session->bibity);
//        $this->load->view('echange',$data);
//    }
//
//    function invitation(){
//        $this->load->model('produit_model');
//        $this->load->library('session');
//        $idp1=$this->input->get('idp1');
//        $iduser1=$this->session->user;
//        $idp2=$this->input->get('idp2');
//        $iduser2=$this->input->get('iduser2');
//        $this->produit_model->insertProduit($idp1,$iduser1,$idp2,$iduser2);
//        redirect(base_url('genre/invitation2'));
//    }
//
//    function invitation2(){
//        $this->load->model('produit_model');
//        $this->load->library('session');
//        $data[]=array();
//        $data['esanche']=$this->produit_model->zenalefako($this->session->user);
//        $this->load->view('mesinvitation',$data);
//    }
//
//    public function search(){
//        $this->load->model('produit_model');
//        $this->load->library('session');
//        $search=$this->input->post('search');
//        $categorie=$this->input->post('categ');
//        $data[]=array();
//        $data['resultat']=$this->produit_model->recherche($search,$categorie,$this->session->user);
//        $this->load->view('test',$data);
//    }
//
//    public function modify(){
//        $this->load->model('produit_model');
//        $data[]=array();
//        $data['pd']=$this->produit_model->getProduit( $this->input->get('idp'));
//        $data['allcategorie']=$this->produit_model->getAllCategorie();
//        $this->load->view('modify',$data);
//    }
//
//    public function tenaModify(){
//        $this->load->model('User_model');
//        $this->load->library('session');
//        $idp=$this->input->get('idp');
//        $nom=$this->input->post('nomProduit');
//        $prix=$this->input->post('prix');
//        $categorie=$this->input->post('categorie');
//        $field_name ='image_file';
//        $file_name = $this->employer_model->upload_image($field_name);
//        $this->employer_model->updatePd($categorie,$this->session->user['nom'],$nom,$file_name,$prix,$idp);
//        redirect(base_url('genre/listeMyproduct'));
//    }
//
//    public function remove(){
//        $this->load->model('produit_model');
//       $id=$this->input->get('idproduct');
//       $this->produit_model->mamafa($id);
//        redirect(base_url('genre/listeMyproduct'));
//    }




}