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

    public function get_all_diplomes() {
        $query = $this->db->get('diplome');
        return $query->result();
    }
}
?>