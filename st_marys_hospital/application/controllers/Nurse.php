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
		if (!$this->session->userdata('id')){
			redirect('welcome/login');
		}

		if ($this->session->userdata('userType') !== "nurse"){
			redirect(current_url());
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
    	$doctors = $this->FetchDB->getDoctors();
        $this->load->view('nurse/appointment_form', array('doctors' => $doctors));
    }

    public function assignRoom($value='')
    {
        $this->load->view('nurse/assignRoom');
    }

	public function add_room($value='')
	{
		$this->load->view('nurse/room');
	}

	public function diagnosis($value='')
	{
		$this->load->view('nurse/diagnosis');
	}
	public function new_diagnosis($value='')
	{
		$this->form_validation->set_rules('citation_card','citation card','required');
		$this->form_validation->set_rules('blood-p','blood pressure','required');
		$this->form_validation->set_rules('height','height','required');
		$this->form_validation->set_rules('weight','weight','required');
		$this->form_validation->set_rules('bmi','BMI','required');

		if (!$this->form_validation->run()) {
			$this->load->view('nurse/diagnosis');
		}


		$data= array(
			'citation_card'=> $this->input->post('citation_card'),
			'blood_pressure' =>$this->input->post('blood-p'),
			'height' =>$this->input->post('height'),
			'weight' => $this->input-> post('weight'),
			'BMI' => $this->input->post('bmi'),
		);
		$this->WriteDB->add_diagnosis($data);
		redirect('nurse/');
	}
	function new_room($value=''){
		$this->form_validation->set_rules('room-type', 'Room type', "required");
		$this->form_validation->set_rules('number-of-beds', 'Number of beds',"required");
		$this->form_validation->set_rules('price','Price','required|numeric');

		if ($this->form_validation->run()) {
			$rooms = array(
				'type' => $this->input->post('room-type'),
				'number_of_beds' => $this->input->post('number-of-beds'),
				'price' => $this->input->post('price')
			);
			$this->WriteDB->add_room($rooms);
			redirect('nurse');

		} else {
			$this->load->view('nurse/room');
		}
	}
}
