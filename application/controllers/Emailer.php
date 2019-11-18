<?php
class Emailer extends CI_Controller {

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
			$this->load->library('email');

			$this->email->from('druiyot@gmail.com', 'Your Name');
			$this->email->to('someone@example.com');
			$this->email->cc('another@another-example.com');
			$this->email->bcc('them@their-example.com');

			$this->email->subject('Email Test');
			$this->email->message('Testing the email class.');

			$this->email->send();
		//$this->load->view('welcome_message');

	}
}