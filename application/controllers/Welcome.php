<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model("user_model");
    }
    public function checkUtilisateur()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->user_model->getOneUser($email, $password);
        if ($user != null) {
            if ($user[0]['status'] == 10) {
                redirect('BoardController/board');
            } else if ($user[0]['status'] == 1) {
                $this->load->library('session');
                $this->session->set_userdata('id', $user[0]['id_utilisateur']);
                redirect('welcome/acceuil');
            }
        }
        // redirect(base_url('welcome'));

    }
    public function admin()
    {
        $data['contents'] = 'content';
        $user = $this->user_model->getUserConnected($_SESSION['id']);
        $data['user'] = $user;
        if ($this->session->userdata('id') == null)
            redirect('welcome');
        else
            $this->load->view('Back/back', $data);
    }
    public function acceuil()
    {
        $data['contents'] = 'content';
        $user = $this->user_model->getUserConnected($_SESSION['id']);
        $data['user'] = $user;
        if ($this->session->userdata('id') == null)
            redirect('welcome');
        else
            $this->load->view('Front/front', $data);
    }

    public function index()
    {
        $this->load->view('login');
    }
    public function redirect_to_signup()
    {
        $this->load->model("Genre_model");
        $data['genre'] = $this->Genre_model->getAllGenre();
        $this->load->view('signup', $data);
    }
    public function deco(){
        $this->load->library('session');
        $this->session->unset_userdata('user');
        redirect(base_url('welcome'));
    }


}