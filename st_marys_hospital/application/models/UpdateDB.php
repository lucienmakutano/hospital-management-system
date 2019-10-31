<?php


class UpdateDB extends CI_Model
{
	public function update_user_records($user_id, $user_data, $speciality=''){
		$this->db->where('staff_id', $user_id);
		$this->db->update('staff', $user_data);

		if ($speciality){
			$data = array(
				'speciality' => $speciality
			);

			$this->db->where('id', $user_id);
			$this->db->update('specialities', $data);
		}
	}


	public function updatePassword($userId, $data)
	{
		$this->db->where('staff_id', $userId);
		$this->db->update('staff', $data);
	}
}
