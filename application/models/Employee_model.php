<?php
class Employee_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
 	protected $table = 'employee';

	public function get_all($employee_id = FALSE)
	{
		
		if ($employee_id === FALSE)
		{
			$this->db->select('*');
			$this->db->from('employee');
			
			$query = $this->db->get();
			
			return $query->result_array();
		}
		
		$query = $this->db->get_where('employee', array('employee_id' => $employee_id));
		return $query->row_array();
   

	}

	public function getThemall($limit, $start)
	{

		   $this->db->limit($limit, $start);
        $query = $this->db->get($this->table);

        return $query->result_array();

	}
	   public function get_count() {
        return $this->db->count_all($this->table);
    } 
		public function newEmployee($employee_id = FALSE)
		{
			$this->load->helper('url');
	//`, ``, ``, ``, ``, `email_id`, `mobile_1`, `mobile_2`, `whatsapp_no`, ``, ``,
			$data = array(
				'employee_name' => $this->input->post('employee_name'),
				'address' => $this->input->post('address'),
				'pincode' => $this->input->post('pincode'),
				'current_desi' => $this->input->post('current_desi'),
				'workpprof' => $this->input->post('workpprof'),
				'current_ex' => $this->input->post('current_ex'),
				'past_ex' => $this->input->post('past_ex'),
				'email_id' => $this->input->post('email_id'),
				'mobile_1' => $this->input->post('mobile_1'),
				'mobile_2' => $this->input->post('mobile_2'),
				'whatsapp_no' => $this->input->post('whatsapp_no')
			);
			if ($employee_id === FALSE) {
				return $this->db->insert('employee', $data);
			}
			else{
				$this->db->where('employee_id', $employee_id);
				return $this->db->update('employee', $data);
	
			}
		}
		function delete($employee_id)
		{
			$this->db->where('employee_id', $employee_id);
			return $this->db->delete('employee');
		}
	
}