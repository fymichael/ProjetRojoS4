<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CodeController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Sports_model');
        $this->load->model('Regime_model');
        $this->load->model("Plats_model");
        $this->load->model("Code_model");
        $this->load->model("Objectifs_model");
        $this->load->model("CategoriePlats_model");
    }
    public function delete($id_Code)
    {
        $this->Code_model->deleteCode($id_Code);
        redirect('CodeController/getAllCode');
    }
    public function updateCode()
    {
        if ($this->input->get('Code') && $this->input->get('idCatCode') && $this->input->get('prix')) {
            $Code = $this->input->get('Code');
            $idCatCode = $this->input->get('idCatCode');
            $prix = $this->input->get('prix');
            //$nom_Code, $prix_Code, $id_Code, $id_categorie_Code
            $this->Code_model->updateCode($Code, $prix, $this->input->get('CodeId'), $idCatCode);
            redirect('CodeController/getAllCode');
        }
    }
    public function addCode()
    {
        if ($this->input->get('Code') && $this->input->get('idCatCode') && $this->input->get('prix')) {
            $Code = $this->input->get('Code');
            $idCatCode = $this->input->get('idCatCode');
            $prix = $this->input->get('prix');

            $this->Code_model->addCode($Code, $prix, $idCatCode);
            redirect('CodeController/getAllCode');
        }
    }
    public function getAllCode()
    {
        $listCode = $this->Code_model->getAllCode();
        $data['listCode'] = $listCode;
        $data['contents'] = 'Code';
        $this->load->view('Back/back', $data);
    }
}
?>