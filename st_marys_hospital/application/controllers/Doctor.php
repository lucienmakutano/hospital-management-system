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
	}

    public function index($value='')
    {
        $this->load->view('doctor/home');
    }
    public function appointment($value='')
    {
    	$data  = array(
    		'appointment_1' => array(
    			'citation card' => 'SMHP12345',
				'doctor id' => 'SMHD12345',
				'date' => '12/12/2019',
				'time' => '12:30',
				'summary' => 'lorem ipsum some dummy text'
			),
			'appointment_2' => array(
				'citation card' => 'SMHP12365',
				'doctor id' => 'SMHD123445',
				'date' => '12/12/2019',
				'time' => '12:30',
				'summary' => 'lorem ipsum some dummy texts'
			),
			'appointment_3' => array(
				'citation card' => 'SMHP12345',
				'doctor id' => 'SMHD12345',
				'date' => '12/12/2019',
				'time' => '12:30',
				'summary' => 'this is the summary of the symptoms'
			),
			'appointment_4' => array(
				'citation card' => 'SMHP12345',
				'doctor id' => 'SMHD12345',
				'date' => '12/12/2019',
				'time' => '12:30',
				'summary' => 'lorem ipsum some dummy text'
			),
			'appointment_5' => array(
				'citation card' => 'SMHP12345',
				'doctor id' => 'SMHD12345',
				'date' => '12/12/2019',
				'time' => '12:30',
				'summary' => 'lorem ipsum some dummy text'
			),
			'appointment_6' => array(
				'citation card' => 'SMHP12345',
				'doctor id' => 'SMHD12345',
				'date' => '12/12/2019',
				'time' => '12:30',
				'summary' => 'blablablablabla'
			),
		);

        $this->load->view('doctor/appointment',array('data' => $data));
    }
    public function prescription($value='')
    {
        $this->load->view('doctor/prescription');
    }
}
