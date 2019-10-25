<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FetchDB extends CI_Model
{
	function get_news(){
		$data = $this->db->get('news');
		return $data->result();
	}

	function retrieve_users(){
		$query = $this->db->get('staff');
		return $query->result();
	}

	function retrieve_providers(){
		$this->db->select('name');
		$query = $this->db->get('provider');
		return $query->result();
	}

	function retrieve_medicines(){
		$query = $this->db->get('medicine');
		return $query->result();
	}
}
