<?php

class Team_management extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('grocery_CRUD');
    }

    function index() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_theme('datatables');

            $crud->set_table('team_member');
            $crud->set_subject('Member');
            $crud->field_type('status', 'true_false');
            $crud->set_field_upload('image', './uploads/members/');
            
            $crud->set_rules('name','Name','required');
            $crud->set_rules('post','Post','required');
            
            $output = $crud->render();

            $this->_example_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    function _example_output($output = null) {
        $output->page_title = 'Team Member Management';
        $output->main = 'admin/example';
        $this->load->view('admin/index', $output);
    }

}

?>
