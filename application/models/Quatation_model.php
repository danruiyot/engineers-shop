<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Quatation_model extends CI_Model{ 
    function __construct() { 
        // Set table name 
        $this->table = 'quatation'; 
    } 
     

     
    /* 
     * Insert user data into the database 
     * @param $data data to be inserted 
     */ 
    public function send() { 
            $this->load->helper('url');
            $user_id = $this->session->userdata('userId');
            $enquiry = $this->input->post('enquiry_id');

            $data = array(
                'amount' => $this->input->post('amount'),
                'from_who' => $user_id
            );
            $this->db->where('enquiry_id', $enquiry);
             return $this->db->update('quatation', $data);
           
        }
    public function get_enquiries($e_id = FALSE)
    {
       
       if (empty($e_id)) {

            $this->db->select('*');
            $this->db->from('quatation');
            $this->db->join('enquiries', 'enquiries.e_id = quatation.enquiry_id', 'left');
            $this->db->where('amount', 0);
            $query = $this->db->get();

            return $query->result_array();
        }else{
        	   $query = $this->db->get_where('enquiries', array('e_id' => $e_id));
        return $query->row_array();

        }

       
    }
    public function quoteted($e_id = FALSE)
    {
       

            $this->db->select('*');
            $this->db->from('quatation');
            $this->db->join('enquiries', 'enquiries.e_id = quatation.enquiry_id', 'left');
            $this->db->where('amount !=', 0);
            $query = $this->db->get();

            return $query->result_array();
        
        	
       
    }

}