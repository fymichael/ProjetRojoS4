<?php
defined('BASEPATH') or exit('No direct script access allowed');

class CompletionController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Objectifs_model');
    }
    public function addCompletion()
    { 
        if ($this->input->get('taille') && $this->input->get('poids') && $this->input->get('idObjectif') && $this->input->get('objectif')) {
            $taille = $this->input->get('taille');
            $poids = $this->input->get('poids');
            $idObjectif = $this->input->get('idObjectif');
            $objectif = $this->input->get('objectif');    

            $this->Objectifs_model->addCompletion($taille, $poids, $idObjectif, $objectif);
            //$this->load->view('#');
        }
    }
}
?>