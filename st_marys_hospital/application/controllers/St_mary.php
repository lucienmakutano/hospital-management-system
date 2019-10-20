<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 */
class St_mary extends CI_Controller
{

    public function index($value='')
    {
		$data = $this->FetchDB->get_news();
		$this->load->view('home/home', array('data' => $data));
    }
}
