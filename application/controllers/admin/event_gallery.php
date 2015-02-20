<?php

class Event_gallery extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('grocery_CRUD');
    }

    function index() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_theme('datatables');

            $crud->set_table('events_gallery');
            $crud->set_subject('Events Gallery');
            
            $crud->set_field_upload('image', './uploads/events_management/');
            
            $crud->set_relation('event_name', 'events_management', 'title');
            
            $crud->set_rules('image','Image','required');
            
            
            $output = $crud->render();

            $this->_example_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    function _example_output($output = null) {
        $output->page_title = 'Events Gallery';
        $output->main = 'admin/example';
        $this->load->view('admin/index', $output);
    }

}

?>
