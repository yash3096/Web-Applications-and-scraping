<?php
    class Users_model extends CI_Model {
        
		public function __construct(){
			parent::__construct();
			
			$this->load->database();
		}
		
        public function insert($username, $password, $gender) {
        	//Load the database only once inside the constructor.
			//$this->load->database();
			$data = array('username' => $username, 'password' => $password, 'gender' => $gender );
			$result = $this->db->insert('users',$data);
			return $result;
        }
		
		public function selectAllUsers(){
			//get the database contents in the form of a 2D row	
			$result = $this->db->get('users');
			//return the 2D array
			return $result->result_array();	
		}
    }
    
?>