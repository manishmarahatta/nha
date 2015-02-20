<?php

class Downloads extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('grocery_CRUD');
    }

    function index() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_theme('datatables');

            $crud->set_table('downloads');
            $crud->set_subject('Files');
            $crud->field_type('status', 'true_false');
            
            $crud->set_field_upload('name', './uploads/downloads/');
            
            $crud->set_rules('name','Select file for upload','required');
            $crud->set_rules('file_name','File Name','required');
            
            $output = $crud->render();

            $this->_example_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    function _example_output($output = null) {
        $output->page_title = 'Downloads';
        $output->main = 'admin/example';
        $this->load->view('admin/index', $output);
    }

}

?>
