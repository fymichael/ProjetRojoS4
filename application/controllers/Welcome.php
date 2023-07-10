<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->library('session');
    }
    public function checkUtilisateur(){
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $this->load->model("user_model");
        $user = $this->user_model->getOneUser($email,$password);
        echo $user[0]['status'];
        if ($user!=null){
            if ($user[0]['status']==10){
                redirect('welcome/admin');
            }
            else if ($user[0]['status']==1){
                $this->load->library('session');
                $this->session->set_userdata('id',$user[0]['id_utilisateur']);
                echo $this->session->userdata('id')."session";
                redirect('welcome/acceuil');
            }
        }
        // redirect(base_url('welcome'));

    }

    public function acceuil(){
        if ($this->session->userdata('id')==null)redirect('welcome');
        else $this->load->view('templates/acceuil');
    }

    public function index(){
        $this->load->view('templates/login');
    }
    public function redirect_to_signup(){
        $this->load->model("Genre_model");
        $data['genre'] = $this->Genre_model->getAllGenre();
        $this->load->view('templates/signup',$data);
    }

}
