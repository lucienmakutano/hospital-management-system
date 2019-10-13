<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Admin extends CI_Controller
{

    public function index($value='')
    {
        $this->load->view('admin/home');
    }

    public function addUser($value=''){
    	$this->load->view('admin/addUser');
	}
}
