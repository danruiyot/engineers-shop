<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->model('enquiry_model');
		$this->load->model('customer_model');
		$this->load->library('upload');

		$user_id = $this->session->userdata('userId');
		if($user_id == NULL){redirect('auth/login');} 
	}

	public function index()
	{
	        $config["base_url"] = base_url() . "enquiry/index/";
	        $config["total_rows"] = $this->enquiry_model->get_count();
	        $config["per_page"] = 10;
	        $config["uri_segment"] = 3;
			$config["num_links"] = 7;


		$this->pagination->initialize($config);

	        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data["links"] =$this->pagination->create_links();
		$data['items'] = $this->enquiry_model->getThemall($config["per_page"], $page);
		$data['title'] = 'Enquiry list';

		$level = $this->session->userdata('level');

		if ($level == 1){
			$this->load->view('templates/sidebar', $data);

		}else{

			$this->load->view('templates/header', $data);
		}
		$this->load->view('pages/enquiry_list', $data);
		$this->load->view('templates/footer');
	}


	public function create($e_id = NULL)
	{
		$data['items'] = $this->enquiry_model->get_enquiries($e_id);
		$data['customers'] = $this->customer_model->get_all();

		if (! empty($e_id)) {
	$data['title'] = 'Enquiry Edit';

			$level = $this->session->userdata('level');

			if ($level == 1){
				$this->load->view('templates/sidebar', $data);
				$this->load->view('pages/enquiry_edit', $data);
				$this->load->view('templates/footer');

			}else{

				$this->session->set_flashdata('error', 'You dont have the permissions');

				redirect('enquiry', 'refresh');
			}
		}else{

		$data['title'] = 'Enquiry Entry';

			$level = $this->session->userdata('level');

			if ($level == 1){
				$this->load->view('templates/sidebar', $data);

			}else{

				$this->load->view('templates/header', $data);
			}
		$this->load->view('pages/enquiry_entry', $data);
		$this->load->view('templates/footer');
		}
//  $this->session->set_flashdata('success', 'Successfully added');

	}
public function edit($e_id)
	{
		$level = $this->session->userdata('level');

		if ($level == 1){
			$this->enquiry_model->edit($e_id);
			$this->session->set_flashdata('success', 'Successfully Edited');
			redirect ('enquiry', 'refresh');

		}else{
			$this->session->set_flashdata('error', 'Permision denied');

			redirect ('enquiry', 'refresh');

		}


	}

	public function view($e_id = NULL)
	{
		$data['title'] = 'Enquiry Details';

		$data['item'] = $this->enquiry_model->get_enquiries($e_id);
		$data['customs'] = $this->customer_model->get_one($e_id);


		if (empty($data['item']))
		{
			show_404();
		}

		$this->load->view('templates/sidebar', $data);
		$this->load->view('pages/enquiry_view', $data);
		$this->load->view('templates/footer');

	}


		public function save($e_id = NULL)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['customers'] = $this->customer_model->get_all();
		$data['title'] = 'Add a Enquiry';

		$this->form_validation->set_rules('quantity', 'Quantity ', 'required');
		$this->form_validation->set_rules('customer_requirements', 'Customer Requirement', 'required');
		$this->form_validation->set_rules('enq_type', 'Enquiry type', 'required');


		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/sidebar', $data);
			$this->load->view('pages/enquiry_entry', $data);
			$this->load->view('templates/footer');

		}
		elseif (! empty($e_id)) {

			$this->enquiry_model->new_enq($e_id);
			$this->session->set_flashdata('success', 'Successfully Edited');

					redirect('enquiry', 'refresh');
			}else{

			$filesCount = count($_FILES['file']['name']);
			for($i = 0; $i < $filesCount; $i++) {
				$_FILES['files']['name'] = $_FILES['file']['name'][$i];
				$_FILES['files']['type'] = $_FILES['file']['type'][$i];
				$_FILES['files']['tmp_name'] = $_FILES['file']['tmp_name'][$i];
				$_FILES['files']['error'] = $_FILES['file']['error'][$i];
				$_FILES['files']['size'] = $_FILES['file']['size'][$i];

				$config['upload_path'] = './assets/docs/';
				$config['allowed_types'] = 'jpg|jpeg|png|docx|doc|ppt|csv|xlsx';
				// load CI libarary called upload

				$this->upload->initialize($config);

				// body of if clause will be executed when image uploading is failed
				if (!$this->upload->do_upload('files')) {
					$errors = array('errors' => $this->upload->display_errors());
					$this->session->set_flashdata('error', $this->upload->display_errors());
					redirect('enquiry/create', 'refresh');
				} else {
					$upload_data = $this->upload->data();
					//get the uploaded file name
					$data['file'] = $upload_data[$i]['file_name'];
				//	$uploadData[$i]['file_name'] = $fileData['file_name'];
					//$uploadData[$i]['uploaded_on'] = date("Y-m-d H:i:s");


					//store pic data to the db
					$this->enquiry_model->new_enq($data);
					$this->session->set_flashdata('success', 'Successfully added');

					redirect('enquiry/create');

				}
			}
				
			}
		}

		public function delete()
	{
		$level = $this->session->userdata('level');

		if ($level == 1){
			$e_id = $this->uri->segment(3);

			if (empty($e_id))
			{
				show_404();
			}

			$notes = $this->enquiry_model->delete($e_id);
			$this->session->set_flashdata('success', 'Successfully Deleted');


			redirect('enquiry', 'refresh');
		}else{
			$this->session->set_flashdata('error', 'You dont have the permissions');

			redirect('enquiry', 'refresh');
		}

	}
		public function approve($approve = NULL)
	{
	        $config["base_url"] = base_url() . "enquiry/approve";
	        $config["total_rows"] = $this->enquiry_model->get_count();
	        $config["per_page"] = 10;
	        $config["uri_segment"] = 2;

	        $this->pagination->initialize($config);

	        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data["links"] =$this->pagination->create_links();
		$data['items'] = $this->enquiry_model->getUnapproved($config["per_page"], $page);
		$data['title'] = 'List Of unapproved Enquiries';

	if (empty($approve)) {

		$this->load->view('templates/sidebar', $data);
		$this->load->view('pages/enquiry_approval', $data);
		$this->load->view('templates/footer');


			}else{
				$this->session->set_flashdata('success', 'Successfully Aproved');
				$this->enquiry_model->approve($approve);
				redirect('enquiry/approve', 'refresh');

			}
	}


}
