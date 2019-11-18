<?php
class Forwarding extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->model('contactperson_model');
		$this->load->model('customer_model');
		$this->load->model('employee_model');
		$this->load->model('enquiry_model');
		$this->load->model('home_model');
		$this->load->model('forwarding_model');
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
		$data['items'] = $this->forwarding_model->get_enquiries();


		$data['title'] = 'Forwarding to Vendors';
		$this->load->view('templates/sidebar', $data);
		$this->load->view('pages/to_vendors', $data);
		$this->load->view('templates/footer');
	}
		public function send($e_id) {

				$this->session->set_flashdata('success', 'Successfully Send');
				$this->forwarding_model->send($e_id);
				redirect('forwarding/', 'refresh');
	}
}
