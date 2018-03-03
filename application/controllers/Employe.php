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
   } 
?>