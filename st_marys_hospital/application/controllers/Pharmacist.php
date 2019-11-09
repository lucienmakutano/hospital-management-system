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

		if ($this->session->userdata('userType') !== "pharmacist"){
			redirect(current_url());
		}

	}

    public function index($value='')
    {
		$medicines = $this->FetchDB->retrieve_medicines();
        $this->load->view('pharmacist/home', array('medicines' => $medicines));
    }

	public function addMedicine($value='')
	{
		$providers = $this->FetchDB->retrieve_providers();
		$medicines = $this->FetchDB->getMedicine();
		$this->load->view('pharmacist/addMedicine', array('providers' => $providers, 'medicines' => $medicines));
	}

	public function view_prescription($value=''){
		$data = array(
			"patient_1" => array(
				"dosage" => 10,
				"medicine" => "paracetamol",
				"citation_card" => "123456"
			),
			"patient_2" => array(
				"dosage" => 10,
				"medicine" => "paracetamol",
				"citation_card" => "123456"
			),
			"patient_3" => array(
				"dosage" => 10,
				"medicine" => "paracetamol",
				"citation_card" => "123456"
			),
			"patient_4" => array(
				"dosage" => 10,
				"medicine" => "paracetamol",
				"citation_card" => "123456"
			),
			"patient_5" => array(
				"dosage" => 10,
				"medicine" => "paracetamol",
				"citation_card" => "123456"
			),
			"patient_6" => array(
				"dosage" => 10,
				"medicine" => "paracetamol",
				"citation_card" => "123456"
			)
		);
		$this->load->view('pharmacist/viewPrescription', array('data' => $data));
	}

	public function provider(){
		$this->load->view('pharmacist/provider');
	}
}
