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
}
