<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Devise extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_builder');
	}

	// Frontend User CRUD
	public function index()
	{
		$crud = $this->generate_crud('devise');
		$crud->columns('libelle', 'libelle_court');
		//$this->unset_crud_fields('ip_address', 'last_login');

		
		// disable direct create / delete Frontend User
		$crud->unset_add();
		$crud->unset_delete();

		$this->mPageTitle = 'Devise';
		$this->render_crud();
	}

	// Create Frontend User
	public function create()
	{
		$form = $this->form_builder->create_form();

		if ($form->validate())
		{
			// passed validation
			$libelle = $this->input->post('libelle');
			$libelle_court = $this->input->post('libelle_court');
			$password = $this->input->post('password');
			// [IMPORTANT] override database tables to update Frontend Users instead of Admin Users
			$this->ion_auth_model->tables = array(
				'devise'				=> 'devise',
				'login_attempts'	=> 'login_attempts',
			);

			// proceed to create user
			//$user_id = $this->ion_auth->register($identity, $password, $email, $additional_data, $groups);			
			$devise_id = $this->ion_auth->register_devise($libelle, $libelle_court);			
			if ($devise_id)
			{
				// success
				$messages = $this->ion_auth->messages();
				$this->system_message->set_success($messages);

			}
			else
			{
				// failed
				$errors = $this->ion_auth->errors();
				$this->system_message->set_error($errors);
			}
			refresh();
		}

		
		$this->mPageTitle = 'Création Devise';

		$this->mViewData['form'] = $form;
		$this->render('devise/create');
	}

	
}
