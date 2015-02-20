<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Admin_Controller extends CI_Controller
{


	function __construct()
	{
		parent::__construct();
		$this->check_userlogin();
	}

	function check_userlogin()
	{
		if(!$this->session->userdata('admin_user_id'))
		{
			redirect('admin/login');
		}
	}


}
