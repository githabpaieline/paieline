<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class User extends MY_Controller {
	public function __construct(){
		if(!isset($_SESSION['user_logged'])){
			$this->session->set_flashdata("error","Veuillez vous connecter avant de voir cette page!!");
			//redirect("login");            
            $this->render('form_connexion', 'full_width');
		}
		
	}
	public function home()
	{	
		/*$dossiers= $this->ion_auth_model->get_all_dossiers();
		if($dossiers){
				foreach ($dossiers as $a) {
					$stat_dossier[] = $this->ion_auth_model->cherche_libelle_etat_dossier($a['etat_dossier']);
					
			}
			$v=array_count_values($stat_dossier);
		}	*/	
			//print_r($v);
        if(isset($_SESSION['user_logged'])){
		 $this->mViewData['contents'] = 'user/home_view_user';//'user/facturation';
 
   		 // on charge la page dans le template
   		 $this->load->view('_layouts/default1',  $this->mViewData);
        }
		//$this->load->view('home');
	}
	 public function getdata() 
        { 
        	$dossiers= $this->ion_auth_model->get_all_dossiers();
				foreach ($dossiers as $a) {
					$stat_dossier[] = $this->ion_auth_model->cherche_libelle_etat_dossier($a['etat_dossier']);
					
			}
			$v=array_count_values($stat_dossier);
        $data = $v; 
 
        //         //data to json 
 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Topping", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Total", 
            "pattern" => "", 
            "type" => "number" 
        ); 
        $i=0;
        foreach($data as $cd) 
            { 
            $responce->rows[]["c"] = array( 
                array( 
                	//$etat_dossier = $this->ion_auth_model->cherche_libelle_etat_dossier($dossier_cree['etat_dossier']);
                    "v" => "$cd[$i]", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$cd->quantity, 
                    "f" => null 
                ) 
            ); 
            } 
 
        echo json_encode($responce); 
        } 
}