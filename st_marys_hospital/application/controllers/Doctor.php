<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Doctor extends CI_Controller
{

    public function index($value='')
    {
        $this->load->view('doctor/home');
    }
    public function appointment($value='')
    {
        $this->load->view('doctor/appointment');
    }
    public function prescription($value='')
    {
        $this->load->view('doctor/prescription');
    }
}
