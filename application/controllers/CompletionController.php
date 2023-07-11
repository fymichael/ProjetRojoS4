<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CompletionController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Objectifs_model');
        $this->load->model('Completion_model');
        $this->load->model('historique_model');
        $this->load->model('regime_model');

        $this->load->model("user_model");
    }

    public function completion(){
        $listObjectif = $this->Objectifs_model->getAllObjectifs();
        $data['contents'] = 'completion';
        $data['listObjectif'] = $listObjectif;
        $this->load->view('Front/front', $data);
    }

    public function addCompletion()
    { 
        if ($this->input->get('taille') && $this->input->get('poids') && $this->input->get('idObjectif') && $this->input->get('objectif')) {
            $id_user = $_SESSION['id'];
            $taille = $this->input->get('taille');
            $poids = $this->input->get('poids');
            $idObjectif = $this->input->get('idObjectif');
            $objectif = $this->input->get('objectif');
            $id_user = 1;    

            $this->Completion_model->addCompletion($id_user, $taille, $poids, $idObjectif, $objectif);
            $user = $this->Completion_model->getOneCompletion($id_user, $taille, $poids, $idObjectif, $objectif);
            $this->historique_model->addHistory($user[0]['id_details_user']);

            redirect('CompletionController/getValueForCompletion');
        }
        //redirect('CompletionController/completion');
    }
    public function getValueForCompletion(){
        $this->load->model('formule_model');
        $this->load->model('regime_model');
        $id_user = $_SESSION['id'];
        $user = $this->Completion_model->getById($id_user);
        $weight = $this->Completion_model->getWeight($user[0]['poids'],$user[0]['objectif']);

        if($weight < 0) $weight = $weight*-1;

        $formule=$this->formule_model->getOneFormule($user[0]['id_objectif']);
        $valeur = $this->formule_model->getDuree($formule[0]['duree'],$formule[0]['poids'],$weight);
        $regime=$this->regime_model->getOneRegime($user[0]['id_objectif']);
        $price=$this->regime_model->getPriceRegime($regime);
        $data['duree'] = $valeur;
        $data['regime'] = $regime;
        $data['price'] = $price;
        $data['contents']='completionResponse';
        $this->load->view('Front/front',$data);
    }
    public function getDetails($regime,$duree){
        $data['regime']=$this->regime_model->getDetails($regime);
        $data['vola']=$this->regime_model->getOnePrice($regime,$duree);
        $data['contents']='detailsRegime';
        $this->load->view('Front/front',$data);

    }
}
?>