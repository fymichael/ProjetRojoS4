<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notification extends CI_Controller
{
    public function notificationPage(){
        $this->load->model("produit_model");
        $this->load->library('session');
        $data[]=array();
        $data['invity']=$this->produit_model->zehazoko($this->session->user);
        $this->load->view('notification',$data);
    }

    public function accept(){
        $this->load->model("produit_model");
        $this->load->library('session');
        $produit1=$this->input->get('produit1');
        $produit2=$this->input->get('produit2');
        $idechange=$this->input->get('idechange');
        $lery=$this->input->get('lery');
        $za=$this->input->get('za');
        $this->produit_model->updateUser($produit1,$za,$produit2,$lery,$idechange);
    }
}