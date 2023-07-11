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
        $this->load->model("Code");
        $this->load->model("Objectifs_model");
        $this->load->model("CategoriePlats_model");
    }
    public function delete($id_Code)
    {
        $this->Code_model->deleteCode($id_Code);
        redirect('CodeController/getAllCode');
    }
    // public function updateCode()
    // {
    //     if ($this->input->get('Code') && $this->input->get('idCatCode') && $this->input->get('prix')) {
    //         $Code = $this->input->get('Code');
    //         $idCatCode = $this->input->get('idCatCode');
    //         $prix = $this->input->get('prix');
    //         //$nom_Code, $prix_Code, $id_Code, $id_categorie_Code
    //         $this->Code_model->updateCode($Code, $prix, $this->input->get('CodeId'), $idCatCode);
    //         redirect('CodeController/getAllCode');
    //     }
    // }
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
    public function index(){
        $valeur = $this->Code_model->getAllCode();
        $data['code'] = $valeur;
        $data['contents'] = 'code';
        $this->load->view('Front/front', $data);
    }
    public function updateCode(){
        $code=$this->input->post('code');
        $codes = $this->Code_model->getOneCode($code);
        if($codes[0]['etat']==1){
            $this->Code_model->updateCode($code,5);
        }else{
            $data['erreur'] = "Le code : ".$codes[0]['code']."  " . "que vous avez utilisé est invalid déjà utilisé";
        }
        $data['contents'] = 'codeAttent';
        $data['code']=$codes;
        $this->load->view('Front/front', $data);
    }
}
?>