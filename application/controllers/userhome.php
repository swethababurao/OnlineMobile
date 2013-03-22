<?php 

class Userhome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
		$this->smarty->assign("title","Welcome to trendymobile");
		$this->smarty->assign("suburl",$this->config->item('sub_url'));
		$this->smarty->assign("url",base_url());
		//$catagoryData = take all catagory from catagory table
		//$this->smarty->assign("catagoryInfo",$catagoryData);
		
		
		/*
		get catagory data from database  and set it to a varialbe for view
		
		*/
		$product = $this->session->userdata('user_data');
		/*
		print"<pre>";
		print_r($product);
		print"</pre>";
		*/
		if(empty($product)){
			$count = 0;
		}else{
			$count = count($product);
		}
		$this->smarty->assign("cart",$count);

	
		
		
		$this->smarty->view( 'index.tpl');
	}
	
/* The showproduct function will show the list of products belonging to a particular category id by calling the showproducts view. The Category id is static. Example category id is 1 for Apple products. Here we pass the category id to the get_products function present in the product model. */
	public function showproduct($catagoryId){
		

		$this->load->model('Product');
		$this->smarty->assign("title","Show Products");
		$this->smarty->assign("suburl",$this->config->item('sub_url'));
		$this->smarty->assign("prourl",$this->config->item('product_image_url'));
		$this->smarty->assign("url",base_url());
		$productData =$this->Product->get_products($catagoryId);
		$this->smarty->assign("data",$productData);
		$product = $this->session->userdata('user_data');
		if(empty($product)){
			$count = 0;
		}else{
			$count = count($product);
		}
		$this->smarty->assign("cart",$count);
		$this->smarty->view( 'showproducts.tpl');
	}
