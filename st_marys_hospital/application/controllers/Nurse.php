<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Nurse extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('userType') !== "nurse"){
			redirect(current_url());
		}
		if (!$this->session->userdata('id')){
			redirect('welcome/login');
		}
	}

    public function index($value='')
    {
        $this->load->view('nurse/home');
    }

    public function newPatient($value='')
    {
        $this->load->view('nurse/register_Patient');
    }

    public function newAppointment($value='')
    {
        $this->load->view('nurse/appointment_form');
    }

    public function assignRoom($value='')
    {
        $this->load->view('nurse/assignRoom');
    }
}
