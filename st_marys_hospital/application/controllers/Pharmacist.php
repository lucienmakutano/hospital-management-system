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

	public function view_prescription($value='')
	{
		$prescriptions = $this->FetchDB->getPrescriptions();
		$this->load->view('pharmacist/viewPrescription', array('prescriptions' => $prescriptions));
	}

	public function provider(){
		$this->load->view('pharmacist/provider');
	}

	function checkout_medicine($prescription_id)
	{
		$prescriptions = $this->FetchDB->getPrescriptionsById($prescription_id);
		$this->load->view("pharmacist/checkoutMedicine", array('prescriptions' => $prescriptions));
	}


	public function dispatch()
	{
		$this->load->view('');
	}
}
