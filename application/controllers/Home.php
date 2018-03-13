<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Home extends MY_Controller {

	public function index()
	{
		if($this->session->userdata('logged_in')){
			$this->render('home', 'full_width');
		}else{
			//redirect('login', 'refresh');
			$this->render('home', 'full_width');
	 	//$this->render('form_connexion', 'full_width');
		}
	}
	public function logout(){
		//$this->session->unset_userdata('logged_in');
		//$this->session->session_destroy();
		unset($_SESSION);
		//redirect(site_url('form_connexion'), 'refresh');
		//redirect("connexion/form_connexion","refresh");
	 	$this->render('form_connexion', 'full_width');
	}
	public function accueil(){
		//$this->session->unset_userdata('logged_in');
		//$this->session->session_destroy();
		//unset($_SESSION);
		if($this->session->userdata('logged_in')){
		redirect(site_url('home'), 'refresh');
		}else{
			redirect('login', 'refresh');
		}
	}
}
