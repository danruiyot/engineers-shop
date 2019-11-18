<?php
class Quatation extends CI_Controller {

		public function __construct()
	{
		parent::__construct();
		$this->load->model('contactperson_model');
		$this->load->model('quatation_model');
		$this->load->model('forwarding_model');

		$user_id = $this->session->userdata('userId');
		if($user_id == NULL){redirect('auth/login');}

	}

	public function index()
	{
		$data["enquiries"] = $this->quatation_model->get_enquiries();
		$level = $this->session->userdata('level');


		$data['title'] = 'Enquries to be quoted';
		if ($level == 2){
			$this->load->view('templates/header', $data);

		}else{

			$this->load->view('templates/sidebar', $data);
		}
		$this->load->view('pages/quatation', $data);
		$this->load->view('templates/footer');
	}
	public function quoteted()
	{
		$data["enquiries"] = $this->quatation_model->quoteted();


		$data['title'] = 'Quoted Enquiries';
		$level = $this->session->userdata('level');

		if ($level == 2){
			$this->load->view('templates/header', $data);

		}else{

			$this->load->view('templates/sidebar', $data);
		}
		$this->load->view('pages/quatation', $data);
		$this->load->view('templates/footer');
	}
		public function send($e_id) {

				$this->session->set_flashdata('success', 'Successfully Send');
				$this->quatation_model->send($e_id);
				redirect('quatation/', 'refresh');
	}
	
		public function detatils($e_id)
	{
		$data["row"] = $this->quatation_model->get_enquiries($e_id);
		$data['items'] = $this->forwarding_model->get_enquiries();


		$data['title'] = 'Enqury approval';
		$level = $this->session->userdata('level');

		if ($level == 2){
			$this->load->view('templates/header', $data);

		}else{

			$this->load->view('templates/sidebar', $data);
		}
		$this->load->view('pages/quatation_details', $data);
		$this->load->view('templates/footer');
	}
}
