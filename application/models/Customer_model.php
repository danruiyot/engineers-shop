<?php
class Customer_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
 	protected $table = 'customers';

	public function get_all($c_id = FALSE)
	{
		
		if ($c_id === FALSE)
		{
			$this->db->select('*');
			$this->db->from('customers');
			$this->db->join('customers');

			
			$query = $this->db->get();
			
			return $query->result_array();
		}
		
		$query = $this->db->get_where('customers', array('c_id' => $c_id));
		return $query->row_array();
   

	}

	public function get_one($e_id)
	{
		$this->db->select('*');
		$this->db->from('customers');
		$this->db->join('enquiries', 'enquiries.customer_id=customers.c_id', 'inner');
		$this->db->where('e_id', $e_id);

		$query = $this->db->get();
			
	return $query->result_array();

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
		public function newCustomer($c_id = FALSE)
		{
			$this->load->helper('url');
	
	$contactPerson = implode(',', $this->input->post('contact_person[]'));
			$data = array(
				'customer_name' => $this->input->post('customer_name'),
				'unit_division' => $this->input->post('unit_division'),
				'work_address' => $this->input->post('work_address'),
				'location' => $this->input->post('location'),
				'workpin' => $this->input->post('workpin'),
				'office_adress' => $this->input->post('office_adress'),
				'office_pincode' => $this->input->post('office_pincode'),
				'contact_person' => $contactPerson,
				'department' => $this->input->post('department'),
				'designation' => $this->input->post('designation'),
				'email_id' => $this->input->post('email_id'),
				'mobile_1' => $this->input->post('mobile_1'),
				'office_adress' => $this->input->post('office_adress'),
				'mobile_2' => $this->input->post('mobile_2'),
				'whatsapp_no' => $this->input->post('whatsapp_no')
			);
			if ($c_id === FALSE) {
				return $this->db->insert('customers', $data);
			}
			else{
				$this->db->where('c_id', $c_id);
				return $this->db->update('customers', $data);
	
			}
		}
		function delete($c_id)
		{
			$this->db->where('c_id', $c_id);
			return $this->db->delete('customers');
		}
	
}