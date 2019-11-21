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

    public function prescription($citation_card="")
    {
        $citation_c['Citation_card'] = $citation_card; 

        $this->form_validation->set_rules('patient-id', 'patient ID', "required");
        $this->form_validation->set_rules('doctor-id', 'doctor ID', "required");
        $this->form_validation->set_rules('description', 'prescription', "required");

        if ($this->form_validation->run()) 
        {
            $data= array(
                'Citation_card' =>$this->input->post('patient-id'),
                'doctor_id'=>$this->input->post('doctor-id'),
                'dosage'=>$this->input->post('description')
            );
            $this->WriteDB->add_prescription($data);
            $this->UpdateDB->appointment_checked($citation_card);
            redirect('doctor/appointment');
        }
        else
        {
        	$patient = $this->FetchDB->getPatientById($citation_card);
            $this->load->view('doctor/prescription', array('patient' => $patient));
        }

    }


    public function moredetails($diagnosis_id)
    {   
        $data = $this->FetchDB->moredetail($diagnosis_id);
        $this->load->view('doctor/moredetails', array('data'=>$data));
    }
}
