<?php
class Contact extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contactperson_model');
		$this->load->model('home_model');
		$user_id = $this->session->userdata('userId');
		if($user_id == NULL){redirect('auth/login');} 
	}

	public function view()
	{
			$config = array();
	        $config["base_url"] = base_url() . "contact/view/".$this->uri->segment(3);
	        $config["total_rows"] = $this->contactperson_model->get_count();
	        $config["per_page"] = 10;
			$config["num_links"] = 7;

			$config["uri_segment"] = 3;

	        $this->pagination->initialize($config);

	        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

			$data["links"] =$this->pagination->create_links();
			
			$data['contacts_all'] = $this->contactperson_model->getThemall($config["per_page"], $page);
			$data['title'] = 'Contact person list';

			if (empty($data['contacts_all']))
			{
				show_404();
			}

			$this->load->view('templates/sidebar', $data);
			$this->load->view('pages/contact_all', $data);
			$this->load->view('templates/footer');
	}

	public function view_single($contact_id = NULL)
	{
		$data['title'] = 'Contact person info';

		$data['item'] = $this->contactperson_model->getContact($contact_id);

		$this->load->view('templates/sidebar', $data);
		$this->load->view('pages/contact_view', $data);
		$this->load->view('templates/footer');

	}

	public function create($contact_id = NULL)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');
		$data['item'] = $this->contactperson_model->getContact($contact_id);
		

		$data['title'] = 'New Contact person';

		$this->form_validation->set_rules('contact_name', 'Name ', 'required');
		$this->form_validation->set_rules('designation', 'Designation', 'required');
		$this->form_validation->set_rules('mail1', 'Mail 1', 'required');
		$this->form_validation->set_rules('mobile1', 'Mobile 1 person', 'required');


		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/sidebar', $data);
			$this->load->view('pages/contact_new');
			$this->load->view('templates/footer');

		}
		else
		{
			if (empty($contact_id)) {

				$this->contactperson_model->new_contact();
				 $this->session->set_flashdata('success', 'Successfully added');

				$this->load->view('templates/sidebar', $data);
			$this->load->view('pages/contact_new');
			$this->load->view('templates/footer');

			}else{
				$this->contactperson_model->new_contact($contact_id);
				 $this->session->set_flashdata('success', 'Successfully Edited');

				redirect('contact/view');
			}
		}
	}

	public function edit($contact_id = NULL){
		$data['title'] = 'Edit Contact Person';
		$data['item'] = $this->contactperson_model->getContact($contact_id);

		$this->load->view('templates/sidebar', $data);
		$this->load->view('pages/contact_new');
		$this->load->view('templates/footer');
	}
	public function delete()
	{

		$contact_id = $this->uri->segment(3);

		if (empty($contact_id))
		{
			show_404();
		}

		$notes = $this->contactperson_model->delete($contact_id);

 $this->session->set_flashdata('success', 'Successfully deleted');

		redirect('contact/view', 'refresh');
	}
}
