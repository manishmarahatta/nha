<?php
class Admin_model extends CI_Model{
    function __construct() {
        parent::__construct();
    }
    function get_all_clients(){
         $this->db->select('tbl_user.*');
        $this->db->from('tbl_user');
        $this->db->where('tbl_user_role.role_id',6);
        $this->db->join('tbl_user_role','tbl_user_role.user_id = tbl_user.id');
       
        $data['property_ids']=array();
        
      return  $this->db->get()->result();
    }
    function get_all_managers(){
         $this->db->select('tbl_user.*');
        $this->db->from('tbl_user');
        $this->db->where('tbl_user_role.role_id',7);
        $this->db->join('tbl_user_role','tbl_user_role.user_id = tbl_user.id');
       
        $data['property_ids']=array();
        
      return  $this->db->get()->result();
    }
}
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
