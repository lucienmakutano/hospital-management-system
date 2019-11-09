<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists("paginatePatients"))
{
	function paginatePatients($tableName)
	{
		$ci =& get_instance();
		$ci->load->library('pagination');
		$ci->load->library('table');

		$config['base_url'] = base_url() . 'nurse/index';
		$config['total_rows'] = $ci->db->get($tableName)->num_rows();
		$config['per_page'] = 5;
		$config['num_links'] = 5;


		$config['records'] = $ci->db->get($tableName, $config['per_page'], $ci->uri->segment(3));
		$ci->pagination->initialize($config);

		return $config['records'];
	}
}


if (!function_exists("paginateAppointments"))
{
	function paginateAppointments($tableName)
	{
		$ci =& get_instance();
		$ci->load->library('pagination');
		$ci->load->library('table');

		$config['base_url'] = base_url() . 'nurse/index';
		$config['total_rows'] = $ci->db->get_where($tableName, array('checked' => 0))->num_rows();
		$config['per_page'] = 5;
		$config['num_links'] = 5;


		$config['records'] = $ci->db->order_by("$tableName.date", 'DESC')
									->select('citation_card, lname, date, summary')
									->join('staff', "$tableName.doctor_id = staff.staff_id")
									->get_where($tableName, array('checked' => 0), $config['per_page'], $ci->uri->segment(3));

		$ci->pagination->initialize($config);

		return $config['records'];
	}
}

