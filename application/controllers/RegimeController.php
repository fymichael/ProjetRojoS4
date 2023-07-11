<?php
defined('BASEPATH') or exit('No direct script access allowed');

class RegimeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sports_model');
        $this->load->model('Regime_model');
        $this->load->model("Plats_model");
        $this->load->model("Objectifs_model");
    }
    public function delete($id_regime){
        $this->Regime_model->deleteRegime($id_regime);
        redirect('RegimeController/getAllRegime');
    }
    public function updateRegime()
    {
        if ($this->input->get('regimeId') && $this->input->get('idObjectif') && $this->input->get('regime')) {
            $idObjectif = $this->input->get('idObjectif');
            $regime = $this->input->get('regime');
            $regimeId = $this->input->get('regimeId');
            $this->Regime_model->updateRegime($regime, $idObjectif, $regimeId);
            redirect('RegimeController/getAllRegime');
        }
    }
    public function addRegime()
    {
        if ($this->input->get('regime') && $this->input->get('idObjectif')) {
            $regime = $this->input->get('regime');
            $idObjectif = $this->input->get('idObjectif');

            $this->Regime_model->addRegime($regime, $idObjectif);
            redirect('RegimeController/getAllRegime');
        }
    }
    public function getAllRegime(){
        $listRegime = $this->Regime_model->getAllRegime();
        $listPlats = $this->Plats_model->getAllPlats();
        $listSports = $this->Sports_model->getAllSports();
        $listObjectif = $this->Objectifs_model->getAllObjectifs();
        $data['listSports'] = $listSports;
        $data['listPlats'] = $listPlats;
        $data['listRegime'] = $listRegime;
        $data['listObjectif'] = $listObjectif;
        $data['contents'] = 'regime';
        $this->load->view('Back/back', $data);
    }
}
?>