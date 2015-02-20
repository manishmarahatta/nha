<?php
class About_us extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        $data['all_banner'] = $this->db->get_where('banner_management', array('status' => 1))->result();
        $data['background']= $this->db->get_where('content_management',array('id'=>1))->row();
        $data['who_can']= $this->db->get_where('content_management',array('id'=>2))->row();
        $data['vision']= $this->db->get_where('content_management',array('id'=>3))->row();
        $data['mission']= $this->db->get_where('content_management',array('id'=>4))->row();
        $data['objective']= $this->db->get_where('content_management',array('id'=>5))->row();
        $data['activities']= $this->db->get_where('content_management',array('id'=>6))->row();
        //$data['header_banner']='';
        $data['main']='about_us';
        $this->load->view('index',$data);
    }
    
    
    
}
?>
