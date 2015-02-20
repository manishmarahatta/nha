<?php

class Events_management extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('grocery_CRUD');
    }

    function index() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_theme('datatables');

            $crud->set_table('events_management');
            $crud->set_subject('Events');
            $crud->field_type('status', 'true_false');
            $crud->field_type('upcomming_events', 'true_false');
//            $crud->set_field_upload('image', './uploads/events_management/');
            
            
            $crud->set_rules('title','Title','required');
            $crud->set_rules('description','Description','required');
            
            $output = $crud->render();

            $this->_example_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    function _example_output($output = null) {
        $output->page_title = 'Events Management';
        $output->main = 'admin/example';
        $this->load->view('admin/index', $output);
    }

}

?>
