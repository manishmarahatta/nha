<?php

class Contact_us extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('grocery_CRUD');
    }

    function index() {
        try {
            $crud = new grocery_CRUD();
            $crud->set_theme('datatables');

            $crud->set_table('contact_us');
            $crud->set_subject('contact');
            
            $crud->unset_delete();
            $crud->unset_add();
            
            $output = $crud->render();

            $this->_example_output($output);
        } catch (Exception $e) {
            show_error($e->getMessage() . ' --- ' . $e->getTraceAsString());
        }
    }

    function _example_output($output = null) {
        $output->page_title = 'Contact Detail';
        $output->main = 'admin/example';
        $this->load->view('admin/index', $output);
    }

}

?>
