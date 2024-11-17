<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RH extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('url');
    }

    // Méthode pour afficher les "Capacités"
    public function capacites() {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/capacites');
        $this->load->view('templates/footer');
    }

    // Méthode pour afficher les "Éligibles"
    public function eligibles() {
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('pages/eligibles');
        $this->load->view('templates/footer');
    }
}
