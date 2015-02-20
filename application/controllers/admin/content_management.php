<?php

class Content_management extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('grocery_CRUD');
    }

    function index() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_theme('datatables');

            $crud->set_table('content_management');
            $crud->set_subject('Content');
            
            
            $crud->set_rules('title','Title','required');
            $crud->set_rules('description','Description','required');
            
            $crud->unset_delete();
            $crud->unset_add();
            
            $output = $crud->render();

            $this->_example_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    function _example_output($output = null) {
        $output->page_title = 'About us Management';
        $output->main = 'admin/example';
        $this->load->view('admin/index', $output);
    }

}

?>
