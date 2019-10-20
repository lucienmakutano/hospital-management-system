<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Pharmacist extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if (!$this->session->userdata('id')){
			redirect('welcome/login');
		}
	}

    public function index($value='')
    {
        $this->load->view('pharmacist/home');
    }
}
