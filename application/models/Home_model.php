<?php
class Home_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
 	protected $table = 'vendors';

	public function get_info($v_id = FALSE)
	{
		if ($v_id === FALSE)
		{
			$query = $this->db->get('vendors');
			return $query->result_array();
		}

		$query = $this->db->get_where('vendors', array('v_id' => $v_id));

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



	public function new_vendor($v_id = FALSE)
	{
		$this->load->helper('url');
//		`vendor_name`, `address`, `ops_area`, `mail1`, `mail2`,
//		`mobile1`, `mobile2`, `mobile3`, `mobile4`, `product`, `whatsapp_no`, `contact_person`)

		$data = array(
			'vendor_name' => $this->input->post('vendor_name'),
			'address' => $this->input->post('address'),
			'ops_area' => $this->input->post('ops_area'),
			'mail1' => $this->input->post('mail1'),
			'mail2' => $this->input->post('mail2'),
			'mobile1' => $this->input->post('mobile1'),
			'mobile2' => $this->input->post('mobile2'),
			'mobile3' => $this->input->post('mobile3'),
			'mobile4' => $this->input->post('mobile4'),
			'product' => $this->input->post('product'),
			'whatsapp_no' => $this->input->post('whatsapp_no'),
			'contact_person' => $this->input->post('contact_person')
		);
		if ($v_id === FALSE) {
			return $this->db->insert('vendors', $data);
		}
		else{
			$this->db->where('v_id', $v_id);
			return $this->db->update('vendors', $data);

		}
	}
	function delete($v_id)
	{
		$this->db->where('v_id', $v_id);
		return $this->db->delete('vendors');
	}

}
