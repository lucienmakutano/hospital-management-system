<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WriteDB extends CI_Model
{
	function addNews($data){
		if (isset($data)) {
			$this->db->insert('news', $data);
			return "the news has been successfully posted";
		}
		else{
			return "No data was passed";
		}
	}

	function add_medicine($data){
		$this->db->insert('medicine', $data);
		return "the medicine was add successfully";
	}

	function add_provider($data){
		$this->db->insert('provider', $data);
		return "A new provider was add successfully";
	}

	function add_patient($data){
		$this->db->insert('patient', $data);
		return "A new patient was add successfully";
	}

	public function book_appointment($data)
	{
		$this->db->insert('appointment',$data);
		return "A new appointment was add successfully";
	}

	public function assign_room($data){
		$this->db->insert('patient_room',$data);
		return "A new patient was assign successfully";
	}

	public function add_room($data){
		$this->db->insert('room', $data);
		return "A new patient was assign successfully";
	}
	public function add_diagnosis($data){
		$this->db->insert('diagnosis',$data);
		return "Diagnosis added successfully";
	}
	public function add_prescription($data){
		$this->db->insert('prescriptions',$data);
		return "prescriptions added successfully";
	}
}
