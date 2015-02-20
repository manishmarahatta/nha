<?php
class Team_member extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        $data['all_banner'] = $this->db->get_where('banner_management', array('status' => 1))->result();
        $this->db->where('post !=','President');
        $data['all_member']= $this->db->get('team_member')->result();
        
        $data['president_member']= $this->db->get_where('team_member',array('post'=>'President'))->row();
        $data['main']='team_member';
        $this->load->view('index',$data);
        
    }
    
}
?>
