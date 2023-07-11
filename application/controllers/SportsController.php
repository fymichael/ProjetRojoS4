<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SportsController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sports_model');
        $this->load->model('Regime_model');
        $this->load->model("Plats_model");
        $this->load->model("Objectifs_model");
    }
    public function delete($id_Sports){
        $this->Sports_model->deleteSports($id_Sports);
        redirect('SportsController/getAllSports');
    }
    public function updateSports()
    {
        if ($this->input->get('sportsId') && $this->input->get('Sports') && $this->input->get('prix')) {
            $prix = $this->input->get('prix');
            $Sports = $this->input->get('Sports');
            $SportsId = $this->input->get('sportsId');
            $this->Sports_model->updateSports($Sports, $prix, $SportsId);
            redirect('SportsController/getAllSports');
        }
    }
    public function addSports()
    {
        if ($this->input->get('sports') && $this->input->get('prix')) {
            $Sports = $this->input->get('sports');
            $prix = $this->input->get('prix');

            $this->Sports_model->addSports($Sports, $prix);
            redirect('SportsController/getAllSports');
        }
    }
    public function getAllSports(){
        $listSports = $this->Sports_model->getAllSports();
        $listObjectif = $this->Objectifs_model->getAllObjectifs();
        $data['listSports'] = $listSports;
        $data['contents'] = 'sport';
        $this->load->view('Back/back', $data);
    }
}
?>