<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CompletionController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Objectifs_model');
        $this->load->model('Completion_model');
    }

    public function completion(){
        $listObjectif = $this->Objectifs_model->getAllObjectifs();
        $data['contents'] = 'completion';
        $data['listObjectif'] = $listObjectif;
        $this->load->view('Front/front',$data);
    }

    public function addCompletion()
    { 
        $taille = $this->input->get('taille');
        echo $taille;
        if ($this->input->get('taille') && $this->input->get('poids') && $this->input->get('idObjectif') && $this->input->get('objectif')) {
            echo 'sdf';
            $poids = $this->input->get('poids');
            $idObjectif = $this->input->get('idObjectif');
            $objectif = $this->input->get('objectif');
            $id_user = 1;    

            $this->Completion_model->addCompletion($id_user, $taille, $poids, $idObjectif, $objectif);
            redirect('CompletionController/completion');
        }
        //redirect('CompletionController/completion');
    }
}
?>