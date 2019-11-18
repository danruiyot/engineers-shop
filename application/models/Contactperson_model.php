<?php
class Contactperson_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
		 protected $table = '';

	public function get_all($v_id = FALSE)
	{
		if ($v_id === FALSE) {
		$this->db->select('*');
		$this->db->from('contactperson');

		$query = $this->db->get();

		return $query->result_array();	
		}
		else{
		$this->db->select('*');
		$this->db->from('contactperson');
		$this->db->join('vendors', 'contactperson.contact_id = vendors.contact_person', 'left');
		$this->db->where('v_id', $v_id);

		$query = $this->db->get();

		return $query->result_array();			

		}

	}
		public function getSome($person = FALSE)
	{
    $who = explode(',', $person);
    foreach ($who as $persons) {
    	# code...
    	//$query = "SELECT * FROM `contactperson` WHERE contact_id IN (" . implode(',', $who) . ")";
		$this->db->select('*');
		$this->db->from('contactperson');
		$this->db->where('contact_id', $persons);
		$this->db->order_by('contact_id', 'ASC');
		  $query = $this->db->get();

		//$query = $this->db->get();

		return $query->result_array();
    }
		

	}
	public function getThemall($limit, $start)
	{

		$this->db->select('*');
 		$this->db->limit($limit, $start);
		$this->db->from('contactperson');

		$query = $this->db->get();

		return $query->result_array();

	}
		public function getContact($contact_id = FALSE)
	{
		 if ($contact_id === FALSE)
        {

		$this->db->select('*');
		$this->db->from('contactperson');

		$query = $this->db->get();

		return $query->result_array();
		}
		  $query = $this->db->get_where('contactperson', array('contact_id' => $contact_id));
        return $query->row_array();

	}
	public function new_contact($contact_id = FALSE)
	{
		$this->load->helper('url');
//`contact_name`, `designation`, `address`, `ops_area`, `mail1`, `mail2`, `mobile1`, `mobile2`, `mobile3`, `mobile4`, `whatsapp_no`)
		$data = array(
			'contact_name' => $this->input->post('contact_name'),
			'designation' => $this->input->post('designation'),
			'address' => $this->input->post('address'),
			'ops_area' => $this->input->post('ops_area'),
			'mail1' => $this->input->post('mail1'),
			'mail2' => $this->input->post('mail2'),
			'mobile1' => $this->input->post('mobile1'),
			'mobile2' => $this->input->post('mobile2'),
			'mobile3' => $this->input->post('mobile3'),
			'mobile4' => $this->input->post('mobile4'),
			'whatsapp_no' => $this->input->post('whatsapp_no')
		);
		if ($contact_id === FALSE) {
			return $this->db->insert('contactperson', $data);
		}
		else{
			$this->db->where('contact_id', $contact_id);
			return $this->db->update('contactperson', $data);

		}
	}
	
	function get_count()
	{
		return $this->db->count_all($this->table);
	}
	function delete($contact_id)
	{
		$this->db->where('contact_id', $contact_id);
		return $this->db->delete('contactperson');
	}

}
