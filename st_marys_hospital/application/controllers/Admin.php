<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		if (!$this->session->userdata('id')){
			redirect('welcome/login');
		}
		
		if ($this->session->userdata('userType') !== "admin"){
			redirect(current_url());
		}
	}

	public function index($value='')
    {
		$users = $this->FetchDB->retrieve_users();
		$this->load->view('admin/home', array('users' => $users));
    }

    public function addUser($value=''){
    	$this->load->view('admin/addUser');
	}

    public function news($value=''){
    	$this->load->view('admin/addNews');
	}
}
