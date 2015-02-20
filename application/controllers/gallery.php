<?php
class gallery extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        $data['all_events_gallery']= $this->db->order_by('id','desc')->get('events_gallery')->result();
        $data['main']='gallery';
        $this->load->view('index',$data);
    }
}
?>
