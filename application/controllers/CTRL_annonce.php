<?php
defined('BASEPATH') OR exit('No redirect script access allowed');

class CTRL_annonce extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public index() {
        $data['annonces'] = $this->Annonce->get_all();

        $this->load->model('Competence');
        $data['competences'] = $this->Competence->get_all_competences();
        
        $this->load->model('Diplome');
        $data['diplomes'] = $this->Diplome->get_all_diplomes();

        $this->load->view('annonce/insert_annonce', $data);
    }


    public function create() {
        $this->load->view('annonce/create');
    }

    public function create() {
        $data = [
            'nom' => $this->input->post('nom'),
            'description' => $this->input->post('description'),
            'prix' => $this->input->post('prix'),
            'quantite' => $this->input->post('quantite'),
        ];
        $this->Produit_model->insert($data);
        redirect('annonce/list_annonce');
    }

    public function edit($id) {
        $data['annonce'] = $this->Annonce->get_by_id($id);
        $this->load->view('annonce/insert_annonce', $data);
    }

    public function update($id) {
        $data = [
            'nom' => $this->input->post('nom'),
            'description' => $this->input->post('description'),
            'prix' => $this->input->post('prix'),
            'quantite' => $this->input->post('quantite'),
        ];
        $this->Produit_model->update($id, $data);
        redirect('annonce/insert_annonce');
    }

    public function delete($id) {
        $this->Produit_model->delete($id);
        redirect('annonce/list_annonce');
    }
}

?>