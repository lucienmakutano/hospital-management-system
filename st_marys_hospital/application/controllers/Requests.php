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

		$config = array(
			'upload_path' => './uploads',
			'allowed_types' => "png|jpg|gif|jpeg|svg"
		);

		$this->load->library('upload', $config);
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
      $this->form_validation->set_rules('card',"Patient's citation card ","required|numeric");
      $this->form_validation->set_rules('id',"Doctor's ID","required|numeric");
      $this->form_validation->set_rules('date',"Appointment Date","required|is_unique[appointment.date]");
      $this->form_validation->set_rules('symptom','Brief summary of the symptom ','required');


      if ($this->form_validation->run()) {
      	$appointment = array(
      		'doctor_id' => $this->input->post('id'),
			'Citation_card' => $this->input->post('card'),
			'date' => $this->input->post('date'),
			'summary' => $this->input->post('symptom')
		);

      	$this->WriteDB->book_appointment($appointment);
      	redirect('nurse');
      } else {
      	redirect('nurse/newAppointment');
      }
    }

    public function assign_room($value='')
    {
			$this->form_validation->set_rules("card","Patient's citation card",'required|numeric');
			$this->form_validation->set_rules('number'," Room number",'required|numeric');


			if ($this->form_validation->run()) {
				$room = array(
					'patient_id' => $this->input->post('card'),
					'room_id' => $this->input->post('number')
				);
				$this->WriteDB->assign_room($room);
				redirect('nurse');
			} else {
				$this->load->view('nurse/assignRoom');
			}


    }

    public function add_patient($value='')
    {
        $this->form_validation->set_rules('fname', 'Firtst name', "required|alpha");
				$this->form_validation->set_rules('lname', 'Last name', "required|alpha");
				$this->form_validation->set_rules('dob', 'Date of birth', "required");
				$this->form_validation->set_rules('gender', 'Gender', "required|alpha|max_length[6]|in_list[male, female]");
				$this->form_validation->set_rules('phone', 'Telephone number', "required|numeric");
				$this->form_validation->set_rules('address', 'Address', "required");

				if ($this->form_validation->run()) {
					$patient_info = array(
						'fname' => $this->input->post('fname'),
						'lname' => $this->input->post('lname'),
						'DOB' => $this->input->post('dob'),
						'gender' => $this->input->post('gender'),
						'phonenumber' => $this->input->post('phone'),
						'address' => $this->input->post('address')
					);

					$this->WriteDB->add_patient($patient_info);
					redirect('nurse');

				} else {
					$this->load->view('nurse/register_patient');
				}
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
		$this->form_validation->set_rules('medicine', "Medicine name", "required");
		$this->form_validation->set_rules('quantity', 'Quantity', "required|numeric");
		$this->form_validation->set_rules('price', 'Price', "required|numeric");
		$this->form_validation->set_rules('expiry-date', 'Expiry date', "required");
		$this->form_validation->set_rules('provider', 'Provider', "required");

		if($this->form_validation->run()){
			$data = array(
				'medic_id' => $this->input->post('medicine'),
				'quantity' => $this->input->post('quantity'),
				'expiry_date' => $this->input->post('expiry-date'),
				'price_per_tablet' => $this->input->post('price'),
				'provider' => $this->input->post('provider')
			);


			$expiry_date = strtotime($this->input->post('expiry-date'));
			$current_date = strtotime(date('Y-m-d'));


			if ($expiry_date <= $current_date)
			{
				$this->session->set_flashdata("error", "the medicine you are trying to record has already expired");
				$this->load->view('pharmacist/addMedicine');
			}
			elseif (($expiry_date - $current_date) <= 2505600)
			{
				$this->session->set_flashdata("error", "the medicine you are trying to record is going to expire soon");
				$this->load->view('pharmacist/addMedicine');
			}
			else{
				$this->WriteDB->add_medicine($data);
				redirect('pharmacist');
			}

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

function diagnosis($value=''){
	//
}
function update_user($user_id){


}
