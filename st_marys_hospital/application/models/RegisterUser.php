<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterUser extends CI_Model{

	function register_user($data, $specialisation=null){
		if (isset($data)){
			$this->db->insert('staff', $data);

			if (isset($specialisation)){
				$specialisation['staff_id'] = $this->db->insert_id();
				$this->db->insert('specialities',  $specialisation);
			}
		}
		return $this->db->insert_id();
	}

	function retrieve_users(){
		$query = $this->db->get('staff');

		return $query->result();
	}
}
