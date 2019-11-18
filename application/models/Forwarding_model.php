<?php defined('BASEPATH') OR exit('No direct script access allowed'); 
 
class Forwarding_model extends CI_Model{ 
    function __construct() { 
        // Set table name 
        $this->table = 'enquiryengineers'; 
    } 
     

     
    /* 
     * Insert user data into the database 
     * @param $data data to be inserted 
     */ 
    public function send() { 
            $this->load->helper('url');
            $enquiry = $this->input->post('enquiry_id');
            $data = array(
                'to_vendor' => 'yes'
            );
            $this->db->where('enquiry_id', $enquiry);
             return $this->db->update('enquiryengineers', $data);
           
        }
    public function get_enquiries()
    {
       
            $this->db->select('*');
            $this->db->from('enquiryengineers');
            $this->db->join('enquiries', 'enquiries.e_id = enquiryengineers.enquiry_id', 'right');
            $this->db->join('customers', 'customers.c_id = enquiries.customer_id', 'left');
            $this->db->where('to_vendor !=', 'yes');
            $query = $this->db->get();

            return $query->result_array();
       
    }

}