/* The product details function will furthur show the details of the product like name, model, features and price and so on by calling the showproductdetails view. The productID is passed to the get_product_details function in the product model to fetch the product details of the respective product id. */
	public function product_details($productID){
		$this->load->model('Product');
		$this->smarty->assign("title","Product Details");
		$this->smarty->assign("suburl",$this->config->item('sub_url'));
		$this->smarty->assign("prourl",$this->config->item('product_image_url'));
		$this->smarty->assign("url",base_url());
		$productData =$this->Product->get_product_details($productID);
		$this->smarty->assign("data",$productData);
		$product = $this->session->userdata('user_data');
		if(empty($product)){
			$count = 0;
		}else{
			$count = count($product);
		}
		$this->smarty->assign("cart",$count);
		
		$this->smarty->view( 'showproductdetails.tpl');
	}
	
	public function userregistration()
	{
		$this->smarty->assign("title","New User Registration");
		$this->smarty->assign("suburl",$this->config->item('sub_url'));
		$this->smarty->assign("url",base_url());
		
		$this->smarty->view( 'signup.tpl');
	}
	
	public function usersignin()
	{
		
		$this->smarty->assign("title","Sing In Form");
		$this->smarty->assign("suburl",$this->config->item('sub_url'));
		$this->smarty->assign("url",base_url());
		$this->smarty->view( 'signin.tpl');
	}
	
	
	public function verify_login(){
		$this->load->model('User');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		
		if($this->User->verify_user($email,$password)){
			$this->smarty->assign("title","Welcome to trendymobile");
			$this->smarty->assign("suburl",$this->config->item('sub_url'));
			$this->smarty->assign("url",base_url());
			$this->smarty->assign("username",$this->session->userdata('full_name'));
			
			$this->smarty->view( 'logedin.tpl');
			
					
		}else{
		
		$this->smarty->assign("title","Sing In Form");
		$this->smarty->assign("suburl",$this->config->item('sub_url'));
		$this->smarty->assign("url",base_url());
		$this->smarty->view( 'signinerror.tpl');
		}
		
		
	}
	
	function logout()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
	
	function contact_us()
	{
		$this->smarty->assign("title","Contact Us");
		$this->smarty->assign("suburl",$this->config->item('sub_url'));
		$this->smarty->assign("prourl",$this->config->item('product_image_url'));
		$this->smarty->assign("url",base_url());
		$product = $this->session->userdata('user_data');
		if(empty($product)){
			$count = 0;
		}else{
			$count = count($product);
		}
		$this->smarty->assign("cart",$count);
	    $this->smarty->view( 'contact_us.tpl');
	}
	
	function shopping_cart()
	{
		$this->smarty->assign("title","Shopping Cart");
		$this->smarty->assign("suburl",$this->config->item('sub_url'));
		$this->smarty->assign("prourl",$this->config->item('product_image_url'));
		$this->smarty->assign("url",base_url());
	    $this->smarty->view( 'shopping_cart.tpl');
	}
	

	
	public function saveuserquery(){
		$this->load->model('UserQuery');
		
		$data = array(
			'country_code' => $this->input->post('countryCode'),
			'query_area' => $this->input->post('queryarea'),
			'question' => $this->input->post('question'),
			'full_name' => $this->input->post('fullName'),
			'email' => $this->input->post('email'),				
		);
		    if($this->UserQuery->saveQuestion($data)){
			$this->smarty->assign("title","Successfull Registration");
			$this->smarty->assign("suburl",$this->config->item('sub_url'));
			$this->smarty->assign("url",base_url());
			$this->smarty->view( 'querysaved.tpl');
		}else{
			$this->smarty->assign("title","Successfull Registration");
			$this->smarty->assign("suburl",$this->config->item('sub_url'));
			$this->smarty->assign("url",base_url());
			$this->smarty->view( 'queryerror.tpl');
		}
	}
	
	function showp(){
		$this->smarty->assign("title","Welcome to trendymobile");
		$this->smarty->assign("suburl",$this->config->item('sub_url'));
		$this->smarty->assign("url",base_url());
		
		print "Hi i am show product function";
		exit();
		
	}

	
	public function product_details_by_model(){
		$this->load->model('Product');
		$this->smarty->assign("title","Product Details");
		$this->smarty->assign("suburl",$this->config->item('sub_url'));
		$this->smarty->assign("prourl",$this->config->item('product_image_url'));
		$this->smarty->assign("url",base_url());
		$modelname= $this->input->get('search_query');
		$productData =$this->Product->get_product_details_by_model($modelname);
		$this->smarty->assign("data",$productData);
		$product = $this->session->userdata('user_data');
		if(empty($product)){
			$count = 0;
		}else{
			$count = count($product);
		}
		$this->smarty->assign("cart",$count);
		

		
		$this->smarty->view( 'showproductdetails.tpl');
	}
	
	public function addCart(){
		$prdouct_id = $this->input->get('product_id');
		$product_name = $this->input->get('product_name');
		$price = $this->input->get('price');
		$product_model = $this->input->get('product_model');
		$color = $this->input->get('color');
		$newarray = array('name'=>$prdouct_name,'price'=>$product_price); 
		$this->session->userdata['user_data'][$prdouct_id] = $newarray;
		$this->session->sess_write();
		redirect('/');
	}
	
	
	public function emptycart(){
		$this->session->sess_destroy();
		redirect('/');
	}
	
	function suggestions()
	{
	
		$this->load->model('Product');
	
		// Search term from jQuery
		$term['keyword'] = $this->input->post('term');
	
		$memberList = $this->Product->GetAutocomplete($term);
		//print_r($memberList);
		$arr=array('0'=>$term['keyword']);
		$i=1;
		foreach($memberList as $member){
				
			$arr[$i] = $member->product_model;
			$i++;
		}
		echo json_encode($arr);

	}
	
	
	public function saveuser(){
		$this->load->model('User');
		
		$data = array(
			'full_name' => $this->input->post('full_name'),
			'email' => $this->input->post('email'),
			'password' => $this->input->post('password'),
			'country' => $this->input->post('country'),
			'address' => $this->input->post('address'),
			'zip_code' => $this->input->post('zip_code'),
			'city' => $this->input->post('city'),
			'phone' => $this->input->post('phone')					
		);
		    //$confirm_email = $this->input->post('confirm_email');
		    if($this->User->saveUser($data)){
			//print "Data Successfully Inserted";
			$this->smarty->assign("title","Successfull Registration");
			$this->smarty->assign("suburl",$this->config->item('sub_url'));
			$this->smarty->assign("url",base_url());
			$this->smarty->view( 'successfullregistration.tpl');
		}else{
			//print "database error";
			$this->smarty->assign("title","Successfull Registration");
			$this->smarty->assign("suburl",$this->config->item('sub_url'));
			$this->smarty->assign("url",base_url());
			$this->smarty->view( 'unsuccessfulregistration.tpl');
		}
		
		
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
