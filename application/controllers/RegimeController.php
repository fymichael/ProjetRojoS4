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
    public function delete($id_regime)
    {
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
    public function addDetailRegime()
    {
        if ($this->input->get('idPlats') && $this->input->get('idSports')) {
            $plats = $this->input->get('idPlats');
            $sports = $this->input->get('idSports');
            $idRegime = $this->input->get('regimeId');

            $this->Regime_model->addDetailsRegime($idRegime, $plats, $sports);

            redirect('RegimeController/getAllRegime');
        }
    }
    public function getAllRegime()
    {
        $listRegime = $this->Regime_model->getAllRegime();
        $listObjectif = $this->Objectifs_model->getAllObjectifs();
        $listPlats = $this->Plats_model->getAllPlats();
        $listSports = $this->Sports_model->getAllSports();
        $data['listRegime'] = $listRegime;
        $data['listObjectif'] = $listObjectif;
        $data['contents'] = 'regime';
        $data['listSports'] = $listSports;
        $data['listPlats'] = $listPlats;
        $this->load->view('Back/back', $data);
    }
    public function insertRegimeUser(){
        $id_user = $_SESSION['id'];
        $regime = $this->input->post('regime');
        $this->Regime_model->insertRegimeUser($id_user,$regime);
        redirect('RegimeController/getRegimes');
    }
    public function getRegimes(){
        $id_user = $_SESSION['id'];
        $regime=$this->Regime_model->getRegimeUser($id_user);
        $valeur1 = $this->Regime_model->getDetailsRegime($regime[0]['id_regime'],1);
        $valeur2 = $this->Regime_model->getDetailsRegime($regime[0]['id_regime'],2);
        $valeur3 = $this->Regime_model->getDetailsRegime($regime[0]['id_regime'],3);
        echo $valeur1[0]['nom_plats'];
        echo $valeur2[0]['nom_plats'];
        echo $valeur3[0]['nom_plats'];
        $data['matin'] = $valeur1;
        $data['dejeuner'] = $valeur2;
        $data['diner'] = $valeur3;
        $data['contents']='listeRegime';
        if($regime==null || $valeur1==null|| $valeur2==null || $valeur3==null) $data['erreur']="Erreur: Valeur null";
        $this->load->view('Front/front', $data);
    }
    public function payer(){
        $id_user = $_SESSION['id'];
        $regime=$this->Regime_model->getRegimeUser($id_user);
        $this->load->model('Payement');
        $payement = $this->Payement->getPayement($regime[0]['id_regime_user']);
        if(count($payement)==0){

        }else {
            $valeur1 = $this->Regime_model->getDetailsRegime($regime[0]['id_regime'],1);
            $valeur2 = $this->Regime_model->getDetailsRegime($regime[0]['id_regime'],2);
            $valeur3 = $this->Regime_model->getDetailsRegime($regime[0]['id_regime'],3);
            $data['matin'] = $valeur1;
            $data['dejeuner'] = $valeur2;
            $data['diner'] = $valeur3;
            $data['contents']='listeRegime';
            $data['erreur']='Vous avez deja payer';
            $this->load->view('Front/front', $data);
        }
    }
}
?>