<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class ParamEmployeur extends MY_Controller {
	public function __construct(){
		
		
	}
	
	 public function param_entreprise()
    {   
        $this->load->library('form_builder');
        //$this->load->library('form_validation');
        //$this->form_validation->set_rules('destinataire','Destinataire','required');
        

        //$this->form_validation->set_rules('password','Mot de Passe','trim|required|min_length[5]');
        /*$num_transit = $this->input->post('num_transit');
        $date_ouverture = $this->input->post('date_ouverture');
        if (isset($_POST['date_ouverture'])) {
            $timestamp = strtotime(trim($_POST['date_ouverture']));
            $date_ouverture = date("Y-m-d h:i:s", $timestamp);
            //echo $date_ouverture->format('d-m-Y');
        }*/
        
        
       /* if ($this->input->post('dep_ape') == "on") {
            $dep_ape =1;
        }
        else $dep_ape = 0;*/
        /*$date_ot = $this->input->post('date_ot');
        if (isset($_POST['date_ot'])) {
            $timestamp = strtotime(trim($_POST['date_ot']));
            $date_ot = date("Y-m-d h:i:s", $timestamp);
        }*/
       
        
      /*  if ($type_tc==null) {
            $type_tc=0;
        }
        
       
        $type_dossier_trouve = $this->ion_auth_model->cherche_type_dossier($type_dossier);
        $id_type_dossier = htmlentities(stripslashes($type_dossier_trouve['id_type_dossier']));
            
        if($this->form_validation->run()==TRUE){

        $nouveau_dossier_ot = $this->ion_auth_model->register_dossier_ot($num_transit,$marque,
                                                    $designation,
                                                    $conteneur_complet,                                                 
                                                    $nom_groupeur,
                                                    $nb_colis,
                                                    $poids,
                                                    $volume,
                                                    $type_tc,
            $date_ouverture,$destinataire,$num_ot,$date_ot,$num_commande,$fournisseur,
            $num_lta_bl,$port_embarquement,$mode_transport,$type_transport,$date_eta,$date_etd,$observation,$type_dossier_trouve,$dep_ape,
            date("Y-m-d H:i:s"),date("Y-m-d H:i:s"));
            if ($nouveau_dossier_ot)
            {
                

                $this->session->set_flashdata("success","Dossier n°".$num_transit." créé avec succés");
                refresh();
            }
            
        }*/
        //$type_import = $this->ion_auth_model->chercher_numero_importation();
        /*foreach ($query->result_array() as $row){
                $num_dossier = htmlentities(stripslashes($row['num_dossier']));
                $indice_dossier = htmlentities(stripslashes($row['indice_dossier']));
            }*/ 
            
            /*$indice_dossier = sprintf("%03d", $indice_dossier);
            $numero_dossier_import = $num_dossier."".$indice_dossier;*/
            
        //$this->mViewData['numero_import'] = $numero_import;

       // $this->mViewData['mode_transports'] = $this->ion_auth_model->liste_mode_transport();
              
         $employes =$this->ion_auth_model->liste_employees();
         $this->mViewData['employes'] = $employes;
         $this->mViewData['contents'] = 'employeur/param_entreprise';
         // on charge la page dans le template
         $this->load->view('_layouts/default1', $this->mViewData);
    }
     public function param_generation_bulletin()
    {   
        $this->load->library('form_builder');
        //$this->load->library('form_validation')

         $gen_bulletin = $this->input->post('gen_bulletin');
         $date_generation = $this->input->post('date_generation');
        if (isset($_POST['date_ouverture'])) {
            $timestamp = strtotime(trim($_POST['date_generation']));
            $date_generation = date("Y-m-d h:i:s", $timestamp);
            //echo $date_ouverture->format('d-m-Y');
        }
         $envoi_auto_bul = $this->input->post('envoi_auto_bul');
            
        if($this->form_validation->run()==TRUE){

        $maj_param_gen_bull = $this->ion_auth_model->register_dossier_ot($employeur,$gen_bulletin,
                                                    $date_generation, $envoi_auto_bul,
                                                    date("Y-m-d H:i:s"),date("Y-m-d H:i:s"));
            if ($maj_param_gen_bull)
            {
                // success
                /*$messages = "création du client effectuée avec succés";
                $this->system_message->set_success($messages);*/

                $this->session->set_flashdata("success","Données enregistrées avec succés");
                refresh();
            }
            
        }
         $this->mViewData['contents'] = 'employeur/param_entreprise';
         // on charge la page dans le template
         $this->load->view('_layouts/default1', $this->mViewData);
    }

}