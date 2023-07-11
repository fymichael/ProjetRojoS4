<?php
defined('BASEPATH') or exit('No direct script access allowed');

class PlatsController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sports_model');
        $this->load->model('Regime_model');
        $this->load->model("Plats_model");
        $this->load->model("Objectifs_model");
        $this->load->model("CategoriePlats_model");
    }
    public function delete($id_Plats){
        $this->Plats_model->deletePlats($id_Plats);
        redirect('PlatsController/getAllPlats');
    }
    public function updatePlats()
    {
        if ($this->input->get('Plats') && $this->input->get('idCatPlats') && $this->input->get('prix')) {
            $Plats = $this->input->get('Plats');
            $idCatPlats = $this->input->get('idCatPlats');
            $prix = $this->input->get('prix');
            //$nom_plats, $prix_plats, $id_plats, $id_categorie_plats
            $this->Plats_model->updatePlats($Plats, $prix, $this->input->get('platsId'), $idCatPlats);
            redirect('PlatsController/getAllPlats');
        }
    }
    public function addPlats()
    {
        if ($this->input->get('Plats') && $this->input->get('idCatPlats') && $this->input->get('prix')) {
            $Plats = $this->input->get('Plats');
            $idCatPlats = $this->input->get('idCatPlats');
            $prix = $this->input->get('prix');

            $this->Plats_model->addPlats($Plats, $prix, $idCatPlats);
            redirect('PlatsController/getAllPlats');
        }
    }
    public function getAllPlats(){
        $listPlats = $this->Plats_model->getAllPlats();
        $listCatPlats = $this->CategoriePlats_model->getAllCategoriePlats();
        $data['listPlats'] = $listPlats;
        $data['listCatPlats'] = $listCatPlats;
        $data['contents'] = 'plats';
        $this->load->view('Back/back', $data);
    }
}
?>