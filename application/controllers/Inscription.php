<?php

class Inscription extends MY_Controller {

    function __construct() {
        parent::__construct();
       // $this->load->model('form_model');
    }

    function inscription_form() { 
        //$this->load->view('form_inscription');
        $this->render('form_inscription', 'full_width');
    } 
    function send_validation_email() { 
    	$this->load->library('form_validation');
    	$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    	$this->form_validation->set_rules('prenom', 'Prenom',  'required|min_length[5]|max_length[15]');
		$this->form_validation->set_rules('nom', 'Nom',  'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');
		$this->form_validation->set_rules('entreprise', 'Entreprise', 'required');

		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('form_inscription');
		}
		else
		{
			$this->load->view('send_email');
		}

       // $this->load->view('send_email');
    } 
}

?>