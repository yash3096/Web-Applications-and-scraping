<?php
    class Country_model extends CI_Model {
        
        public function __construct() {
            parent::__construct();
			$this->load->database();
        }
		
		public function findAll(){
			$countryList = $this->db->get('country');
			return $countryList->result_array();
		}
		
    }
?>