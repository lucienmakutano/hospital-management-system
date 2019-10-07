<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Pharmacist extends CI_Controller
{

    public function index($value='')
    {
        $this->load->view('pharmacist/home');
    }
}
