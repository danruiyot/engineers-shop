<?php
class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('home_model');
		$this->load->model('contactperson_model');
		$this->load->helper('url_helper');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->helper('form');
        $this->load->library('form_validation');
		$this->load->library("pagination");
		$autoload['helper'] = array('url');
		$user_id = $this->session->userdata('userId');
		if($user_id == NULL){redirect('auth/login');} 
	}

	public function index()
	{
	        $config["base_url"] = base_url() . "/home/index/";
	        $config["total_rows"] = $this->home_model->get_count();
	        $config["per_page"] = 10;
	        $config["num_links"] = 7;
			$config["uri_segment"] = 3;
			

	        $this->pagination->initialize($config);

	        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data["links"] =$this->pagination->create_links();
		$data['vendors_all'] = $this->home_model->getThemall($config["per_page"], $page);
		$data['title'] = 'Vendors list';

		if (empty($data['vendors_all']))
		{
			show_404();
		}


		$level = $this->session->userdata('level');

		if ($level == 3){
			$this->load->view('templates/header', $data);

		}else{

			$this->load->view('templates/sidebar', $data);
		}
		$this->load->view('pages/home', $data);
		$this->load->view('templates/footer');
	}

	public function view($v_id = NULL)
	{
		$data['title'] = 'Vendor information';

		$data['item'] = $this->home_model->get_info($v_id);
		$data['contacts'] = $this->contactperson_model->get_all($v_id);

		if (empty($data['item']))
		{
			show_404();
		}

		$level = $this->session->userdata('level');

		if ($level == 1){
			$this->load->view('templates/sidebar', $data);


		}else{

			$this->load->view('templates/header', $data);
		}
		$this->load->view('pages/vendor_view', $data);
		$this->load->view('templates/footer');

	}

	public function create($v_id = NULL)
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Add a vendor';

		$this->form_validation->set_rules('vendor_name', 'Name ', 'required');
		$this->form_validation->set_rules('address', 'Location', 'required');
		$this->form_validation->set_rules('mail1', 'Mail 1', 'required');
		$this->form_validation->set_rules('contact_person', 'Contact person', 'required');


		if ($this->form_validation->run() === FALSE)
		{
			$level = $this->session->userdata('level');

			if ($level == 1){
				$this->load->view('templates/sidebar', $data);


			}else{

				$this->load->view('templates/header', $data);
			}
			$this->load->view('pages/create');
			$this->load->view('templates/footer');

		}
		else
		{
			if (empty($v_id)) {

				$this->home_model->new_vendor();
				 $this->session->set_flashdata('success', 'Successfully edited');

				$level = $this->session->userdata('level');

				if ($level == 1){
					$this->load->view('templates/sidebar', $data);


				}else{

					$this->load->view('templates/header', $data);
				}
				 $this->load->view('pages/create');
				$this->load->view('templates/footer');

			}else{
				$this->home_model->new_vendor($v_id);
				 $this->session->set_flashdata('success', 'Successfully Updated');

				redirect('/');
				}
			}
		}

	public function edit($v_id = NULL){


		$level = $this->session->userdata('level');

		if ($level == 1){

			$data['title'] = 'Edit a vendor';
			$data['item'] = $this->home_model->get_info($v_id);
			if (empty($data['item']))
			{
				redirect('home/create', 'refresh');
			}
			$this->load->view('templates/sidebar', $data);
			$this->load->view('pages/edit');
			$this->load->view('templates/footer');
		}else{
			$this->session->set_flashdata('error', 'You dont have permissions');

			redirect('home/', 'refresh');


		}
	}
	public function delete()
	{
		$level = $this->session->userdata('level');

		if ($level == 1){

			$v_id = $this->uri->segment(3);

			if (empty($v_id))
			{
				show_404();
			}

			$notes = $this->home_model->delete($v_id);
			$this->session->set_flashdata('success', 'Successfully Deleted');


			redirect('home/');
		}else{
			$this->session->set_flashdata('error', 'You dont have permissions');

			redirect('home/');

		}

	}
}
