<?php

class Inscription extends MY_Controller {

    function __construct() {
        parent::__construct();
       // $this->load->model('form_model');
       // $this->load->model('User_model');
        
    }

    function inscription_form() { 
        //$this->load->view('form_inscription');
        $this->render('form_inscription', 'full_width');
    } 
     function verify() {
        //$this->load->view('form_inscription');
        $result = $this->ion_auth_model->get_hash_value($_GET['email']); //get the hash value which belongs to given email from database
         if($result){ 
            if($result==$_GET['hash']){  //check whether the input hash value matches the hash value retrieved from the database
                $this->ion_auth_model->verify_user($_GET['email']); ///update the status of the user as verified
                /*---Now you can redirect the user to whatever page you want---*/
                $this->load->view('form_connexion');
          }
         }else {
            $this->load->view('form_inscription');
          }
    }
     function send_validation_email() { 
        $this->load->library('form_validation');
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_rules('prenom', 'Prenom',  'required|min_length[5]|max_length[15]');
        $this->form_validation->set_rules('nom', 'Nom',  'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('entreprise', 'Entreprise', 'required');

        $prenom = $this->input->post('prenom');
        $nom = $this->input->post('nom');
        $email = $this->input->post('email');
        $entreprise = $this->input->post('entreprise');
        $password = 'Zx'.$entreprise.'@';
        $username = explode("@", $email)[0];

        //insertion dans la bd avec le status 0 (ou inactif)
        $data= array('first_name' => $prenom ,
                                 'last_name' => $nom ,
                                 'username' => $username ,
                                 'email' => $email,
                                 'entreprise' => $entreprise,
                                 'hash' => md5(rand(0, 1000)),
                                 'password' => md5($password),
                                 'created_on' => date('Y-m-d'));

        //verification de l'email
        $existe = $this->ion_auth_model->email_existe_deja($email);   
        if ($existe == false) {
        //fin verificationemail
                $this->db->insert('users',$data);
                //$this->session->set_flashdata("success","Votre inscription s'est effectué avec succés, veuillez attendre l'activation de votre compte");
                //redirect("login/register","refresh");
        

        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('form_inscription');
        }
        else
        {
            //configuration :*
           
            //chargement du librairie email :
            $this->load->library('email');
            $this->email->initialize(array(
 
              'mailtype'=> "html",
            ));

            $this->email->from('modou.pailine@gmail.com', 'paieline email service'); // change it to yours
            $this->email->to($email);// change it to yours
            $this->email->cc($email);
            //  $this->email->bcc('ndiayescab@gmail.com');
            $this->email->subject('Confirmez votre inscription');


            $message= /*-----------email body starts-----------*/
                    'Bonjour '.$prenom.' '.$nom.'! 
                     veuillez cliquer sur le lien suivant pour valider votre inscription:
                     ' . base_url() . 'index.php/Inscription/verify?' . 
                     'email=' . $_POST['email'] . '&hash=' . $data['hash'] .'  '.'Login = '.$username.' Mot de passe = '.$password;
     
                   /*-----------email body ends-----------*/        
            $this->email->message($message);
           // $this->email->send();
            //redirections pour informer l'utilisateur de l'envoi du mail :
            if($this->email->send()){
                $this->load->view('send_email');
            }else 
            {
             show_error($this->email->print_debugger());
            }
        }
    }else 
       //il existe dejà un employeur avec ce meme email 
       {
           //message d'erreur

       }

       // $this->load->view('send_email');
    } 
}

?>