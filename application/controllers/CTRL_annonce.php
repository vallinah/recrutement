<?php
defined('BASEPATH') OR exit('No redirect script access allowed');

class CTRL_annonce extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public index() {
        $this->load->model('Annonce');
        $data['competence'] = $this->Annonce->get_comptence(); 
        $this->load->view('form_page', $data);
    }
}

?>