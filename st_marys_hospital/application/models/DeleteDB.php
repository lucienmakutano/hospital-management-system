<?php


class DeleteDB extends CI_Model
{
	function delete_user($user_id){
		$this->db->delete('staff', array('staff_id' => $user_id));
	}
}
