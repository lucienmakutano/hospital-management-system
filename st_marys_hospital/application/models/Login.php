<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model{

	function log_in($email, $password){

		$query = $this->db->get_where('staff', array('email' => $email));

		if ($query->num_rows() > 0){

			foreach ($query->result() as $row){
				$pwd = $this->encrypt->decode($row->password);

				if ($pwd == $password){
					$this->session
						->set_userdata(array('id' => $row->staff_id,
							'firstName' =>$row->fname, 'lastName'=>$row->lname,
							'userType' =>$row->user_type, 'profile picture' => $row->profile_picture));

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
	}
}
