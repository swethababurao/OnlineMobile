<?php 

class Login extends CI_Controller {

	
	public function index()
	{
		
		$this->smarty->assign("title","Welcome to admin panel trendymobile");
		$this->smarty->assign("suburl",$this->config->item('sub_url'));
		$this->smarty->assign("url",base_url());
		$this->smarty->view( 'admin/login.tpl');
	}
	
	
	public function admin_login(){
		$this->load->model('User');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		if($this->User->admin_user($email,$password))
		{
			echo '1';
			
					
		}
		else 
		{
			echo 'false';
		}
		
		
		
	}
	
}

