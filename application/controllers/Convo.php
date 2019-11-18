<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Convo extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('convo_model');
		$user_id = $this->session->userdata('userId');
		if($user_id == NULL){redirect('auth/login');}

	}

	public function index()
	{
		$data["convo"] = $this->convo_model->get_convos();
		echo 'access denied';
	}
	public function add()
	{

		$this->form_validation->set_rules('convo', 'Remarks', 'required');

		if ($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata('error', 'Error adding Convo');

			redirect('customer/view');

		}
		else
		{
			$this->session->set_flashdata('success', 'Successfully added coversation');

			$this->convo_model->add();
			redirect('customer/view');

		}
	}
}
