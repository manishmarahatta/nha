<?php
class User_model extends CI_Model{
    
    function __construct() {
        parent::__construct();
        $this->load->model('General_model');
    }
     
    function login($username, $password, $session_id)
    {
       
    	$query = $this->db->get_where('tbl_admin', array('username' => $this->input->post('username'), 'password' => $this->input->post('password')));
    	
    	if($query->num_rows() == 0)
    	{
	   		return 0;
    	}
    	else
    	{
			$local_time = $this->General_model->get_local_time();
			
			$data['last_access'] = $local_time;
    		$data['session_id'] = $session_id;
    		$this->db->update('tbl_admin', $data, array('username' => $username));
    		$row = $query->row();
    		return $row->admin_id;
    	}
    }
    
    function get_userDetails($user_id)
    {
    	$query = $this->db->get_where('tbl_admin', array('admin_id' => $user_id));
    	
    	if($query->num_rows() == 0)
    	{
    		return 0;
    	}
    	else
    	{
    		return $query->row();
    	}
    }
    
     function logout($id)
    {
    	$data['session_id'] = "";
    	$this->db->update('tbl_admin', $data, array('admin_id' => $id));
    }
    function checkID($id, $session_id)
    {
    	$query = $this->db->get_where('tbl_admin', array('admin_id' => $id, 'session_id' => $session_id));
    	
    	if($query->num_rows() == 0)
    	{
           
    		return 0;
    	}
    	else
    	{
    		$row = $query->row();
    		return $row->admin_id;
    	}
    }
}
?>
