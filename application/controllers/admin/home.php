<?php 

class Home extends CI_Controller {

	
	public function index()
	{
		if(!$this->checklogin())
		{
			
			redirect('admin/login');
		}
		$this->load->model('user','usr');
		
		
		$this->smarty->assign("title","Welcome to admin panel trendymobile");
		$this->smarty->assign("suburl",$this->config->item('sub_url'));
		$this->smarty->assign("url",base_url());
		$usersData =$this->usr->get_all_users();
		$this->smarty->assign("data",$usersData);
		
		$this->smarty->view( 'admin/home.tpl');
	}
	public function checklogin()
	{
		if($this->session->userdata('admin_id'))
		{
			return true;
		}
		else 
		   return false;
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/login');
	}
	public function adminusers()
	{
		$this->smarty->assign("title","Welcome to admin panel trendymobile");
		$this->smarty->assign("suburl",$this->config->item('sub_url'));
		$this->smarty->assign("url",base_url());
		$this->smarty->view( 'admin/adminusers.tpl');
	}
	public function changepassword()
	{
		$this->smarty->assign("title","Welcome to admin panel trendymobile");
		$this->smarty->assign("suburl",$this->config->item('sub_url'));
		$this->smarty->assign("url",base_url());
		$this->smarty->view( 'admin/changepassword.tpl');
	}
}

