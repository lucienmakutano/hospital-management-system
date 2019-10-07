<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class St_mary extends CI_Controller
{

    public function index($value='')
    {
        $this->load->view('home/home');
    }
}
