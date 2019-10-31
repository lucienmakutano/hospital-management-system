<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Doctor extends CI_Controller
{
	function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('id')){
			redirect('welcome/login');
		}
		
		if ($this->session->userdata('userType') !== "doctor"){
			redirect(current_url());
		}
	}

    public function index($value='')
    {
        $this->load->view('doctor/home');
    }

    public function appointment($value='')
    {
    	$data= $this->FetchDB->appointment();
        $this->load->view('doctor/appointment',array('data' => $data));
    }

    public function prescription($value='')
    {
        $this->load->view('doctor/prescription');
    }


    public function moredetails($value='')
    {   
        // $data= $this->FetchDB->moredetail();
        // $this->load->view('doctor/moredetails',array('data'=>$data));
        $this->load->view('doctor/moredetails');
    }
}
