<?php
class Enquiry_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
 	protected $table = 'enquiries';

	public function get_enquiries($e_id = FALSE)
	{
		if ($e_id === FALSE)
		{
			$this->db->select('*');
			$this->db->from('enquiries');
			$this->db->join('customers', 'customers.c_id = enquiries.customer_id', 'left');
			$query = $this->db->get();

			return $query->result_array();
		}
		
$query = $this->db->get_where('enquiries', array('e_id' => $e_id));
		return $query->row_array();
	}


	public function getThemall($limit, $start)
	{

$this->db->select('*');
			$this->db->from('enquiries');
		   $this->db->limit($limit, $start);
			$this->db->join('customers', 'customers.c_id = enquiries.customer_id', 'left');
			$query = $this->db->get();


        return $query->result_array();

	}

	public function getUnapproved()
	{

				$this->db->select('*');
				$this->db->from('enquiries');
				$this->db->join('customers', 'customers.c_id = enquiries.customer_id', 'left');
				$this->db->where('approve !=', 'yes');
				$query = $this->db->get();

			return $query->result_array();

	}

	public function get_count() {
        return $this->db->count_all($this->table);
    } 

	public function new_enq($data = false)
	{
		$this->load->helper('url');

//
		$data = array(
			'customer_id' => $this->input->post('customer_id'),
			'customer_requirements' => $this->input->post('customer_requirements'),
			'product_service' => $this->input->post('product_service_name'),
			'product_service_name' => $this->input->post('product_service_name'),
			'quantity' => $this->input->post('quantity'),
			'files' => $data['file'],
			'visit_manager_dealer' => $this->input->post('visit_manager_dealer'),
			'visit_designengineer' => $this->input->post('visit_designengineer'),
			'enq_type' => $this->input->post('enq_type')
		);

			return $this->db->insert('enquiries', $data);

	}
	public function edit($e_id)
	{
		$this->load->helper('url');

//
		$data = array(
			'customer_id' => $this->input->post('customer_id'),
			'customer_requirements' => $this->input->post('customer_requirements'),
			'product_service' => $this->input->post('product_service'),
			'product_service_name' => $this->input->post('product_service_name'),
			'quantity' => $this->input->post('quantity'),
			'visit_manager_dealer' => $this->input->post('visit_manager_dealer'),
			'visit_designengineer' => $this->input->post('visit_designengineer'),
			'enq_type' => $this->input->post('enq_type')
		);
		
			$this->db->where('e_id', $e_id);
			return $this->db->update('enquiries', $data);

	}
	
	
	
		public function approve($approve) { 
		            $this->load->helper('url');
		//
		    $data = array(
		    		        'approve' => 'yes'
		    );
		    $data1 = array(
		    		        'enquiry_id' => $approve
		    );
		    $this->db->where('e_id', $approve);

			$this->db->insert('enquiryengineers', $data1);
			$this->db->insert('quatation', $data1);
			// $where = 'e_id = "$approve"';
				$this->db->where('e_id', $approve);

		    return $this->db->update('enquiries', $data);
		   //ALTER TABLE `enquiries` ADD `approve` VARCHAR(10) NOT NULL DEFAULT 'no' AFTER `dateupdated`;
		}
			
	function delete($e_id)
	{
		$this->db->where('e_id', $e_id);
		return $this->db->delete('enquiries');
	}

}
