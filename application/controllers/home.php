<?php

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->helper('text');
        $this->load->helper('download');
    }

    function index() {
        $data['all_banner'] = $this->db->get_where('banner_management', array('status' => 1))->result();
        
        $data['all_events'] = $this->db->limit('6')->order_by('id', 'desc')->get_where('events_management', array('status' => 1,'upcomming_events'=>0))->result();
        $data['upcomming_events'] = $this->db->limit('10')->order_by('id','desc')->get_where('events_management',array('upcomming_events'=>1,'status'=>1))->result();
        $data['background'] = $this->db->get_where('content_management', array('id' => 1))->row();
        $data['gallery'] = $this->db->limit('4')->order_by('id', 'desc')->get('events_gallery')->result();
        $data['header_banner'] = '';
        $data['main'] = 'home';
        $this->load->view('index', $data);
    }

    function downloads() {
        $data['all_files']= $this->db->where('status',1)->get('downloads')->result();
        
        $data['all_banner'] = $this->db->get_where('banner_management', array('status' => 1))->result();
        $data['gallery'] = $this->db->limit('4')->order_by('id', 'desc')->get('events_gallery')->result();
        //$data['header_banner'] = '';
        $data['main'] = 'downloads';
        $this->load->view('index', $data);
    }


    function team(){
        $data['all_banner'] = $this->db->get_where('banner_management', array('status' => 1))->result();
       // $data['header_banner']='';
        $this->db->where('post !=','President');
        
        $data['all_member']= $this->db->get('team_member')->result();
        $data['president_member']= $this->db->get_where('team_member',array('post'=>'President'))->row();
        $data['main']='member';
        $this->load->view('index',$data);
    }

}

?>
