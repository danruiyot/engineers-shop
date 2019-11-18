<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contactperson_model');
		$this->load->model('customer_model');
		$this->load->model('employee_model');
		$this->load->model('enquiry_model');
		$this->load->model('home_model');
		$level = $this->session->userdata('level');
		if($level != 1){redirect('auth/login');}
		$user_id = $this->session->userdata('userId');
		if($user_id == NULL){redirect('auth/login');}

	}

	public function index()
	{
		$data["customers"] = $this->customer_model->get_count();
		$data["contact"] = $this->contactperson_model->get_count();
		$data["employee"] = $this->employee_model->get_count();
		$data["enquiries"] = $this->enquiry_model->get_count();
		$data["vendors"] = $this->home_model->get_count();

		$data['title'] = 'Dashboard';
		$this->load->view('templates/sidebar', $data);
		$this->load->view('pages/dashboard', $data);
		$this->load->view('templates/footer');
	}
}
