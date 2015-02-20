<?php

class Banner_management extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('grocery_CRUD');
    }

    function index() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_theme('datatables');

            $crud->set_table('banner_management');
            $crud->set_subject('Banner');
            $crud->field_type('status', 'true_false');
            
            $crud->set_field_upload('image', './uploads/banner_management/');
            
            $output = $crud->render();

            $this->_example_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    function _example_output($output = null) {
        $output->page_title = 'Banner Management';
        $output->main = 'admin/example';
        $this->load->view('admin/index', $output);
    }

}

?>
