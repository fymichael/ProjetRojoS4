<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BoardController extends CI_Controller
{
    public function board(){
        $data['contents'] = 'board';
        $this->load->view('Back/back', $data);
    }
    // public function getProportion(){

    // }   
}
?>