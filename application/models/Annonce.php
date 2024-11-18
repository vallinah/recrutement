<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Annonce extends CI_Model {
    public function construct() {
        parent::__construct();
        $this->load->model('Diplome');
        $this->load->model('Competence');
    }

    public function get_all_competences() {
        $query = $this->db->get('competence');
        return $query->result();
    }

    public function get_competence_by_annnonce_id($id) {
        return $this->db->get_where('annonce_competence', ['id_annonce' => $id])->row();
    }
 
    public function get_all_diplomes() {
        $query = $this->db->get('diplome');
        return $query->result();
    }

    public function get_diplome_by_annnonce_id($id) {
        return $this->db->get_where('annonce_diplome', ['id_annonce' => $id])->row();
    }

    public function get_all() {
        return $this->db->get('annonce').result();
    }

    public function get_by_id($id) {
        return $this->db->get_where('annonce', ['id_annonce' => $id])->row();
    }

    public function insert($data) {
        return $this->db->insert('annonce', $data);
    }

    public function update($id, $data) {
        return $this->db->where('id_annonce', $id)->update('annonce', $data);
    }

    public function delete($id) {
        return $this->db->where('id_annonce', $id)->delete('annonce');
    }
}
?>