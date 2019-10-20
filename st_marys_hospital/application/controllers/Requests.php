<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class Requests extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function login_users($value='')
    {
    	$this->form_validation->set_rules('email', 'Email', "required|valid_email");
		$this->form_validation->set_rules('password', 'Password', "required|min_length[8]");

        if ($this->form_validation->run()){
            $email = $this->input->post('email');
            $password = $this->input->post('password');

        	$result = $this->Login->log_in($email, $password);

        	if (is_array($result)){
        		if (isset($result)){
        			foreach ($result as $results){
						if ($results->user_type == 'admin'){
							redirect('admin');
							break;
						}elseif ($results->user_type == 'doctor'){
							redirect('doctor');
							break;
						}elseif ($results->user_type == 'pharmacist'){
							redirect('pharmacist');
							break;
						}
						elseif ($results->user_type == 'nurse'){
							redirect('nurse');
							break;
						}
					}
				}
        		else{
					$this->session->set_flashdata('message', $result);
					redirect('welcome/login');
				}
			}
        	else{
        		if ($result){
					$this->session->set_flashdata('message', $result);
					redirect('welcome/login');
				}
			}
		}
        else{
                $this->load->view('login/login');
        }
    }

	public function logout() {
		$data = $this->session->all_userdata();
		foreach ($data as $row => $row_value){
			$this->session->unset_userdata($row);
		}
		redirect('st_mary');
	}
    public function change_password($value='')
    {
        //body
    }

    public function forgot_password($value='')
    {
        //body
    }

    public function book_appointment($value='')
    {
        //body
    }

    public function assign_room($value='')
    {
        //body
    }

    public function add_patient($value='')
    {
        //body
    }

    public function new_prescription($value='')
    {
        //body
    }

    public function add_news($value='')
    {
        $this->form_validation->set_rules('title', 'Title', "required");
        $this->form_validation->set_rules('message', 'Message', "required|max_length[500]");

        if ($this->form_validation->run()) {

            $data = array(
                'title' => $this->input->post('title'),
                'message' => $this->input->post('message'),
                'date' => date('Y-m-d H:i:m')
            );

            $message = $this->WriteDB->addNews($data);
            $this->session->set_flashdata('message', $message);
            redirect('admin');
        }
        else {
            $this->load->view('admin/addNews');
        }
    }

    public function add_user($value='')
    {
        //body
    }

    public function newUser($value=''){

		$this->form_validation->set_rules('first-name', 'First name', "required|alpha|max_length[30]");
		$this->form_validation->set_rules('last-name', 'Last name', "required|alpha|max_length[30]");
		$this->form_validation->set_rules('dob', 'Date of birth', "required");
		$this->form_validation->set_rules('gender', 'gender', "required|alpha|max_length[6]");
		$this->form_validation->set_rules('email', 'Email', "required|is_unique[staff.email]|valid_email");
		$this->form_validation->set_rules('phone-number', 'Phone number', "required|numeric|max_length[10]");
		$this->form_validation->set_rules('user-type', 'User type', "required");
		$this->form_validation->set_rules('password', 'Password',"required|alpha_numeric|min_length[8]");
		$this->form_validation->set_rules('speciality', 'Speciality');

		if ($this->form_validation->run()) {
			$verification_key = md5(rand());
			$doc_speciality = array(
				'speciality' => $this->input->post('specialities')
			);
			$data = array(
				'fname' => $this->input->post('first-name'),
				'lname' => $this->input->post('last-name'),
				'dob' => date("Y-m-d", strtotime($this->input->post('dob'))),
				'gender' => $this->input->post('gender'),
				'email' => $this->input->post('email'),
				'phone_number' => $this->input->post('phone-number'),
				'user_type' => $this->input->post('user-type'),
				'password' => $this->encrypt->encode($this->input->post('password')),
				'verification_key' => $verification_key
			);


			if ($doc_speciality['speciality']) {
				$id = $this->RegisterUser->register_user($data, $doc_speciality);
				redirect('admin');
			} else {
				$id = $this->RegisterUser->register_user($data);
				redirect('admin');
			}
		}

    	else{
			$this->load->view('admin/addUser');
		}
	}
}
