<?php

class Contact extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->library('email');
    }

    function index() {
        $data['get_contact'] = $this->db->get('contact_us')->row();
        $data['main'] = 'contact';
        $this->load->view('index', $data);
    }
    
    function send_message(){


        $this->form_validation->set_rules('name','Name','required');
        $this->form_validation->set_rules('email','Email','required|valid_email');
        $this->form_validation->set_rules('phone','Phone','required|integer');
        $this->form_validation->set_rules('message','Message','required');

        if($this->form_validation->run() == FALSE){
            $this->index();
        }else{
           $name=$this->input->post('name');
           $email=$this->input->post('email');
           $phone=$this->input->post('phone');
           $message=$this->input->post('message'); 

           $this->email->from($email, $name);
           $this->email->to('secretariat.nha@gmail.com');
           $this->email->subject('NHA contact message');
           $this->email->message($message);
           $this->email->send();   
           $this->session->set_flashdata('msg', 'Thanks for your feedback!');
           redirect(base_url('contact'));

       }


   }

}

?>
