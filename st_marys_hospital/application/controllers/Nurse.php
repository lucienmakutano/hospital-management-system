<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 *
 */
class Nurse extends CI_Controller
{

    public function index($value='')
    {
        $this->load->view('nurse/home');
    }
}
