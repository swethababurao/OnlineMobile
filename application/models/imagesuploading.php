<?php
class Imagesuploading extends CI_Model {

	var $filepath;
    function __construct()
    {
        parent::__construct();
		$this->filepath = realpath(APPPATH . "../images/images");
    }
	
	function do_upload($filename)
	{
		$config['upload_path'] = $this->filepath;
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size']	= 2000;
		

		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload($filename))
		{
			//$error = array('error' => $this->upload->display_errors());

			return false;
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			
			$config = array(
				'source_image' => $data['upload_data']['full_path'],
				'new_image' => $this->filepath. '/thumbs',
				'maintain_ratio' => true,
				'create_thumb' => true,
				'width' => 150,
				'height' => 100
				
			);
			$this->load->library('image_lib',$config);
			$this->image_lib->resize();
			
			return $data;
			
		}
	}
	
	
	
	
	
}
?>