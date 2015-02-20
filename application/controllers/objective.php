<?php
class Objective extends CI_Controller{
    function __construct() {
        parent::__construct();
    }
    
    function index(){
        $data['header_banner']='';
        $data['main']='objective';
        $this->load->view('index',$data);
    }
    
}
?>
