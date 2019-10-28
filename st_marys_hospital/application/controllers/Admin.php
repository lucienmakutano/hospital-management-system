<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		
		if (!$this->session->userdata('id')){
			redirect('welcome/login');
		}
		
		if ($this->session->userdata('userType') !== "admin"){
			redirect(current_url());
		}
	}

	public function index($value='')
    {
		$users = $this->FetchDB->retrieve_users();
		$this->load->view('admin/home', array('users' => $users));
    }

    public function addUser($value=''){
    	$this->load->view('admin/addUser');
	}

    public function news($value=''){
    	$this->load->view('admin/addNews');
	}

	public function edit_user($user_id){
		$data = $this->FetchDB->get_user_detail($user_id);
		$this->load->view('admin/edit_user', array('user_infos' => $data));
	}

	public function update_user($user_id){
		$config = array(
			'upload_path' => './uploads',
			'allowed_types' => "png|jpg|gif|jpeg|svg"
		);

		$this->load->library('upload', $config);

		$info = $this->upload->data();

		if (true){
			$speciality  = $this->input->post('speciality');
			$user_data = array(
				'fname' => $this->input->post('f-name'),
				'lname' => $this->input->post('l-name'),
				'dob' => date("Y-m-d", strtotime($this->input->post('dob'))),
				'gender' => $this->input->post('gender'),
				'email' => $this->input->post('email'),
				'phone_number' => $this->input->post('phone'),
				'user_type' => $this->input->post('user')
			);

			if ($this->upload->do_upload('profile')){
				$user_data['profile_picture'] = base_url("uploads/" . $info['raw_name'] . $info['file_ext']);
				$this->UpdateDB->update_user_records($user_id,$user_data);
				redirect('admin');
			}
			elseif (!empty($speciality)){
				$this->UpdateDB->update_user_records($user_id, $user_data, $speciality);
				redirect('admin');
			}
			else{
				$this->UpdateDB->update_user_records($user_id, $user_data);
				redirect('admin');
			}
		}
		else{
			redirect("admin/edit_user/$user_id");
		}
	}

	function delete_user($user_id){
		$this->DeleteDB->delete_user($user_id);
		redirect('admin');
	}
}
