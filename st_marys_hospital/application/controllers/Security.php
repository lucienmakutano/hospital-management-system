<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Security extends CI_Controller{

	public function forgotPassword(){
		$this->load->view('manage_accounts/forgot_password');
	}
	public function changePassword(){
		$this->load->view('manage_accounts/change_password');
	}
}
