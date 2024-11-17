<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Besoin extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    // Méthode pour afficher les "Capacités"
    public function capacites() {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/annonces');
        $this->load->view('templates/footer');
    }

    // Méthode pour afficher les "Éligibles"
    public function eligibles() {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/poste');
        $this->load->view('templates/footer');
    }
}
