<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model{

	function log_in($email, $password){

		$query = $this->db->get_where('staff', array('email' => $email));

		if ($query->num_rows() > 0){

			foreach ($query->result() as $row){
				$pwd = $this->encrypt->decode($row->password);

				if ($pwd == $password){
					$this->session->set_userdata(array('id' => $row->staff_id));
					return $query->result();
				}
				else{
					return "wrong password";
				}
			}
		}
		else{
			return 'wrong email address';
		}
//		return $query->result();
	}
}