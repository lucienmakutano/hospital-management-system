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

        	$results = $this->Login->log_in($email, $password);

        	if (is_array($results)){
        		if (isset($results)){
        			foreach ($results as $result){
						if ($result->user_type == 'admin'){
							redirect('admin');
							break;
						}elseif ($result->user_type == 'doctor'){
							redirect('doctor/appointment');
							break;
						}elseif ($result->user_type == 'pharmacist'){
							redirect('pharmacist');
							break;
						}
						elseif ($result->user_type == 'nurse'){
							redirect('nurse');
							break;
						}
					}
				}
        		else{
					$this->session->set_flashdata('message', $results);
					redirect('welcome/login');
				}
			}
        	else{
        		if ($results){
					$this->session->set_flashdata('message', $results);
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

    public function add_medicine($value='')
    {
		$this->form_validation->set_rules('medicine-name', "Medicine name", "required|alpha|max_length[50]");
		$this->form_validation->set_rules('quantity', 'Quantity', "required|numeric");
		$this->form_validation->set_rules('price', 'Price', "required|numeric");
		$this->form_validation->set_rules('provider', 'Provider', "required");

		if($this->form_validation->run()){
			$data = array(
				'medicine_name' => $this->input->post('medicine-name'),
				'quantity' => $this->input->post('quantity'),
				'price_per_tablet' => $this->input->post('price'),
				'provider' => $this->input->post('provider')
			);

			$this->WriteDB->add_medicine($data);
			redirect('pharmacist');
		}
		else{
			$this->load->view('pharmacist/addMedicine');
		}
    }

    public function add_provider(){
		$this->form_validation->set_rules('company-name', "Company name", "required|is_unique[provider.name]");
		$this->form_validation->set_rules('address', 'Address', "required");
		$this->form_validation->set_rules('email', 'Email', "required|valid_email");
		$this->form_validation->set_rules('phone', 'Telephone number', "required|numeric|exact_length[10]");

		if($this->form_validation->run()){
			$data = array(
				'name' => $this->input->post('company-name'),
				'address' => $this->input->post('address'),
				'email' => $this->input->post('email'),
				'phone_number' => $this->input->post('phone')
			);

			$this->WriteDB->add_provider($data);
			redirect('pharmacist');
		}
		else{
			$this->load->view('pharmacist/provider');
		}
	}

    public function newUser($value=''){

		$config = array(
			'upload_path' => './uploads',
			'allowed_types' => "png|jpg|gif|jpeg|svg"
		);

		$this->load->library('upload', $config);

		$this->form_validation->set_rules('profile-picture', 'Profile Picture');
		$this->form_validation->set_rules('first-name', 'First name', "required|alpha|max_length[30]");
		$this->form_validation->set_rules('last-name', 'Last name', "required|alpha|max_length[30]");
		$this->form_validation->set_rules('dob', 'Date of birth', "required");
		$this->form_validation->set_rules('gender', 'gender', "required|alpha|max_length[6]");
		$this->form_validation->set_rules('email', 'Email', "required|is_unique[staff.email]|valid_email");
		$this->form_validation->set_rules('phone-number', 'Phone number', "required|numeric|max_length[10]");
		$this->form_validation->set_rules('user-type', 'User type', "required");
		$this->form_validation->set_rules('password', 'Password',"required|alpha_numeric|min_length[8]");
		$this->form_validation->set_rules('speciality', 'Speciality');


		if ($this->form_validation->run() && $this->upload->do_upload('profile-picture')) {
			$verification_key = md5(rand());
			$info = $this->upload->data();

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
				'profile_picture' => base_url("uploads/" . $info['raw_name'] . $info['file_ext']),
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
