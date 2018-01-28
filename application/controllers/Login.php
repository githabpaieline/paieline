<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Login extends MY_Controller{
	
	public function index()
	{
		$this->load->library('form_builder');
		$this->form_validation->set_rules('username','Nom d utilisateur','trim|required');
		$this->form_validation->set_rules('password','Mot de Passe','trim|required|min_length[5]');

		if($this->form_validation->run()==TRUE){

		
			$password= $_POST['password'];
			$identity=$_POST['username'];
			$remember = FALSE;
			
			if ($this->ion_auth->login($identity, $password, $remember)){
				// login succeed
				$messages = $this->ion_auth->messages();
				$this->system_message->set_success($messages);
				$this->session->set_flashdata("success","Vous êtes connectés");

				

				$_SESSION['user_logged']=TRUE;
				$_SESSION['username']=$identity;
				//	$this->list_session();
				//return "";
				//$this->alerte();
				redirect("user/home","refresh");
			}
			else{

				$this->session->set_flashdata("error","Nom d utilisateur ou Mot de passe invalide");
				//$this->load->view('login_view');
				$this->render('form_connexion', 'full_width');
				
			}
		}
		else{
			$this->load->view('login_view',true);
		}
	}
	public function alerte(){
		$liste_dossier_en_traitment = $this->ion_auth_model->liste_dossiers_a_suivre();
		foreach ($liste_dossier_en_traitment as $dossier_en_traitment) {
			$etat_dossier = $this->ion_auth_model->cherche_etat_dossier($dossier_en_traitment['etat_dossier']);
			$duree_delai=$etat_dossier['dureeJourMax'] - $etat_dossier['dureeJourMin'];
			$duree_jour = (strtotime(date("Y-m-d H:i:s")) - strtotime($dossier_en_traitment['date_modif']))/86400;
			if ($duree_jour > $duree_delai) {
				$objet = "[Retard Trait.] Dossier N°".$dossier_en_traitment['numero_dossier'];
				$libelle_alerte = "Il y'a un retard de traitement du dossier N°".$dossier_en_traitment['numero_dossier']."  sur un délai de ".$duree_delai." jour(s) à l'etat ".$etat_dossier['libelle'].", veuillez consulter le dossier SVP!!!";
				$alerte_ajouter = $this->ion_auth_model->ajout_alerte($objet,$libelle_alerte);
				
			}
			
		}
	}
	  public function list_session()
    {
        echo '<pre>';
        print_r($this->session->all_userdata());
        echo '</pre>';
        $this->load->view('list-session');
    }
	 public function connect()
    {
        $this->session->set_userdata('memberid', 1);
        echo $this->session->userdata('memberid');
        //$this->load->view('create-session');
    }
	public function register()
	{	
		
		if(isset($_POST['register'])){
			$groups = $this->input->post('groups');
			$this->form_validation->set_rules('username','Nom d utilisateur','trim|required');
			$this->form_validation->set_rules('email','Email','trim|required');
			$this->form_validation->set_rules('password','Mot de Passe','trim|required');
			$this->form_validation->set_rules('password2','Confirmer Mot de Passe','trim|required');
			//$this->form_validation->set_rules('groups','Groupes','trim|required');
			if($this->form_validation->run()==TRUE){
				echo "form validated";

				$data=$arrayName = array('username' => $_POST['username'],
									 'email' => $_POST['email'],
									 'password' => md5($_POST['password']));
								//	 'date_create' => date('Y-m-d'),)
									
				$this->db->insert('users',$data);
				$this->session->set_flashdata("success","Votre inscription s'est effectué avec succés, veuillez attendre l'activation de votre compte");
				redirect("login/register","refresh");
			}
		}
		//load view
		$this->load->view('register');
	}
	
}
/*class login extends MY_Controller {

	public function index()
	{
		$this->form_validation->set_rules('username','Username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required|callback_basisdata_cek');
		$identity = $this->input->post('username');
		$password = $this->input->post('password');
		$remember = ($this->input->post('remember')=='on');
		if($identity && $password){
			echo $this->input->post('username');
			//redirect(base_url('index.php/home'), 'refresh');
			redirect(base_url('/home'), 'refresh');
			//	redirect($this->mModule);
		
		}else{
			$this->load->view('login_view');
		}

	}
	function basisdata_cek($password){
		$username= $this->input->post('username');
		$result=$this->login_model->login($username,$password);
		echo "dans basisdata_cek";
		if($result){
			$sess_array = array();
			foreach ($result as $row) {
				$sess_array = $arrayName = array('id' => $row->id, 'username' => $row->username, 'email' => $row->email);
				$this->session->set_userdata('logged_in',$sess_array);
			}
			return true;
		}else{
			$this->form_validation->set_message('basisdata_cek','Nom d utilisateur ou Mot de passe invalide');
			return false;
		}

	}
}*/
