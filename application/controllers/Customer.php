<?php
class Customer extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('contactperson_model');
		$this->load->model('customer_model');
		$this->load->model('convo_model');
		$user_id = $this->session->userdata('userId');
		if($user_id == NULL){redirect('auth/login');} 

	}

	public function view()
	{
	        $config["base_url"] = base_url() . "customer/view";
	        $config["total_rows"] = $this->customer_model->get_count();
	        $config["per_page"] = 10;
	        $config["uri_segment"] = 2;
			$config["num_links"] = 7;


		$this->pagination->initialize($config);

	        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data["links"] =$this->pagination->create_links();
		$data['customer_alls'] = $this->customer_model->getThemall($config["per_page"], $page);
		$data['title'] = 'Customer list';



		$level = $this->session->userdata('level');

		if ($level == 3){
			$this->load->view('templates/header', $data);

		}else{

			$this->load->view('templates/sidebar', $data);
		}
		$this->load->view('pages/customer_all', $data);
		$this->load->view('templates/footer');
	}

	public function view_single($c_id = NULL)
	{
		$data['title'] = 'Customer information';

	$this->db->select('*');
		$this->db->from('customers');
		$this->db->where('c_id', $c_id);
		$query=$this->db->get();
		$row=$query->row();
		$person = $row->contact_person ;

		$data['item'] = $this->customer_model->get_all($c_id);
		$data['contacts'] = $this->contactperson_model->getSome($person);
		$data["convos"] = $this->convo_model->get_convos($c_id);

		$level = $this->session->userdata('level');

		if ($level == 3){
			$this->load->view('templates/header', $data);

		}else{

			$this->load->view('templates/sidebar', $data);
		}
		$this->load->view('pages/customer_view', $data);
		$this->load->view('templates/footer');

	}

	public function create($c_id = NULL)
	{
		$data['contacts'] = $this->contactperson_model->get_all();

		$this->form_validation->set_rules('customer_name', 'Name ', 'required');
		$this->form_validation->set_rules('email_id', 'Mail ', 'required');
		$data['title'] = 'Add a customer';
      
		if ($this->form_validation->run() === FALSE)
		{
			$level = $this->session->userdata('level');

			if ($level == 3){
				$this->load->view('templates/header', $data);

			}else{

				$this->load->view('templates/sidebar', $data);
			}
			$this->load->view('pages/customer_create');
			$this->load->view('templates/footer');

		}
		else
		{
			if (empty($c_id)) {


				$this->customer_model->newCustomer();
				 $this->session->set_flashdata('success', 'Successfully added');

				$level = $this->session->userdata('level');

				if ($level == 3){
					$this->load->view('templates/header', $data);

				}else{

					$this->load->view('templates/sidebar', $data);
				}
				 $this->load->view('pages/customer_create');
				$this->load->view('templates/footer');

			}else{

				 $this->session->set_flashdata('success', 'Successfully Updated');
				$this->customer_model->newCustomer($c_id);
				redirect('customer/view', 'refresh');
			}
		}
	}

	public function edit($c_id = NULL){
		$data['contacts'] = $this->contactperson_model->get_all();
		$data['title'] = 'Edit a vendor';
		$data['item'] = $this->customer_model->get_all($c_id);
		$data['contacts'] = $this->contactperson_model->getContact();

		$level = $this->session->userdata('level');

		if ($level == 1){
			$this->load->view('templates/sidebar', $data);
			$this->load->view('pages/customer_edit');
			$this->load->view('templates/footer');

		}else{
			$this->session->set_flashdata('error', 'Permision denied');

			redirect ('customer/view', 'refresh');

		}

	}
	public function delete()
	{
		$level = $this->session->userdata('level');


		if ($level == 1) {

			$c_id = $this->uri->segment(3);

			if (empty($c_id)) {
				show_404();
			}

			$notes = $this->customer_model->delete($c_id);
			$this->session->set_flashdata('success', 'Successfully Deleted');


			redirect('customer/view');


		} else {
			$this->session->set_flashdata('error', 'Permision denied');
			redirect('customer/view');

		}
	}

}
