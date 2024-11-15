<?php
defined('BASEPATH') OR exit('No redirect script access allowed');

class CTRL_annonce extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public index() {
        $this->load->model('Competence');
        $data['competence'] = $this->Competence->get_all_competence();
        
        $this->load->model('Diplome');
        $data['diplome'] = $this->Diplome->get_all_diplome();

        $this->load->view('form_page', $data);
    }
}

?>