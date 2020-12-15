<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class XulySP extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'dataloaisp' => $this->showloaisp(),
			'datahangsp' => $this->showhangsp(),
			'datasp' => $this->getsp()
		);
		$this->load->view('sanpham/addsp_view', $data, false);
	}
	private function showhangsp()
	{
		$this->load->model('Sanpham_model');
		$data = $this->Sanpham_model->gethangsp();
		return $data;
	}
	private function showloaisp()
	{
		$this->load->model('Sanpham_model');
		$data = $this->Sanpham_model->getloaisp();
		return $data;
	}
	private function getsp()
	{
		$this->load->model('Sanpham_model');
		$data = $this->Sanpham_model->getsp();
		return $data;
	}
	public function add_Sp()
	{		
		$target_dir = "fileupload/";
        $target_file = $target_dir . basename($_FILES["img"]["name"]); 	 
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) 
        {
	        $check = getimagesize($_FILES["img"]["tmp_name"]);
	        if($check !== false) 
	        {
	            echo "File is an image - " . $check["mime"] . ".";
	            $uploadOk = 1;
	        } 
	        else 
	        {
	            echo "File is not an image.";
	            $uploadOk = 0;
	        }
        }
        // Check file size
        if ($_FILES["img"]["size"] > 2000000) 
        {
	        echo "Sorry, your file is too large.";
	        $uploadOk = 0;
        }

        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) 
	        {
		        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
		        $uploadOk = 0;
	        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) 
	        {
	        echo "Sorry, your file was not uploaded.";
	        // if everything is ok, try to upload file
	        } 
        else 
        {
	        if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
	            echo "The file ". htmlspecialchars( basename( $_FILES["img"]["name"])). " has been uploaded.";
	        } else {
	            echo "Sorry, there was an error uploading your file.";
	        }
        }
        $masp = $this->input->post('masp');
        $tensp = $this->input->post('tensp');
        $hinh = basename($_FILES["img"]["name"]);
		$giagoc = $this->input->post('giagoc');
		$giaban =  $this->input->post('giaban');       
		$mahang = $this->input->post('mahang');
		$maloai = $this->input->post('maloai');
		$this->load->model('Sanpham_model');
		if($this->Sanpham_model->addsp($masp,$tensp,$hinh,$giagoc,$giaban,$mahang,$maloai))
		{
			$this->load->view('sanpham/themsptc_view');

		}
	}
	public function edit_sp($maspEdit)
	{
		$this->load->model('Sanpham_model');
		$datasp = $this->Sanpham_model->EditspById($maspEdit);
		$datasp = array('dulieusp'=> $datasp);
		$this->load->view('sanpham/suasanpham_view', $datasp, FALSE);
	}
	public function updata_sp()
	{
		$masp = $this->input->post('masp');
        $tensp = $this->input->post('tensp');
		$giagoc = $this->input->post('giagoc');
		$giaban =  $this->input->post('giaban');       
		$this->load->model('Sanpham_model');
		$data=$this->Sanpham_model->UpdateSp($masp,$tensp,$giagoc,$giaban);
		if($data)
		{
			$this->load->view('sanpham/suasptc_view',$data,false);
		}
	}
	public function del_sp($maspdel)
	{
		$this->load->model('Sanpham_model');
		if($this->Sanpham_model->DeleteSp($maspdel))
		{
			$this->load->view('sanpham/xoasptc_view');
		}
	}
	public function search_sp()
	{
		$search_text = $this->input->post('search-text');
		$test = $this->security->xss_clean($search_text);
			echo "<pre>";
				var_dump($test);
				echo "</pre>";			
		if($this->security->xss_clean($search_text))
		{
			$search_text = $this->security->xss_clean($search_text,true);
			$this->load->model('Sanpham_model');
			$datasearch = $this->Sanpham_model->searchSp($search_text);		
			// $soluong = count($datasearch);
			$datasearch = array(
				'dulieusearch'=>$datasearch
				// 'soluong'=>$soluong
				);
			if($datasearch)
			{
				$this->load->view('sanpham/searchsp_view', $datasearch, FALSE);
			}
		}
		else{
			$this->load->model('Sanpham_model');
			$datasearch = $this->Sanpham_model->searchSp($search_text);		
			// $soluong = count($datasearch);
			$datasearch = array(
				'dulieusearch'=>$datasearch
				// 'soluong'=>$soluong
				);
			if($datasearch)
			{
				$this->load->view('sanpham/searchsp_view', $datasearch, FALSE);
			}
		}
	}
}	 

/* End of file XulySP.php */
/* Location: ./application/controllers/XulySP.php */