<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Convo_model extends CI_Model{
	function __construct() {
		// Set table name
		$this->table = 'conversations';
	}



	/*
	 * Insert user data into the database
	 * @param $data data to be inserted
	 */
	public function add() {
		$this->load->helper('url');

		$data = array(
			'convo' =>  $this->input->post('convo'),
			'customer_id' =>  $this->input->post('customer_id')
		);

		return $this->db->insert('conversations', $data);

	}
	public function get_convos($c_id)
	{

		$this->db->select('*');
		$this->db->from('conversations');
		$this->db->join('enquiries', 'enquiries.e_id = conversations.enquiry_id', 'left');
		$this->db->join('customers', 'customers.c_id = conversations.customer_id', 'left');
		$this->db->order_by('convo_id', 'ASC');
		$this->db->where('conversations.customer_id', $c_id);
		$query = $this->db->get();

		return $query->result_array();

	}

}
