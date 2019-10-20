<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FetchDB extends CI_Model
{
	function get_news(){
		$data = $this->db->get('news');
		return $data->result();
	}

}
