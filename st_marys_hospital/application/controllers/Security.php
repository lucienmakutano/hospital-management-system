<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Security extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('id')){
			redirect('welcome/login');
		}
	}

	public function changePassword(){
		$this->load->view('manage_accounts/change_password');
	}

	public function updatePassword()
	{
		$userId = 2;


		$this->form_validation->set_rules('old-password', 'Od Password', "required");
		$this->form_validation->set_rules('new-password', 'New Password', "required");
		$this->form_validation->set_rules('confirm-password', 'confirm-password', "required|matches[password]");

		if (!$this->form_validation->run())
		{
			$this->load->view('manage_accounts/change_password');
		}

		$password = array(
			'password' => $this->encrypt->encode($this->input->post('new-password'))
		);

		$this->UpdateDB->updatePassword($userId, $password);
		redirect($this->session->userdata('userType'));
	}
}
