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

        $this->load->view('annonce/liste_annonce', $data);
    }


    public function create() {
        $this->load->view('annonce/form_annonce');
    }

    public function create() {
        $data = [
            'departement' => $this->input->post('dep'),
            'poste' => $this->input->post('poste'),
            'daty' => $this->input->post('daty'),
            'limit_date' => $this->input->post('limit_date'),
        ];
        $this->Annonce->insert($data);
        redirect('annonce/liste_annonce');
    }

    public function edit($id) {
        $data['annonce'] = $this->Annonce->get_by_id($id);
        $this->load->view('annonce/update_annonce', $data);
    }

    
    public function update($id_annonce, $data) {
        $this->db->where('id_annonce', $id_annonce);
        $this->db->update('annonce', $data);
        redirect('annonce/liste_annonce');
    }

    public function delete($id) {
        $this->Produit_model->delete($id);
        redirect('annonce/liste_annonce');
    }
}

?>