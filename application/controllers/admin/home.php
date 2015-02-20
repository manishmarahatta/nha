<?php

class Home extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    function index() {
        $data['main']='admin/blank';
        $this->load->view('admin/index', $data);
    }
    

}

?>
