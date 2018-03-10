<?php

class Employe extends MY_Controller {

    function __construct() {
        parent::__construct();
       // $this->load->model('form_model');
       // $this->load->model('User_model');
        
    }

    function menu_employe_form(){ 
        //$this->load->view('form_inscription');
        $this->render('menu_creation_employe', 'full_width');
    } 
    
    function ajout_employe_form(){
        $this->render('form_add_employe', 'full_width');
    }

    function save_employe() { 
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('prenom', 'Prenom',  'required|min_length[5]|max_length[15]');
        $this->form_validation->set_rules('nom', 'Nom',  'required');
        $this->form_validation->set_rules('date_naissance', 'date_naissance',  'required');
        $this->form_validation->set_rules('lieu_naissance', 'lieu_naissance',  'required');
        $this->form_validation->set_rules('pays_naissance', 'pays_naissance',  'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('adresse', 'adresse',  'required');
        $this->form_validation->set_rules('code_postale', 'code_postale',  'required');
        $this->form_validation->set_rules('ville', 'ville',  'required');
        $this->form_validation->set_rules('pays', 'pays',  'required');
        $this->form_validation->set_rules('numss', 'numss');
        $this->form_validation->set_rules('numia', 'numia');
        $this->form_validation->set_rules('numtt', 'numtt');
        $this->form_validation->set_rules('handicape', 'handicape',  'required');
        $this->form_validation->set_rules('enfant', 'enfant',  'required');
        $this->form_validation->set_rules('modepaie', 'modepaie',  'required');
        $this->form_validation->set_rules('iban', 'iban');
        $this->form_validation->set_rules('bic', 'bic');

        $prenom = $this->input->post('prenom');
        $nom = $this->input->post('nom');
        $date_naissance = $this->input->post('date_naissance');
        $lieu_naissance = $this->input->post('lieu_naissance');
        $pays_naissance = $this->input->post('pays_naissance');
        $email = $this->input->post('email');
        $adresse = $this->input->post('adresse');
        $code_postale = $this->input->post('code_postale');
        $ville = $this->input->post('ville');
        $pays = $this->input->post('pays');
        $numss = $this->input->post('numss');
        $numia = $this->input->post('numia');
        $numtt = $this->input->post('numtt');
        $handicape = $this->input->post('handicape');
        $enfant = $this->input->post('enfant');
        $modepaie = $this->input->post('modepaie');
        $iban = $this->input->post('iban');
        $bic = $this->input->post('bic');
       
        //insertion dans la bd avec le status 0 (ou inactif)
        $data= array('prenom' => $prenom ,
                     'nom' => $nom ,
                     'date_naissance' => $date_naissance ,
                     'lieu_naissance' => $lieu_naissance,
                     'pays_naissance' => $pays_naissance,
                     'email' => $email,
                     'adresse' => $adresse,
                     'code_postal' => $code_postale,
                     'ville' => $ville,
                     'pays' => $pays,
                     'nss' => $numss,
                     'nia' => $numia,
                     'ntt' => $numtt,
                     'handicape' => $handicape,
                     'nb_enfant' => $enfant,
                     'mode_paiement' => $modepaie,
                     'iban' => $iban,
                     'bic' => $bic);
        $this->db->insert('employe',$data);
}
   } 
?>