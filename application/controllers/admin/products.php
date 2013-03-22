<?php 

class Products extends CI_Controller {

    function checklogin()
	{
		if($this->session->userdata('admin_id'))
		{
			return true;
		}
		else 
		   return false;
	}
	public function addcategory()
	{
		if(!$this->checklogin())
		{
			
			redirect('admin/login');
		}
		if($this->input->post('action') == 'action')
		{
			$images = $this->loadingimages();
			if(!$images)
			{
				$clr = "red";
				$txtmsg = "<span>there were some problem while uploading images. please check the images extention and try again. only allowed extension are (jpg,jpeg,gif,png).</span>";
				
			}
			else
			{
				$this->load->model('Categories', 'cat');
				$data = array(
					'categoryName' => $this->input->post('txtcatname'),
					'imageurl' => $this->input->post('flimg1')
					);
					
				if($this->cat->saveCategory($data))
				{
					$this->load->model('Categories', 'cat');
					$cat = $this->cat->get_categories();
					//print_r($cat);
					$this->smarty->assign("cat",$cat);
					$this->smarty->assign("title","Add a New Category");
					$this->smarty->assign("suburl",$this->config->item('sub_url'));
					$this->smarty->assign("url",base_url());
					$this->smarty->view( 'admin/addcategory.tpl');	
				
				}
		   }
		
		}
		else
		{
			$this->load->model('Categories', 'cat');
			$cat = $this->cat->get_categories();
			//print_r($cat);
			$this->smarty->assign("cat",$cat);
			$this->smarty->assign("title","Add a New Category");
			$this->smarty->assign("suburl",$this->config->item('sub_url'));
			$this->smarty->assign("url",base_url());
			$this->smarty->view( 'admin/addcategory.tpl');
		}
	}
	public function addcategories()
	{
		if(!$this->checklogin())
		{
			
			redirect('admin/login');
		}
		$images = $this->loadingimages();
			if(!$images)
			{
				$clr = "red";
				$txtmsg = "<span>there were some problem while uploading images. please check the images extention and try again. only allowed extension are (jpg,jpeg,gif,png).</span>";
				
			}
			else
			{
				$this->load->model('Categories', 'cat');
				$data = array(
					'categoryName' => $this->input->post('categ'),
					'imageurl' => $this->input->post('flimg1')
					);
					
				if($this->cat->saveCategory($data))
				{
					$cat = $this->cat->get_categories();
					$this->smarty->assign("suburl",$this->config->item('sub_url'));
					$this->smarty->assign("url",base_url());
					$this->smarty->assign("cat",$cat);
					$this->smarty->view( 'admin/includes/catcontenct.tpl');
				
				}
		   }
	
	}
	public function viewcategory()
	{
		$this->smarty->assign("title","Welcome to admin panel trendymobile");
		$this->smarty->assign("suburl",$this->config->item('sub_url'));
		$this->smarty->assign("url",base_url());
		$this->smarty->view( 'admin/adminusers.tpl');
	}
	public function addModel()
	{
		
		$this->smarty->assign("title","Add a New Model");
		$this->smarty->assign("suburl",$this->config->item('sub_url'));
		$this->smarty->assign("url",base_url());
		$this->smarty->view( 'admin/addmodels.tpl');
	}
	
	public function viewmodels()
	{
		$this->smarty->assign("title","Welcome to admin panel trendymobile");
		$this->smarty->assign("suburl",$this->config->item('sub_url'));
		$this->smarty->assign("url",base_url());
		$this->smarty->view( 'admin/adminusers.tpl');
	}
	
	public function addaccessory()
	{
		
		$this->smarty->assign("title","Add a new Accessory");
		$this->smarty->assign("suburl",$this->config->item('sub_url'));
		$this->smarty->assign("url",base_url());
		$this->smarty->view( 'admin/addaccessory.tpl');
	}
	
	public function viewaccesory()
	{
		$this->smarty->assign("title","Welcome to admin panel trendymobile");
		$this->smarty->assign("suburl",$this->config->item('sub_url'));
		$this->smarty->assign("url",base_url());
		$this->smarty->view( 'admin/adminusers.tpl');
	}
	
	public function addproduct()
	{
		
		$this->smarty->assign("title","Add a New Product");
		$this->smarty->assign("suburl",$this->config->item('sub_url'));
		$this->smarty->assign("url",base_url());
		$this->smarty->view( 'admin/addproduct.tpl');
	}
	
	public function viewproduct()
	{
		$this->smarty->assign("title","Welcome to admin panel trendymobile");
		$this->smarty->assign("suburl",$this->config->item('sub_url'));
		$this->smarty->assign("url",base_url());
		$this->smarty->view( 'admin/adminusers.tpl');
	}
	
	private function loadingimages()
	{
	
		$this->load->model('imagesuploading','upls');
			
			if($_FILES['flimg1']['size'])
			{
				$img1 = 'flimg1';
				
				$status = $this->upls->do_upload($img1);
				if($status != false)
				{
					$images1 = array('imagename' => $status['upload_data']['file_name'],
								'thumbeimage' =>$status['upload_data']['raw_name'].'_thumb'.$status['upload_data']['file_ext']
								
								
								);
					return $images1;		
				}
				else 
				{
					return false;
				}
				//print_r($status);
				
			}
			else 
			return false;
			//print_r($images);
	}
	
}

