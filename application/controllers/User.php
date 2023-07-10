<?php

class User extends CI_Controller
{
    public function insertUser(){
        $nom=$this->input->post('name');
        $dtn=$this->input->post('dtn');
        $idgenre=$this->input->post('genre');
        $email=$this->input->post('email');
        $password=$this->input->post('password');
        $status=1;
        $this->load->model("user_model");
        $this->user_model->insertUser($nom,$email,$password,$idgenre,$status,$dtn);
        redirect('welcome');
    }
}