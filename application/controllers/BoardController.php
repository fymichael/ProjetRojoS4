<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BoardController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Board_model");
    }
    public function board()
    {
        $nombreClient = $this->Board_model->countClient();
        $data['contents'] = 'board';
        $data['nombreClient'] = $nombreClient;
        $this->load->view('Back/back', $data);
    }
}
?>