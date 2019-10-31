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
    	$patientInfo = $this->FetchDB->getPatient();
        $this->load->view('nurse/home', array('patientInfos'=> $patientInfo));
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

	public function add_room($value='')
	{
		$this->load->view('nurse/room');
	}

	public function diagnosis($value='')
	{
		$this->load->view('nurse/diagnosis');
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
