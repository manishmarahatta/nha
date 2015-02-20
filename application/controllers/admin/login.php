<?php
class Login extends CI_Controller{
    
    function __construct() {
        parent::__construct();
    $this->load->model('User_model');
    $this->load->library('form_validation');
    }
    function index(){
        $data['main']='admin/login/login_index';
         $this->load->view('admin/login',$data);
    }
    
    function process(){
        $this->form_validation->set_rules('username', 'Username', 'trim|required|xss_clean');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|md5');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('msg','Both fields are required..');
            redirect(ADMIN_PATH.'/login/login');
            
        } else {
            
            $user_id = $this->User_model->login($this->input->post('username'), $this->input->post('password'), $this->session->userdata('session_id'));
			if($user_id != 0)
			{
				$this->session->set_userdata(array('admin_user_id' => $user_id));

				$data['user'] =$this->User_model->get_userDetails($user_id);
				
				$this->session->set_userdata(array('admin_user_name' =>$data['user']->username));

				redirect(ADMIN_PATH.'/home/', 'refresh');
			}
			else
			{
				redirect(ADMIN_PATH.'/login/login_failed', 'refresh');

			}
            
            
        }
    }
    
    function logout()
	{
		$user_id = $this->session->userdata('admin_user_id');

                $session_id = $this->session->userdata('session_id');

                $user_id = $this->User_model->checkID($user_id, $session_id);

		if($user_id != 0)
		{
			$this->User_model->logout($user_id);
			$this->session->sess_destroy();
//                        $this->session->unset_userdata('admin_user_name');
                       // session_destroy();
		}
                $this->session->sess_destroy();
                $this->session->unset_userdata('admin_user_name');
                $this->session->unset_userdata('admin_user_id');
                $this->session->set_flashdata('msg','Logged out successfully');
		redirect(ADMIN_PATH.'/login/login', 'refresh');
	}
        
        function login_failed()
	{
		$this->session->set_flashdata('msg','Invalid Login');
		redirect(ADMIN_PATH.'/login');
		
	}
        function test(){
            debug($this->session->userdata);
        }
        function forgot_password(){
            $data['main']='admin/login/forgot_password';
            $this->load->view('admin/login',$data);
        }
        function  send_forgot_email(){
//              $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
            $email=$this->input->post('email');
            if($email==""){
                $this->session->set_flashdata('msg',"Please enter your email");
                redirect(admin_url('login/forgot_password'));
                return false;
            }
            
            $user=$this->db->get_where('tbl_admin',array('email'=>$email))->result();
            
            if(count($user)==0){
                $this->session->set_flashdata('msg',"Sorry your email is not registered");
                redirect(admin_url('login/forgot_password'));
                return false;
            }
            
            $this->load->helper('string');
            $data['hash']= random_string();
            $data['email']=$email;
            $data['used']=0;
            $this->db->insert('tbl_forgot_password',$data);
            $this->send_email($email,$this->db->insert_id());
//            echo $this->db->last_query();
        }
        
        function send_email($email,$id){
            $msg="Here is your code to change the password for ".SITE_NAME.' login';
            $msg.="<br/>";
            $msg.="Code: ".$this->db->get_where('tbl_forgot_password',array('id'=>$id))->row()->hash;
           $msg.="<br/> Click <a href='".admin_url('login/retrive_login')."'>Here</a> to change your password ";
           echo $msg;exit;
             
        $this->load->library('email');
        $config['mailtype'] = 'html';
        $this->email->initialize($config);
        $this->email->from('info@website-tasks.com', 'Krishna Karki');
        $this->email->to($email);
        $this->email->subject('Activation code for your forgotten password '.SITE_NAME);
        
        $this->email->message($msg);
//        $this->email->set_alt_message($this->load->view('email/' . $type . '-txt', $data, TRUE));
        $this->email->send();
        $this->session->set_flashdata("msg","Your activation code is sent to your email at ".$email.". Please check your email to retrive login.");
        redirect(admin_url('login/forgot_password'));
        }
        
        function retrive_login(){
            $data['main']='admin/login/retrive_login';
            $this->load->view('admin/login',$data);
        }
}


?>
