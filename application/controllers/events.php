<?php
class Events extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    
    function index(){
//        $data['header_banner']='';
        $data['all_events']=$this->db->order_by('id','desc')->get_where('events_management',array('status'=>1,'upcomming_events'=>0))->result();
        $data['upcomming_events']=$this->db->order_by('id','desc')->get_where('events_management',array('status'=>1,'upcomming_events'=>1))->result();

        $data['main']='events';
        $this->load->view('index',$data);
    }
    
}
?>
