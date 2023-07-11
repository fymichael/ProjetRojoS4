<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegimeController extends CI_Controller
{
    public function __construct(){
        parent::__construct();
        $this->load->model('regime_model');

    }
    public function insertRegimeUser(){
        $id_user = $_SESSION['id'];
        $regime = $this->input->post('regime');
        $this->regime_model->insertRegimeUser($id_user,$regime);
    }
    
}
?>