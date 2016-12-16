<?php
class News_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    
    public function get_news($User_ID = FALSE)
    {
        if ($User_ID === FALSE)
        {
            $query = $this->db->get('userinfo');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('userinfo', array('User_ID' => $User_ID));
        return $query->row_array();
    }
	 
	 public function get_news_by_id($User_ID = 0)
    {
        if ($User_ID === 0)
        {
            $query = $this->db->get('userinfo');
            return $query->result_array();
        }
 
        $query = $this->db->get_where('userinfo', array('User_ID' => $User_ID));
        return $query->row_array();
    }