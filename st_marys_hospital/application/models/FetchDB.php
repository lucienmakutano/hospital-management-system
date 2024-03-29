<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FetchDB extends CI_Model
{
	function get_news(){
		$data = $this->db->get('news');
		return $data->result();
	}


	public function getPatientById($citation_card){
		$result = $this->db->get_where('patient', array('citation_card' => $citation_card));
		return $result->result_array();
	}


	function retrieve_users(){
		$query = $this->db->get('staff');
		return $query->result();
	}





	function retrieve_providers(){
		$this->db->select('provider_id,name');
		$query = $this->db->get('provider');
		return $query->result();
	}




	function retrieve_medicines(){
		$query = $this->db->select('*')
			->join('provider', 'medicine.provider=provider.provider_id')
			->join('medicine_details', 'medicine_details.medicine_id=medicine.medic_id')
			->get('medicine');
		return $query->result();
	}




	public function getPatient(){
		$query = $this->db->get('patient');
		return $query->result();
	}




	function get_user_detail($user_id){
		$query = $this->db->get_where('staff', array('staff_id'=>$user_id));
		return $query->result();
	}




	function appointment(){
		$query=$this->db
					->join('patient', 'patient.Citation_card = appointment.citation_card')
					->get_where('appointment', array('checked' => false));
		return $query->result();
	}






	function getMedicine()
	{
		$query = $this->db->get('medicine_details');
		return $query->result();
	}







	function getDoctors()
	{
		$query = $this->db->select('staff_id, fname, lname')->get_where('staff', array('user_type' => 'doctor'));
		return $query->result();
	}







	function moredetail($citation_card){
		$query = $this->db->join('appointment', 'diagnosis.citation_card=appointment.Citation_card')
						->join('patient', 'patient.Citation_card = diagnosis.citation_card')
						->get_where('diagnosis', array('patient.Citation_card' => $citation_card), 1);
		return $query->result();
	}







	function getPrescriptions()
	{
		$query = $this->db->get_where('prescriptions', array('checked' => false));
		return $query->result();
	}



	public function getPrescriptionsById($prescription_id='')
	{
		$query = $this->db->get_where('prescriptions', array('prescription_id' => $prescription_id));
		return $query->result();
	}
}
