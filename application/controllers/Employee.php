<?php
class Employee extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('employee_model');
		$user_id = $this->session->userdata('userId');
		if($user_id == NULL){redirect('auth/login');} 

	}

	public function view()
	{
	        $config["base_url"] = base_url() . "employee/view";
	        $config["total_rows"] = $this->employee_model->get_count();
	        $config["per_page"] = 10;
	        $config["uri_segment"] = 2;

	        $this->pagination->initialize($config);

	        $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

		$data["links"] =$this->pagination->create_links();
		$data['employees'] = $this->employee_model->getThemall($config["per_page"], $page);
		$data['title'] = 'employee list';

	

		$this->load->view('templates/sidebar', $data);
		$this->load->view('pages/employee_all', $data);
		$this->load->view('templates/footer');
	}

	public function view_single($employee_id = NULL)
	{
		$data['title'] = 'Employee information';

		$data['item'] = $this->employee_model->get_all($employee_id);

		$this->load->view('templates/sidebar', $data);
		$this->load->view('pages/employee_view', $data);
		$this->load->view('templates/footer');

	}

	public function create($employee_id = NULL)
	{
		$data['item'] = $this->employee_model->get_all($employee_id);

		$this->form_validation->set_rules('employee_name', 'Name ', 'required');
		$this->form_validation->set_rules('email_id', 'Mail ', 'required');
		$data['title'] = 'Add an Employee';
      
		if ($this->form_validation->run() === FALSE)
		{
			$this->load->view('templates/sidebar', $data);
			$this->load->view('pages/employee_new');
			$this->load->view('templates/footer');

		}
		else
		{
			if (empty($employee_id)) {


				$this->employee_model->newEmployee();
				 $this->session->set_flashdata('success', 'Successfully added');

				$this->load->view('templates/sidebar', $data);
				$this->load->view('pages/employee_new');
				$this->load->view('templates/footer');

			}else{

				 $this->session->set_flashdata('success', 'Successfully Updated');
				$this->employee_model->newEmployee($employee_id);
				redirect('employee/view', 'refresh');
			}
		}
	}

	public function edit($employee_id = NULL){
		$data['title'] = 'Employee';
		$data['item'] = $this->employee_model->get_all($employee_id);

		$this->load->view('templates/sidebar', $data);
		$this->load->view('pages/employee_new');
		$this->load->view('templates/footer');
	}
	public function delete()
	{

		$employee_id = $this->uri->segment(3);

		if (empty($employee_id))
		{
			show_404();
		}

		$notes = $this->employee_model->delete($employee_id);
 $this->session->set_flashdata('success', 'Successfully Deleted');


		redirect('employee/view');
	}
}
