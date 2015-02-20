<?php

class General extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /* --------------------------Binod Functions----------------------------------------- */
    function get_time(){
    return $this->db->get('tbl_time')->result();
    }
    
    function addcoupon($data){
        $this->db->insert('tbl_coupon',$data);
    }
    
    function get_all_coupon(){
        return $this->db->get('tbl_coupon')->result();
    }
    
    function get_coupon_by_id($id){
        return $this->db->get_where('tbl_coupon',array('id'=>$id))->row();
    }

}

?>