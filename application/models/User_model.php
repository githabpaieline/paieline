<?php 

class User_model extends MY_Model {
        
      public function _construct(){
		//parent::__construct();
	} 

		function insertUsers($users){
			$this->db->insert('users', $users); 
		    
	}

	function get_hash_value($email){
		$this->db->select('hash');
		$this->db->from('users');
		$this->db->where(array('email' => $email));
		$query = $this->db->get();
	}
	function verify_user($email){
		        $donnee = array('is_verified' => 1);
                $this->db->set($donnee);
                $this->db->where('email', $email);
                $this->db->update('users');
	}
}