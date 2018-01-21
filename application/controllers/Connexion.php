<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Connexion extends MY_Controller {
	public function __construct(){
		echo "salut";
		/*if(!isset($_SESSION['user_logged'])){
			$this->session->set_flashdata("error","Veuillez vous connecter avant de voir cette page!!");
			redirect("login");
		}
		 $this->render('login_view', 'full_width');*/
		  parent::__construct();
	}
	 function connexion_form() { 
	 	$this->mViewData['activer'] = 1;
		
	 	 $this->render('login_view', 'full_width');
        //$this->load->view('form_inscription');
    } 
}